<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\LibraryController;
use App\Http\Requests\Apartment;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/apartment/create',[ApartmentsController::class, 'create']);
Route::post('/apartment/create',[ApartmentsController::class, 'store']);
Route::get('/apartment/list',[ApartmentsController::class, 'list']);
Route::get('/apartment/list',[ApartmentsController::class, 'index']);
Route::get('/apartment/edit/{id}',[ApartmentsController::class, 'edit']);
Route::post('/apartment/edit/{id}',[ApartmentsController::class, 'update']);
Route::get('/apartment/delete/{id}',[ApartmentsController::class, 'delete']);
//Route::get('/apartment/create',[Apartment::class, 'rules']);


Route::get('/library/list',[LibraryController::class, 'index']);
