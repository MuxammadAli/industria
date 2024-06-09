<?php


namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;

class TestController extends ApiController
{
    public function index(Request $request)
    {
        return response()->json('You are welcome');
    }
}
