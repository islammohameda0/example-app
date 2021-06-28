<?php

use Illuminate\Support\Facades\Route;

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
// Route::get("/user/{id}","App\Http\Controllers\usercontroller@show_id");
// Route::namespace('App\Http\Controllers')->prefix('user')->group(function(){
//     //all route only access controller or methods in folder name front
//     route::get('/admin1','usercontroller@show_admin_name');
//     route::get('/aqws/{id?}',"usercontroller@show_id");
// });
// route::group( ['namespace' => 'App\Http\Controllers' , 'prefix' => 'user'],function(){
//     route::get('/aqws','usercontroller@show_admin_name')->name('aqws');
//     route::get('/as',"usercontroller@test");
// });


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return 'dashboard';
});