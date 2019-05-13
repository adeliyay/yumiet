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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/admin', function () {
//     return view('admin.admin');
// });

Route::get('/register', function () {
    return view('auth.login');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/order', function () {
    return view('booking');

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu-weightloss', 'WlController@index')->name('menuwl');
Route::get('/menu-musclebuilding', 'MbController@index')->name('menumb');
Route::get('/menu-specialneeds', 'SnController@index')->name('menusn');
Route::get('/menu-regular', 'ReController@index')->name('menure');

// Route::get('/menu-specialneeds', function () {
//     return view('menu.sn');
// });

// Route::get('/menu-regular', function () {
//     return view('menu.re');
// });

Route::get('/history', function () {
    return view('history');
});

Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/detail', function () {
    return view('menu.detail');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/menu', 'ordercontroller@ordered')->name('order.ordered');
Route::get('/menu', 'GoalsController@index')->name('menu');



Route::group(['prefix'=> 'admin', 'middleware' => ['admin', 'auth']], function(){

    Route::get('/', function(){
        return view('admin.admin');
    });
    Route::get('/order', 'ordercontroller@admin')->name('admin.order.index');

    Route::get('/menu', function(){
        return view('admin.menu');
    });

    Route::resource('menu','MenuController');
});
