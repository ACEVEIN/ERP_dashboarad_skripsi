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

Route::get('/',function(){
    return view('_loginpage');
})->name('loginpage');

Route::get('/home', function () {
    return view('master');
});



Route::get('/login',function(){
    return view('pages/_login');
});

Route::get('/register',function(){
    return view('pages/_register');
});

Route::get('/forgetpassword',function(){
    return view('pages/_forgetpassword');
});

Route::get('/blankpage',function(){
    return view('pages/_blankpage');
});

Route::get('/404',function(){
    return view('pages/_404page');
});

Route::get('/onprogress',function(){
    return view('pages/_onprogress');
});

Route::get('/undermaintanance',function(){
    return view('pages/_undermaintanance');
});











Route::get('/font',function(){
    return view('utilities/_font');
});

Route::get('/form',function(){
    return view('utilities/_form');
});

Route::get('/color',function(){
    return view('utilities/_color');
});

Route::get('/icon',function(){
    return view('utilities/_icon');
});

Route::get('/logo',function(){
    return view('utilities/_logo');
});



Route::get('/alert',function(){
    return view('component/_alert');
});

Route::get('/button',function(){
    return view('component/_button');
});

Route::get('/card',function(){
    return view('component/_card');
});

Route::get('/checkbox',function(){
    return view('component/_checkbox');
});

Route::get('/calendar',function(){
    return view('component/_calendar');
});

Route::get('/badge',function(){
    return view('component/_badge');
});

Route::get('/dropdown',function(){
    return view('component/_dropdown');
});

Route::get('/carousel',function(){
    return view('component/_carousel');
});

Route::get('/canvas',function(){
    return view('component/_canvas');
});

Route::get('/notification',function(){
    return view('component/_notification');
});

Route::get('/offcanvas',function(){
    return view('component/_offcanvas');
});

Route::get('/darkmode',function(){
    return view('component/_darkmode');
});

Route::get('/pagination',function(){
    return view('component/_pagination');
});

Route::get('/label',function(){
    return view('component/_label');
});

Route::get('/loader',function(){
    return view('component/_loader');
});

Route::get('/popup',function(){
    return view('component/_popup');
});

Route::get('/texteditor',function(){
    return view('component/_texteditor');
});
Route::get('/magnifier',function(){
    return view('component/_magnifier');
});
Route::get('/pdfviewer',function(){
    return view('component/_pdfviewer');
});
Route::get('/codesnippet',function(){
    return view('component/_codesnippet');
});



Route::get('/charts',function(){
    return view('_charts');
})->name('charts');

Route::get('/dashboard',function(){
    return view('_dashboard');
})->name('dashboard');

Route::get('/table',function(){
    return view('_table');
})->name('table');

Route::get('/loginpage',function(){
    return view('_loginpage');
})->name('loginpage');

