<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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


// Route::get('/about', function () {
//     $name = 'izz';
//     return view('about' , [
//         'name' => $name
//     ]);
// });

// Route::get('/about', function () {
//     $name = 'izz';
//     return view('about')->with('name' , $name);
// });

// Route::get('/about', function () {
//     $name = 'izz';
//     return view('about', compact('name'));
// });

Route::get('/about', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});

Route::get('/tasks', function () {
    $tasks = [
        'first-task 1' => 'task 1',
        'second-task 2' => 'task 2',
        'third-task 3' => 'task 3'
    ];
    return view('tasks', compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task 1' => 'task 1',
        'second-task 2' => 'task 2',
        'third-task 3' => 'task 3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});

//Route::get('/tasks', 'TaskController@index');

Route::get('/contact',[TaskController::class,'index']);
Route::get('/contact/{id}',[TaskController::class,'show']);

