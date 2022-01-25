<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
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

// Route::get('/', fn () => view('home'));

// Route::get('/', function () {
//     return view('home');
//     // dd(asset(''));
// });

Route::get('/',[HomeController::class,'index']);
Route::get('contact',[ContactController::class,'create']);
Route::post('contact',[ContactController::class,'store']);

Route::get('profile/{identifier}',ProfileInformationController::class);


Route::get('task',[TaskController::class,'index']);
// Route::get('task/create',[TaskController::class,'create']);
Route::post('task',[TaskController::class,'store']);
Route::get('task/{id}/edit',[TaskController::class,'edit']);
Route::put('task/{id}',[TaskController::class,'update']);
Route::delete('task/{id}',[TaskController::class,'destroy']);


// Route::view('contact','contact');
// Route::view('post/first-post','posts.show');
// Route::view('about','about');



// Route::get('profile/{name}', function ($name) {
//     // $name=$request->name;

//     // echo 'my name is '.$name;
//     return view('profile',compact('name'));
// });
