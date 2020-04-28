<?php

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

/*
  * *************************************************
  *                                                 *
  * ******************* Website *******************
  *                                                 *
  * *************************************************
  */
Route::get('/Home','Websitecontroller@index' );
Route::get('/History','Websitecontroller@history' );
Route::get('/Our_Services','Websitecontroller@ourservices' );
Route::get('/Our_Programs','Websitecontroller@ourprograms' );
Route::get('/Service','Websitecontroller@service' );
Route::get('/Program','Websitecontroller@program' );
Route::get('/News','Websitecontroller@news' );
Route::get('/Blog','Websitecontroller@blog' );
Route::get('/Gallery','Websitecontroller@gallery' );
Route::get('/Contact','Websitecontroller@contact' );
Route::get('/Faq','Websitecontroller@faq' );
Route::get('/MyAccount','Websitecontroller@myaccount' );
Route::get('/Edit_profile','Websitecontroller@editprofile' );
Route::get('/User_booking','Websitecontroller@userbooking' );
Route::get('/Saved','Websitecontroller@saved' );
Route::get('/Message','Websitecontroller@message' );
Route::get('/Booking','Websitecontroller@booking' );



/*
  **************************************************
  *                                                 *
  *   ******************* End Website**************
  *                                                 *
  * *************************************************
  */


