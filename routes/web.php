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

Route::get('/', 'HomeController@index')->name("home");

Route::get('/profile', 'ProfileController@index')->name("profile");

Route::post('payment/select', 'PaymentController@index')->name('payment.select');

Route::post('/plan/delete', 'PlansController@destroy')->name('plan.destroy');
Route::post('/plan/edit', 'PlansController@edit')->name('plan.edit');
Route::post('/plan/update', 'PlansController@update')->name('plan.update');
Route::resource('plan', 'PlansController', ['except' => ['destroy', 'update', 'edit']]);

Route::post('/credit_card/select', 'Credit_cardController@selectCredit_card')->name('credit_card.select');
Route::post('/credit_card/delete', 'Credit_cardController@destroy')->name('credit_card.destroy');
Route::post('/credit_card/update', 'Credit_cardController@update')->name('credit_card.update');
Route::resource('credit_card', 'Credit_cardController', ['except' => ['destroy', 'update']]);


Route::get('address/select/{plan}', 'AddressController@selectAddress')->name('address.select');
Route::post('/address/delete', 'AddressController@destroy')->name('address.destroy');
Route::post('/address/edit', 'AddressController@edit')->name('address.edit');
Route::post('/address/update', 'AddressController@update')->name('address.update');
Route::resource('address', 'AddressController', ['except' => ['destroy', 'update', 'edit']]);

Route::post('/subscription/delete', 'SubscriptionController@destroy')->name('subscription.destroy');
Route::post('/subscription/edit', 'SubscriptionController@edit')->name('subscription.edit');
Route::post('/subscription/update', 'SubscriptionController@update')->name('subscription.update');
Route::resource('subscription', 'SubscriptionController', ['except' => ['destroy', 'update', 'edit']]);

Route::post('/contact/delete', 'ContactController@destroy')->name('contact.destroy');
Route::resource('contact', 'ContactController', ['except' => ['destroy']]);


Route::get('/profile/password', 'ProfileController@indexPassword')->name("profile.password");

Route::get('/profile/destroy', 'ProfileController@destroy_account')->name("profile.destroy");

Route::post('/profile/email/edit', 'ProfileController@editEmail')->name("profile.email.update");

Route::get('/profile/email', 'ProfileController@indexEmail')->name("profileemail");

Route::post('/profile/edit/update', 'ProfileController@editProfile')->name("profile.edit.update");

Route::get('/profile/edit', 'ProfileController@indexEditProfile')->name("profile.edit");


Route::post('/profile/password/update', 'ProfileController@changePassword')->name("profile.pass.update");

Auth::routes();

Route::get("/about", function()
{
    return view('about');
})->name("about");

Route::get('plans/select', 'PlansPageController@indexPlans')->name('plan.select');

Route::resource('plans', 'PlansPageController');
Route::get('plans/{plan}', 'PlansPageController@selectPlan')->name('plans.select');

Route::get('/home', function () {
    session()->forget('back_url');
    return view('home');
})->name('home');
Route::get('/', function () {
    session()->forget('back_url');
    return view('home');
})->name('home');

