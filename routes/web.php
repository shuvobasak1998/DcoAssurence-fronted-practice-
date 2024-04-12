<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fronted\PageController;

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
    return view('Fronted.Layout.Landing');
});

Route::get('/landing',[PageController::class,'landing_page'])->name('landing');


Route::get('/justselect',[PageController::class,'justselect'])->name('justselect');

Route::get('/bycountry{id}',[PageController::class,'bycountry'])->name('entity_bycountry');
Route::get('/byentity{id}',[PageController::class,'byentity'])->name('state_byentity');
