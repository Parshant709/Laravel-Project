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

// Route::get('/', function () {
//     return view('products');
// });

Route::get('/','EnestController@index');
Route::get('/contact','EnestController@Contact');
Route::get('/products','EnestController@products');
Route::get('/newproducts','EnestController@newproducts');
Route::get('/special','EnestController@special');
Route::view('/login','login');
Route::get('/product/{id}','EnestController@product');


Route::view('/entercat','Insertcategaries');
Route::post('/form-submit','EnestController@form_submit');
Route::get('/Categary','EnestController@cats');

//Enter Products :
Route::view('/insertpro','insertproduct');
Route::post('/submit_pro','EnestController@submitPro');

Route::post('/signup','EnestController@signup');
Route::post('/signin','EnestController@signin');

//Accessing products through categary
Route::get('/catp/{id}','EnestController@catp');


//Search 
Route::post('/search','EnestController@search');

//Logout
Route::get('/logout','EnestController@logout');
Route::get('/faq','EnestController@faq');
Route::view('/admin','Admin.admin');

//CheckOut
Route::get('/checkout','EnestController@checkout');