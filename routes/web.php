<?php

use App\Http\Controllers\BiddingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(BiddingController::class)->group(function()
{
    Route::get('/', 'index')->name('bidding.index');     
});