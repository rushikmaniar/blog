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

Route::get('/','Welcome@index/{name}');
Route::get('/about',function (){
    $rank = DB::table('ranking')->get();
    return view('about',compact('rank'));
});
