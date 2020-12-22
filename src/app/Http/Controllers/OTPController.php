<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OTPController extends ParentController
{
    public function resend(Request $request)
    {
        $request->validate([
            'actionType' => 'required|string',
            'phoneNumber' => 'required|max:11'
        ]);

        $phoneNumber = $request->get('phoneNumber');
        $actionType = $request->get('actionType');

        $data = [
            "phoneNumber" => $phoneNumber,
            "actionType" => $actionType
        ];

        $response = Http::withHeaders($this->headers)
            ->post($this->baseUri . "/otp/resend", $data);

        if ($response->status() == 200) {
            return response()->json([
                "message" => "Please check " . $phoneNumber . " for your OTP"
            ], $response->status());
        }

        if ($response->status() == 400) {
            $decodedResponse = json_decode($response->body());
            return response()->json([
                "message" => $decodedResponse->data[0]->msg
            ], $response->status());
        }

        return response()->json($response->body(), $response->status());
    }

    public function getVerify()
    {
        if (!request()->session()->has('otpData')) {
            $notification = array(
                'message' => 'Invalid request!',
                'alert-type' => 'error'
            );

            return redirect()->route('signIn')->with($notification);
        }

        return view('verify-otp');
    }

    public function postVerify(Request $request)
    {
        $request->validate([
            "phoneNumber" => 'required|numeric',
            "token" => 'required',
            "actionType" => 'required'
        ]);

        $data = [
            "phoneNumber" => $request->get("phoneNumber"),
            "token" => $request->get("token"),
            "actionType" => $request->get("actionType")
        ];

        $response = Http::withHeaders($this->headers)
            ->post($this->baseUri . "/otp/verify", $data);

        if ($response->status() == 200) {
            $response = json_decode($response);
            return response()->json(["message" => $response->message], $response->statusCode);
        }

        if ($response->status() == 404 || 422) {
            $res = json_decode($response);
            return response()->json([
                "message" => $res->data[0]->msg
            ], $response->status());
        }

        if ($response->status() == 500) {
            Log::debug(json_decode($response));
            return response()->json([
                "message" => "Something went wrong"
            ], $response->status());
        }
    }
}
