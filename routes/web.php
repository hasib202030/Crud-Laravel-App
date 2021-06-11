<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\studentController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [studentController::class, 'showData']);
Route::get('/add_data', [studentController::class, 'addData'] );

// post for method is data store
Route::post('/store_data', [studentController::class, 'storeData'] );


