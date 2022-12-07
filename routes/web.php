<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

//Route::get('/tasks', 'TasksController@index'); // Не работает! Не видит класс контроллера!
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/{task}', [TasksController::class, 'show']);

Route::get('/', function () {

    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Misha';

    return view('about', ['name' => $name]);
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about/us', function () {
    return view('about_us');
});

// test
