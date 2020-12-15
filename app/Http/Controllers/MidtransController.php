<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;


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

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

        echo $response->getStatusCode(); // 200
        echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

        // Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });

        $promise->wait();

        return "tokenResponse";
    }

    public function notification_handling(Request $request)
    {
        return $request->all();
    }

    public function payment_finish(Request $request)
    {
        return $request->all();
    }

    public function payment_unfinish(Request $request)
    {
        return $request->all();
    }

    public function payment_error(Request $request)
    {
        return $request->all();
    }

}
