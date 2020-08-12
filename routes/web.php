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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', function () {
    return view('job_view');
});
Route::get('/apply', function () {
    return view('Apply_view');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs', 'JobVacanciesController@index')->name('jobs');
Route::get('/apply', 'ApplyController@Apply')->name('apply');
Route::post('/apply', 'ApplyController@ApplyPost')->name('apply.post');
