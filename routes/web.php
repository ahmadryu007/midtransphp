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

$router->get('/notification/handling', 'MidtransController@notification_handling');
$router->get('/payment/finish', 'MidtransController@payment_finish');
$router->get('/payment/unfinish', 'MidtransController@payment_unfinish');
$router->get('/payment/error', 'MidtransController@payment_error');
