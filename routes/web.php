<?php

use App\Models\Listing;
use App\Http\Controllers\ListingController;


Route::get('/' , [ListingController::class, 'index']);



Route::get('/listing/{listing}',[ListingController::class,'show']);