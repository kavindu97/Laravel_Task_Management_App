<?php

use App\taskmodel;

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
    $tasklist = taskmodel::all();
    return view('welcome')->with('tasks', $tasklist);
});
Route::post('/addtask', 'taskcontroller@addtask');
Route::get('/completed{id}', 'taskcontroller@taskcompleted');
Route::get('/notcompleted{id}', 'taskcontroller@tasknotcompleted');
Route::get('/updatetask{id}', 'taskcontroller@taskupdate');
Route::post('/renametask', 'taskcontroller@taskrename');
Route::get('/deletetask{id}', 'taskcontroller@taskdelete');





