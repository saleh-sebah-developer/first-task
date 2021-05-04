<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('app', function () {
    $tasks =DB::table('tasks')
    ->orderBy('title', 'asc')->get();
    return view('todo', compact('tasks'));
});

Route::post('store', function (Request $request) {
    DB::table('tasks')->insert([
        'title' => $request->title
    ]);
    return redirect()->back();
});
    //title name in db   ,,,,   $request->title name in html reqest



// data base befor balde veido
/*
Route::get('tasks',function(){

    $tasks = DB::table('tasks')->get();
   // dd($tasks);
    return view('task',compact('tasks'));
});

Route::get('tasks/show/{id}', function($id){

    $task = DB::table('tasks')->where('id', $id)->first();
    // $task = DB::table('tasks')->find($id);
   // dd($task);

    return view('show',compact('task'));
});
*/



// befor voide data base
/*

Route::get('/about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::get('/task', function () {
    $tasks = [
        'first-task'=>'task 1',
        'seconde-task'=>'task 2',
        'third-task'=>'task 3'
    ];
    // $tasks = [
    //     'task 1',
    //     'task 2',
    //     'task 3'
    // ];
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
*/
