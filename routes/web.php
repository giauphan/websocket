<?php

declare(strict_types=1);

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\Storage\StorageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);

    Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages'])->name('chat.post');
    Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage'])->middleware('throttle:60,1')->name('messages.send');

    Route::get('/storage', [StorageController::class, 'index'])->name('store');

    Route::get('/file/{fileId}', [ImagesController::class, 'getFile'])->name('getFile');
});

Route::get('/te', [FileUploadController::class, 'index'])->name('upload.show');
Route::post('/upload', [FileUploadController::class, 'store'])->name('upload');
