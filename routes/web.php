<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'api'], function($router){

    // Routes for Auth
    $router->post('login/', 'AuthController@login');

    // Routes for User
    $router->get('user/{id}', 'UserController@viewOneUser');
    $router->post('user/register', 'UserController@register');
    $router->post('user/pay', 'UserController@pay');
    $router->post('user/topup/', 'UserController@requestTopup');
    $router->post('user/balance', 'UserController@viewBalance');
    $router->post('user/pay/history', 'UserController@viewPaymentHistory');
    
    // Routes for Bus
    $router->get('route/', 'BusController@viewRoutes');

    // Routes for Bus Admin
    $router->post('bus-admin/register', 'BusAdminController@register');
    $router->post('bus-admin/bus', 'BusAdminController@viewOneBus');
    $router->post('bus-admin/bus/all', 'BusAdminController@viewAllBusses');
    $router->post('bus-admin/bus/add', 'BusAdminController@addBus');
    $router->post('bus-admin/bus/delete', 'BusAdminController@deleteBus');
    $router->post('bus-admin/bus/update', 'BusAdminController@updateBus');
});