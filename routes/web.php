<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;

use App\Http\Controllers\OwnerController;

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
    return view('homepage');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/search/{owner-first_name}/{owner-surname}/{petName}', function () {
    return view('search');
});

Route::get('/animal/{animal_id}', [AnimalController::class, 'animalDetail'])->name('animal.detail');
Route::put('/animal/{animal}/update', [AnimalController::class, 'update'])->name('animal.update');
Route::delete('/animal/{id}/deleted', [AnimalController::class, 'delete'])->name('animal.delete');

Route::get('/owner/{owner_id}', [OwnerController::class, 'ownerDetail' ])->name('owners.detail');

Route::put('/owner/{owner_id}/update', [OwnerController::class, 'update' ])->name('owners.update');

Route::delete('/owner/{id}/delete', [OwnerController::class, 'delete'])->name('owner.delete');



