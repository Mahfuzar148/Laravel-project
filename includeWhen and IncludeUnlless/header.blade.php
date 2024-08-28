<h1>Header Page</h1>

@forelse ($cars as $key=>$value)
    <h2>{{ $key . '-' . $value }}</h2>
@empty
    <h2>No value found</h2>
@endforelse
