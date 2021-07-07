<?php

use Illuminate\Support\Facades\Route;
use App\Task;

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
Route::get('/auth','IndexController@auth')->name('/auth');
Route::get('/','IndexController@index')->name('/');
Route::post('/task','IndexController@store');
Route::bind('task',function ($value,$route){
    return Task::where('id',$value)->first();
});
Route::get('/task/delete/{task}',['as'=>'delete-task', 'uses'=>'IndexController@destroy']);


Route::get('/reg','IndexController@reg')->name('/reg');
Route::post('/register','IndexController@register')->name('register');

//route for authorization
Route::post('/login','IndexController@login')->name('login');

