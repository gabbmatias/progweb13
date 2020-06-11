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

Auth::routes();
Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/profile', function () {
    return view('auth/profile');
})->name("profile");


Route::get('/profile/password', 'ProfileController@index')->name("profile.password");

Route::post('/profile/email/edit', 'ProfileController@editEmail')->name("profile.email.update");

Route::get('/profile/email', 'ProfileController@indexEmail')->name("profileemail");

Route::post('/profile/edit/update', 'ProfileController@editProfile')->name("profile.edit.update");

Route::get('/profile/edit', 'ProfileController@indexEditProfile')->name("profile.edit");


Route::post('/profile/password/update', 'ProfileController@changePassword')->name("profile.pass.update");


Route::get("/about", function()
{
    return view('about');
})->name("about");

Route::get("/plans", function()
{
    return view('plans');
})->name('plans');

Route::get("/contact", function()
{
    return view('contact');
})->name("contact");

Route::get("/add_address", function()
{
    return view('add_address');
})->name("add_address");

Route::get("/edit_address", function()
{
    return view('edit_address');
})->name("edit_address");

Route::get("/address", function()
{
    return view('address');
})->name("address");

Route::get("/subscription", function()
{
    return view('subscription');
})->name("subscription");

Route::get("/registerplans", function()
{
    return view('registerplans');
})->name("registerplans");

Route::get("/payment", function()
{
    return view('payment');
})->name("payment");

Route::get("/card", function()
{
    return view('card');
})->name("card");

Route::get("/add_card", function()
{
    return view('add_card');
})->name("add_card");

Route::get("/view_address", function()
{
    return view('view_address');
})->name("view_address");

Route::get("/select_plans", function()
{
    return view('select_plans');
})->name("select_plans");

Route::get("/view_plans", function()
{
    return view('view_plans');
})->name("view_plans");

Route::get("/edit_plans", function()
{
    return view('edit_plans');
})->name("edit_plans");

// Route::get('/home', 'HomeController@index')->name('home');
