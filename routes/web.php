<?php

use App\Models\Listing;


Route::get('/' , function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listing' => Listing::all()
    ]);
});


Route::get('/listing/{listing}', function (Listing  $listing) {
    return view('listing',[
            'listing'=> $listing
        ]);
});