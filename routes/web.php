<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\UsersController as ControllersUsersController;
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
Route::get('/home', function () {
   echo 'home';
});
Route::get('/about', function () {
    echo 'about';
 });

 Route::get('products',[ProductController::class,'main']);
Route::get('user',[ControllersUsersController::class,'main']);
Route::prefix('users')->controller(UsersController::class)->group(function(){
    Route::get('all','index');
    Route::get('add/{id?}','create');
    Route::get('edit','edit');
    Route::get('delete','delete');
});
Route::get('users/{id}/role/{roleid}',function($id,$roleid){
    echo "the id of this user is $id and his role id is $roleid";
});
