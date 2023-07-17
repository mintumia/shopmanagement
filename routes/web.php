<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MintuHomeTest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/******Git command**********/
/*git remote set-url git@github.com:mintumia/shopmanagement.git*/

Route::get('/', function () {
    return view('layouts.common.app');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::get('test',[MintuHomeTest::class,"home"])->name("home")->middleware('permission:update article');
