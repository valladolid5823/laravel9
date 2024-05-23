<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::get('/user/{id}/{group}', function($id, $group) {
//     return response ($id. ' - '.$group, 200);
// });

// Route::get('/request-json', function() {
//     return response()->json(['name' => 'PinoyFreeCoder', 'age' => 22]);
// });

// Route::get('/request-download', function(){
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type: application/text-plain',
//     );
//     return response()->download ($path, $name, $headers);
// });

// Alliasing users to login
// Route::get('/users', [UserController::class, 'index'])->name('login');

// Route::get('/users', [UserController::class, 'index']);

// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

// // Route::get('/students', [StudentController::class, 'index']);

// Route::get('/students/{id}', [StudentController::class, 'show']);


// Common routes naming
// index - show all data
// show - show single data
// create - show a form to a new user
// store - store data
// edit - update data
// update - update data
// destroy - delete data

Route::get('/', [StudentController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);


