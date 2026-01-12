<h1>{{ $header }}</h1>

@forelse ($listing as $list)
    <h2>
        <a href="/list/{{ $list['id'] }}">
            {{ $list['title'] }}
        </a>
    </h2>

    <p>{{ $list['desc'] }}</p>
@empty
    <p>No listings found</p>
@endforelse
