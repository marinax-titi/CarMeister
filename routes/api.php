<?php

use Illuminate\Http\Request;
use App\Contact;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middlewhare' => 'api'], function()
{
  Route::get('contacts', 'ContactController@index')->name('contact.index');
  Route::get('contact/{id}', 'ContactController@getContact')->name('contact.get');
  Route::post('contact/store', 'ContactController@store')->name('contact.store');
  Route::patch('contact/{id}', 'ContactController@update')->name('contact.update');
  Route::delete('contact/{id}', 'ContactController@delete')->name('contact.delete');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
