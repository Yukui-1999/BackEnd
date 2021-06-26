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


Route::get('test', function () {
    return view('test');
});

#Route::get('new', function () {
#   return view('new');
#});

Route::get('/', function () {
   # return view('welcome4')->with([
   #     'message'=>'你已经提交申请，请您耐心等待！',
   #     'url'=>'http://tian.com:5000',
   #     'jumpTime'=>3,
   # ]);
   return view('welcome');
});
Route::get('/new', 'StaticController@index')->name('new');
Route::get('/test', 'StaticController@test')->name('test');
Route::get('/new/{age}', 'StaticController@index')->middleware(\App\Http\Middleware\CheckAge::class);


Route::get('/delete/{ID}','StaticController@delete');
Route::get('/query/{ID}','StaticController@query');
Route::get('/insert/{NAME}/{DESCRIPTION}/{CREDITS}/{MAX}','StaticController@insert');
Route::get('/update/{ID}/{choose}/{updated}','StaticController@update');

Route::apiResource('/login','LoginController')->middleware(\App\Http\Middleware\CrossHttp::class);;
Route::apiResource('/findpsw','PassforgotController')->middleware(\App\Http\Middleware\CrossHttp::class);;
Route::apiResource('/systemlog','SystemlogController')->middleware(\App\Http\Middleware\CrossHttp::class);;