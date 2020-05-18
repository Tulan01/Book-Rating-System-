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

Route::get('/', 'RateController@index')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
Route::post('/admin/store', 'Auth\AdminRegisterController@adminstore')->name('adminstore');



//catagory
Route::get('/add/catagory', 'CatagoryController@addcatagory')->name('addcatagory');
Route::post('/store/catagory', 'CatagoryController@storecatagory')->name('storecatagory');
Route::get('/view/catagory', 'CatagoryController@viewcatagory')->name('viewcatagory');
Route::get('/deletecatagory{id}','CatagoryController@deletecatagory');
Route::get('/editcatagory{id}','CatagoryController@editcatagory');
Route::post('/updatecatagory{id}', 'CatagoryController@updatecatagory');
//add book
Route::get('/addbook','PostController@addbook')->name('addbook');
Route::post('/storebook','PostController@storebook')->name('storebook');
Route::get('/viewpost{id}','PostController@viewpost');
Route::get('/updatepost{id}','PostController@updatepost');
Route::post('/editbook{id}','PostController@editebook')->name('editbook');
Route::get('/deletepost{id}','PostController@deletepost');


//rating
Route::get('/rthome','RateController@index');
Route::get('/viewubook{id}','RateController@viewubook')->name('viewubook');

Route::get('/ratebook{id}','RateController@ratebook')->name('ratebook');
Route::post('/storerate','RateController@storebook')->name('storerate');

Route::get('/abcd{id} {ab}', 'HomeController@abcd')->name('abcd');

