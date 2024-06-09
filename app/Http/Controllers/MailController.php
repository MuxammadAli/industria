<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MySendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $send = new \stdClass();
        $send->name = 'Demo One Value';
        $send->email = 'milesmuhammad66@gmail.com';

        Mail::send("", ['send' => $send],
        function($message) use($send) {
            $message->from('milesmuhammad66@gmail.com');
            $message->to($send->email);
        });
    }
}   