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
    return view('welcome');
});

Route::get("admin/index","AdminController@index")->name("admin.index");
Route::any("admin/add","AdminController@add")->name("admin.add");
Route::any("admin/edit/{id}","AdminController@edit")->name("admin.edit");
Route::get("admin/del/{id}","AdminController@del")->name("admin.del");
Route::any("admin/login","AdminController@login")->name("admin.login");
Route::any("admin/logout","AdminController@logout")->name("admin.logout");


Route::get("taoc/index","TaocController@index")->name("taoc.index");
Route::any("taoc/add","TaocController@add")->name("taoc.add");
Route::any("taoc/edit/{id}","TaocController@edit")->name("taoc.edit");
Route::get("taoc/del/{id}","TaocController@del")->name("taoc.del");



Route::get("member/index","MemberController@index")->name("member.index");
Route::any("member/add","MemberController@add")->name("member.add");
Route::any("member/edit/{id}","MemberController@edit")->name("member.edit");
Route::get("member/del/{id}","MemberController@del")->name("member.del");
Route::any("member/cz/{id}","MemberController@cz")->name("member.cz");
Route::any("member/xf/{id}","MemberController@xf")->name("member.xf");



Route::get("order/index","OrderController@index")->name("order.index");