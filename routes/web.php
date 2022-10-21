<?php

use Illuminate\Support\Facades\Route;
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

Route::get(
    '/',
    ['App\Http\Controllers\HomePageController', 'homePage']
);

Route::get(
    '/search-view',
    ['App\Http\Controllers\SearchController', 'index']
);

Route::get(
    '/search',
    ['App\Http\Controllers\SearchController', 'search']
);


Route::get('/owner/{owner_id}', [OwnerController::class, 'ownerDetail' ])->name('owners.detail');

Route::put('/owner/{owner_id}/update', [OwnerController::class, 'update' ])->name('owners.update');


