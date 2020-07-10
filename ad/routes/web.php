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


route::get('/admin-login', 'AdminController@index');

route::get('/layout','AdminController@show');
route::post('/admin-dashboard','AdminController@dashboard');

route::get('/trangchu', 'AdminController@trangchu');


route::get('/dangnhap','AdminController@dangnhap');


 route::get('/dangky','AdminController@dangky');
    
route::namespace('gamepage')->prefix('game')->group(function(){
    route::get('terraria','GameController@terraria');
    route::get('stardewvalley','GameController@stardewvalley');
    route::get('broforce','GameController@broforce');
    route::get('ws4','GameController@ws4');
});
route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    route::prefix('infor')->name('infor.')->group(function(){
        route::get('index','InformationController@index')->name ('index');

        route::get('create','InformationController@create')->name ('create');
        route::post('create','InformationController@store')->name ('store');

        route::get('edit/{id}','InformationController@edit')->name ('edit');
        route::post('edit/{id}','InformationController@update')->name ('update');

        route::get('destroy/{id}','InformationController@destroy')->name ('destroy');
    });   
});    
 







