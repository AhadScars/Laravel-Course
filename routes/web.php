<?php

use App\Models\Listing;


Route::get('/' , function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listing' => Listing::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    return view('listing',[
            'listing'=> Listing::find($id)]);
});