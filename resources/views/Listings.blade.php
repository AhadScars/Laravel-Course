@extends('layout')


@section('content')
@include("partials._hero")
@include("partials._search")


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@unless (count($listing) == 0)


@foreach ($listing as $lisitng)
   
    <x-listing-card :listing="$lisitng" />

@endforeach

@else
    <p>no Listing Found</p>


@endunless
</div>
@endsection