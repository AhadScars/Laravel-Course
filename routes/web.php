<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

Route::get('/', function () {
    return view('welcome', [
        'header' => 'Latest Posts',
        'listing' => Listing::getAll()
    ]);
});

Route::get('/list/{id}', function ($id) {
    $listing = Listing::find($id);

    if (!$listing) {
        abort(404);
    }

    return view('listing', [
        'listing' => $listing
    ]);
});
