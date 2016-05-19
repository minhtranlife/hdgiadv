<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    // DEFAULT
Route::get('/', 'HomeController@index');

Route::get('dvlt/sotc',function(){
    $model = \App\HdDvLt::orderBy('stt','asc')
        ->get();
    return view('dvlt.sotc.index')
        ->with('model',$model)
        ->with('pageTitle','Sở tài chính');
});