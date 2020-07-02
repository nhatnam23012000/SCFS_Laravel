<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cook', 'HomeController@cook')->name('home.cook');
Route::get('/stallowner', 'HomeController@stallowner')->name('home.stallowner');
Route::get('/manager', 'HomeController@manager')->name('home.manager');
Route::get('/itstaff', 'HomeController@itstaff')->name('home.itstaff');


Route::get('/order', 'OrderController@index')->name('order');

Route::get('/manage/{user}', 'ManageController@index')->name('manage.show');

Route::get('manage/detail/{order}', 'ManageController@detail')->name('manage.detail');

Route::get('/order/{stall}', 'StallController@index')->name('stall.show');

Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');

Route::get('empty', function (){
    Cart::destroy();
});

Route::get('/checkout', 'CheckoutController@index')->name('checkout.show');

Route::get('/home/detail/{order}','CookController@index')->name('cook.detail');
Route::get('/home/detail/{order}/updated', 'CookController@update')->name('cook.update');
