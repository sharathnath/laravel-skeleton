<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "admin" middleware group. Enjoy building your admin module!
|
*/

Route::get('/', function () {
    return 'welcome to Admin!';
});
