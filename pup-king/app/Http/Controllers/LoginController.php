<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{

    public function loginSubmit(LoginRequest $request)
    {

        Log::info("======Enter loginSubmit ===========");

        // $request->validate([ //validation
        //     'username' => ['required', 'email'], //userName must be email
        //     'password' => ['required']
        // ]);

        try {
            $userName = $request->input('username');
            $password = $request->input('password');

            Log::info("Try login username: " . $userName);
            Log::debug("Try login pass: " . $password);
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
        Log::info("======Exit loginSubmit ===========");
    }
}
