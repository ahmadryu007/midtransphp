<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class MidtransController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function charge(Request $request){

        Log::info('Midtrans Request : '.json_encode($request->all()));
        $serverKey = "SB-Mid-server-FZ3hGmsoInZ4vRDDuLnW1lVZ";
        $authString = base64_encode($serverKey);

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic '.$authString,
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $response = $client->request('POST', 'https://app.sandbox.midtrans.com/snap/v1/transactions', [
            'body' => json_encode($request->all())
        ]);
        
        $responseValue = $response->getBody();
        Log::info('Midtrans Response : '.json_encode($responseValue->getContents()));

        //return new JsonResponse($response);
        return response()->json(['data' => $responseValue->getContents(), 'code' => '200']);
    }

    public function notification_handling(Request $request)
    {
        Log::info('Midtrans Request : '.json_encode($request->all()));
        return $request->all();
    }

    public function payment_finish(Request $request)
    {
        Log::info('Midtrans Request : '.json_encode($request->all()));
        return $request->all();
    }

    public function payment_unfinish(Request $request)
    {
        Log::info('Midtrans Request : '.json_encode($request->all()));
        return $request->all();
    }

    public function payment_error(Request $request)
    {
        Log::info('Midtrans Request : '.json_encode($request->all()));
        return $request->all();
    }

}
