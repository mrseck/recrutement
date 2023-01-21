<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantsController;

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


Route::view('/', 'enregistrement.add');
Route::view('/liste-participants', 'enregistrement.index');

Route::get('/index', [ParticipantsController::class, 'index']);

Route::get('/add', [ParticipantsController::class, 'create']);
Route::post('insert-participant', [ParticipantsController::class, 'store']);
Route::get('edit-participant/{id}', [ParticipantsController::class,'edit']);
Route::put('update-participant{id}', [ParticipantsController::class,'update']);
Route::get('delete-participant/{id}', [ParticipantsController::class,'destroy']);


