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

Route::get('/about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::get('task', function () {

    $tasks = [
        'first-task'=>'task 1',
        'seconde-task'=>'task 2',
        'third-task'=>'task 3'
    ];
    return view('task', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task'=>'task 1',
        'seconde-task'=>'task 2',
        'third-task'=>'task 3'
    ];
    $task = $tasks[$id];
    return view('show',compact('task'));
});
