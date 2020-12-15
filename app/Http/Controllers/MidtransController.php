<?php

namespace App\Http\Controllers;
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
