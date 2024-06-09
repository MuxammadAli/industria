<?php

namespace App\Http\Controllers\Api\v1\frontend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Interfaces\iUserInterface;
use App\Models\Answers;
use App\Models\Comments;
use App\Models\Feedback;
use App\Models\Posts;
use App\Models\Questions;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Lang;
use League\OAuth2\Server\ResourceServer;
use Modules\Playmobile\Entities\PhoneConfirmation;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group User
 *
 */
class UserController extends Controller
{
    public $successStatus = 200;
    public $interface;
    public $server;

    public function __construct(ResourceServer $server, iUserInterface $interface)
    {
        $this->interface = $interface;
        $this->server = $server;
    }

    /**
     * User sign
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function sign(Request $request)
    {
        $request->phone = preg_replace('/\D+/', null, $request->phone);

        $request->validate([
            'phone' => 'required',
        ]);
        if (User::where(['phone' => $request->phone])->exists()) {
            return response()->json(['errors' => ['phone' => ['Phone exists']]], 422);
        }
        return $this->interface->sendSms($request->phone);
    }

    /**
     * User sign-in
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function signIn(Request $request)
    {

        $request->phone = preg_replace('/\D+/', null, $request->phone);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            /**
             * @var $user User
             */

            $user = Auth::user();
            $userRole = $user->role()->first();
            $success['token'] = $user->createToken('MyApp', [
                $userRole->role
            ])->accessToken;
            $success['user'] = $user;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['errorMessage' => 'User not found'], 401);
        }
    }

    /**
     * @param Request $request
     * @param $phone
     * @return \Illuminate\Http\JsonResponse
     */
    public function confirm(Request $request, $phone)
    {
        $phone = preg_replace('/\D+/', null, $phone);

        $request->validate([
            'code' => 'required|integer'
        ]);

        DB::beginTransaction();
        try {
            $phoneConfirmation = PhoneConfirmation::where([
                'phone' => $phone,
                'code' => $request->code,
                'status' => PhoneConfirmation::STATUS_UNCONFIRMED
            ])->first();
            if ($phoneConfirmation instanceof PhoneConfirmation) {

                $phoneConfirmation->update(['status' => PhoneConfirmation::STATUS_CONFIRMED]);

                $user = $this->interface->getOrCreateUser($phone);

                if ($user) {
                    $userRole = $user->role()->first();
                    $success['token'] = $user->createToken('MyApp', [
                        $userRole->role
                    ])->accessToken;
                    $success['user'] = $user;
                } else {
                    $response = ['errorMessage' => 'User not found'];
                    return response()->json($response, 422);
                }
                DB::commit();
            } else {
                $response = ['errorMessage' => 'User phone or confirmation code mismatch'];
                return response()->json($response, 422);
            }
        } catch (\Exception $exception) {
            DB::rollBack();
            $response = ['errorMessage' => $exception->getMessage()];
            return response()->json($response, 422);
        }
        return response()->json(['success' => $success], $this->successStatus);
    }

    /**
     * User registration complete
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function register(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'string|required',
            'bio' => 'string|nullable',
            'password' => 'string|min:6|required',
        ]);
        $user->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'status' => User::STATUS_ACTIVE,
            'password' => bcrypt($request->password),
        ]);
        return $user;
    }

    /**
     * User resend sms verification
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function resend(Request $request)
    {
        $phone = preg_replace('/\D+/', null, $request->phone);

        $request->validate([
            'phone' => 'required'
        ]);

        return $this->interface->sendSms($phone);
    }

    /**
     * User update
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $request->only('name','bio','photo','bg');
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->get('password'));
        }

        $user->update($data);

        if (!empty($request->append)) {
            $user->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $user->load(explode(',', $request->include));
        }

        return response()->json($user, $this->successStatus);
    }

    /**
     * User get-me
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function details(Request $request)
    {
        $user = Auth::user();
        if (!empty($request->append)) {
            $user->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $user->load(explode(',', $request->include));
        }
        return response()->json($user, $this->successStatus);
    }

    /**
     * User get balance
     *
     * @return array|string|string[]|null
     */
    public function balance()
    {
        $user = Auth::user();
        $client = Http::withToken(env('BILLING_TOKEN'))
            ->get(env('BILLING_URL') . 'billing/user/balance/' . $user->phone);
        $balance = preg_replace("#[\D]+#", null, $client->body());
        $user->update(['balance' => $balance]);
        return $balance;
    }

    /**
     * User logout
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        DB::table('oauth_access_tokens')
            ->where('user_id', Auth::id())
            ->update([
                'revoked' => true
            ]);
        return response()->json('Successfully logged out', 204);
    }
}
