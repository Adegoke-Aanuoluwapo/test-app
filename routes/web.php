<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
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

// All listing
Route::get('/', [ListingController::class, 'index']);


// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);
