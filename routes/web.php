<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$app->get('/qiscuss', function ()  {
    return view('qiscuss', []);
});

$router->post('/notification/handling', 'MidtransController@notification_handling');

$router->post('/payment/finish', 'MidtransController@payment_finish');
$router->post('/payment/unfinish', 'MidtransController@payment_unfinish');
$router->post('/payment/error', 'MidtransController@payment_error');

$router->post('/charge', 'MidtransController@charge');
