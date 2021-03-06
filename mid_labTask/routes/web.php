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
//     return view('welcome');
// });

Route::get('/login','LoginController@index')->name('login.index');
Route::get('/logout','LogoutController@logout')->name('logout');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::post('/registration','RegistrationController@registration')->name('registration.registration');

//Admin

Route::get('/admin/dashboard','AdminController@index')->name('admin.index');
Route::get('/addUser','AdminController@addIndex')->name('admin.addIndex');
Route::post('/addUser','AdminController@addUser')->name('admin.addUser');
Route::get('/userList',"AdminController@userlist")->name('admin.userlist');
Route::get('user/delete/{id}',"AdminController@delete")->name('admin.delete');
Route::get('user/edit/{id}',"AdminController@edit")->name('admin.edit');
Route::post('user/edit/{id}',"AdminController@update")->name('admin.update');

//product
Route::get('product/addProduct',"ProductController@addProductView")->name('product.addProductView');
Route::post('product/addProduct',"ProductController@addProduct")->name('product.addProduct');
Route::get('user/upcomingProduct',"ProductController@upcomingProduct")->name('product.upcomingProduct');
Route::get('user/existingProduct',"ProductController@existingProduct")->name('product.existingProduct');