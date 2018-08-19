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


Auth::routes();
Route::group(["middleware" => ['auth']],function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/complain','ComplaintsController@complainForm')->name('complain');
    Route::get('/api/subfields/{id}','FieldController@getList')->name('getting.subfields');
    Route::get('/home',function (){
        return view('layouts.agent-dashboard');
    })->name('dash.board');
    Route::resource('submit','ComplaintsController');
    Route::get('/pending/complains',function (){
      $list = \App\Complaint::all()->where('status',0);
        return view('layouts.complainId',compact('list'));
    })->name('pending.complain');

});
