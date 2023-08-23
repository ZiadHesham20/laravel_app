<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    
    //echo config(['app.locale'=>'ar']);
    App::setLocale('fr');
    
    var_dump(config(['auth.providers.users.driver'=>'Ziad']));
    echo config('auth.providers.users.driver');
    //echo config('app.locale');
    return view('hello');
});