<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookController;

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

Route::resource('/books_form', BookController::class);

Route::get('/contact_form',
[ContactFormController::class, 'index'])
->name('contact.index');

Route::post('/contact_form/confirm',
[ContactFormController::class, 'confirm'])
->name('contact.confirm');

Route::post('/contact_form/complete',
[ContactFormController::class, 'store'])
->name('contact.store');

Route::get('/contact_form/{id}',
[ContactFormController::class, 'show'])
->name('contact.show');

Route::get('/contact_form/{id}/edit',
[ContactFormController::class, 'edit'])
->name('contact.edit');

Route::post('/contact_form/{id}',
[ContactFormController::class, 'update'])
->name('contact.update');

Route::post('/contact_form/{id}/delete',
[ContactFormController::class, 'delete'])
->name('contact.delete');


Route::get('/', function () {
    return view('welcome');
});


// 第一引数がUPL,第二引数が関数
Route::get('/hello', function () {
    return view('hello');
});

Route::get('/blade_variable', function(){
    return view('b_variable');
});
