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
    $model = \App\HdDvLt::where('plcn','SoTC')
        ->orderBy('stt','asc')
        ->get();
    return view('dvlt.sotc.index')
        ->with('model',$model)
        ->with('pageTitle','Sở tài chính');
});
Route::get('dvlt/dn',function(){
    $model = \App\HdDvLt::where('plcn','DN')
        ->orderBy('stt','asc')
        ->get();
    return view('dvlt.sotc.index')
        ->with('model',$model)
        ->with('pageTitle','Doanh nghiệp cung cấp dịch vụ lưu trú');
});

//Đơn vị vận tải xe khách
Route::get('dvxk/sotc',function(){
    $model = \App\HdDvVtXk::where('plcn','SoTC')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('url','data/uploads/dvxk/')
        ->with('model',$model)
        ->with('pageTitle','Sở tài chính');
});
Route::get('dvxk/dn',function(){
    $model = \App\HdDvVtXk::where('plcn','DN')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('url','data/uploads/dvxk/')
        ->with('model',$model)
        ->with('pageTitle','Doanh nghiệp cung cấp dịch vụ vận tải');
});
//End đơn vị vận tải xe khách

//Đơn vị vận tải xe buýt
Route::get('dvxb/sotc',function(){
    $model = \App\HdDvVtXb::where('plcn','SoTC')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvxb/')
        ->with('pageTitle','Sở tài chính');
});
Route::get('dvxb/dn',function(){
    $model = \App\HdDvVtXb::where('plcn','DN')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvxb/')
        ->with('pageTitle','Doanh nghiệp cung cấp dịch vụ vận tải');
});
//End đơn vị vận tải xe buýt

//Đơn vị vận tải xe taxi
Route::get('dvxtx/sotc',function(){
    $model = \App\HdDvVtXtx::where('plcn','SoTC')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvxtx/')
        ->with('pageTitle','Sở tài chính');
});
Route::get('dvxtx/dn',function(){
    $model = \App\HdDvVtXtx::where('plcn','DN')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvxtx/')
        ->with('pageTitle','Doanh nghiệp cung cấp dịch vụ vận tải');
});
//End đơn vị vận tải xe taxi

//Đơn vị vận tải chở hàng
Route::get('dvch/sotc',function(){
    $model = \App\HdDvVtKhac::where('plcn','SoTC')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvvtkhac/')
        ->with('pageTitle','Sở tài chính');
});
Route::get('dvch/dn',function(){
    $model = \App\HdDvVtKhac::where('plcn','DN')
        ->orderBy('stt','asc')
        ->get();
    return view('dvvt.sotc.index')
        ->with('model',$model)
        ->with('url','data/uploads/dvvtkhac/')
        ->with('pageTitle','Doanh nghiệp cung cấp dịch vụ vận tải');
});
//End đơn vị vận tải chở hàng