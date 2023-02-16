<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/register', function () {
    return View('register');
});

Route::get('/userlist', function () {
    return View('userlist');
});

Route::get('/useredit', function () {
    return View('useredit');
});

Route::get('/userview', function () {
    return View('userview');
});

Route::get('/userview', function () {
    return View('userview');
});


Route::post('/login', [UserController::class, 'login']);    
Route::post('/register', [UserController::class, 'register']);  
Route::get('/userlist', [UserController::class, 'search']);
Route::get('/userdelete', [UserController::class, 'deleteuser']);
Route::post('/useredit', [UserController::class, 'edituser']);
Route::get('/useredit', [UserController::class, 'getuser']);
Route::get('/userview', [UserController::class, 'viewuser']);
