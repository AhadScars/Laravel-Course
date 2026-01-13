<h1>{{ $heading }}</h1>

@unless (count($listing) == 0)


@foreach ($listing as $item)
    <h2>
        <a href="/listing/{{ $item['id'] }}">{{ $item['title'] }}</a>
    </h2>
    <p>{{ $item['description'] }}</p>
@endforeach

@else
    <p>no Listing Found</p>


@endunless