<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ParentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends ParentController
{
    public function getSignUp()
    {
        return view('auth/signup');
    }

    public function postSignUp(Request $request)
    {
        request()->validate([
            'phoneNumber' => ['required', 'max:11'],
            'firstName' => ['required', 'string', 'max:100'],
            'lastName' => ['required', 'string', 'max:100'],
            'email' => ['sometimes', 'required', 'email'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $data = [
            "phoneNumber" => request()->get('phoneNumber'),
            "firstName" => request()->get('firstName'),
            "lastName" => request()->get('lastName'),
            "email" => !empty(request()->get('email')) ? request()->get('email') : "",
            "password" => request()->get('password'),
            "userType" => (request()->get('account') == "cm") ? 3000 : 2000,
        ];

        $response = Http::withHeaders($this->headers)
            ->post($this->baseUri . "/auth/signup", $data);

        Log::debug(json_encode($response->body()));

        if ($response->status() == 201 || $response->status() == 200) {

            $apiResponse = json_decode($response->body());

            $otpData = [
                "actionType" => "activate_account",
                "phoneNumber" => $apiResponse->data->phoneNumber
            ];

            $otpData = json_encode($otpData);
            $request->session()->put('otpData', $otpData);

            return response()->json([
                "message" => $apiResponse->message
            ], $response->status());
        }

        return response()->json($response->body(), $response->status());
    }

    public function getSignIn()
    {
        return view('auth/signin');
    }

    public function postSignIn(Request $request)
    {
        $request->validate([
            "phoneNumber" => "required",
            "password" => "required"
        ]);

        $data = [
            "phoneNumber" => $request->get('phoneNumber'),
            "password" => $request->get('password')
        ];

        $response = Http::withHeaders($this->headers)
            ->post($this->baseUri . "/auth/signin", $data);

        if ($response->status() == 422) {
            Log::error($response);

            return response()->json([
                "message" => "Something went wrong. Please contact support."
            ], 500);
        }

        if ($response->status() == 404) {
            Log::error($response->status());
            Log::error($response->body());

            return response()->json($response->body(), $response->status());
        }

        if ($response->status() == 401) {
            $otpData = [
                "actionType" => "activate_account",
                "phoneNumber" => $response['phoneNumber']
            ];
            $otpData = json_encode($otpData);
            $request->session()->put('otpData', $otpData);

            return response()->json([
                "message" => $response['message']
            ], $response->status());
        }

        if ($response->status() == 200) {
            $data = json_decode($response->body());

            $request->session()->put('authUser', $data->data);
            return response()->json($response->body(), $response->status());
        }

        Log::debug($response->status());
        Log::debug($response);

        return response()->json([
            "message" => "Something went wrong. Please contact support"
        ], 500);
    }

    public function logOut(Request $request)
    {
        if ($request->get('uuid')) {
            if (request()->session()->has($request->get('uuid'))) {
                request()->session()->remove($request->get('uuid'));

                return response()->json([
                    "message" => "success"
                ], 200);
            }
        }
    }

    public function getPasswordReset()
    {
        return view('auth/passwordreset');
    }

    public function postPasswordReset(Request $request)
    {
        //TODO
    }

    public function getResetPassword()
    {
        return view('auth/resetpassword');
    }

    public function postResetPassword(Request $request)
    {
        //TODO
    }
}
