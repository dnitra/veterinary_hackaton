<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalController;

use App\Http\Controllers\OwnerController;



Route::get(
    '/',
    ['App\Http\Controllers\HomePageController', 'homePage']
);

Route::get(
    '/search',
    ['App\Http\Controllers\SearchController', 'index']
);

Route::get(
    '/search',
    ['App\Http\Controllers\SearchController', 'search']
);




Route::get('/animal/{animal_id}', [AnimalController::class, 'animalDetail'])->name('animal.detail');
Route::put('/animal/{animal}/update', [AnimalController::class, 'update'])->name('animal.update');
Route::delete('/animal/{id}/deleted', [AnimalController::class, 'delete'])->name('animal.delete');

Route::get('/owner/{owner_id}', [OwnerController::class, 'ownerDetail'])->name('owners.detail');

Route::put('/owner/{owner_id}/update', [OwnerController::class, 'update'])->name('owners.update');

Route::delete('/owner/{id}/delete', [OwnerController::class, 'delete'])->name('owner.delete');




Route::get('/owner/{owner_id}', [OwnerController::class, 'ownerDetail'])->name('owners.detail');

Route::put('/owner/{owner_id}/update', [OwnerController::class, 'update'])->name('owners.update');
