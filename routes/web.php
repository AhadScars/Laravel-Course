<?php

use App\Models\Listings;


Route::get('/' , function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listing' => Listings::all()
    ]);
});


Route::get('/listing/{id}', function ($id) {
    return view('listing',[
            'listing'=> Listings::find($id)]);
});