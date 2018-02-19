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
    return view('admin.dashboard');
});

Route::get('/list', function () {
    $boards = App\Board::all();

    return $boards;
});

Route::get('/save/{title}', function ($title) {
    $board = new App\Board;
    $board->store($title);
    return $title;
});

Route::get('name/{name}', function ($name) {
    return view('yourname', compact('name'));
    //return view('yourname', ['name' => $name]);
    //return view('yourname')->with('name', $name);
});

Route::get('name3/{name}', 'NameController@showName');

Route::get('list_board', 'BoardController@show')->name('board.list');
Route::get('create_board', 'BoardController@create')->name('board.create');
Route::post('store_board', 'BoardController@store')->name('board.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 관리자 알림톡 이용방법 페이지 호출
// Route::get('/admin/allimtalk/usage', 'AllimtalkController@showAdminAllimtalkUsage')->name('admin.allimtalk.usage');
// Route::get('/admin/allimtalk/setting', 'AllimtalkController@showAdminAllimtalkSetting')->name('admin.allimtalk.setting');


Route::group(['prefix' => '/admin/allimtalk/'], function () {
    Route::get('usage','AllimtalkController@showAdminAllimtalkUsage')->name('admin.allimtalk.usage');
    Route::get('setting','AllimtalkController@showAdminAllimtalkSetting')->name('admin.allimtalk.setting');
});























