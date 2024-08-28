<h1>Footer Page</h1>
<h2>Title : {{ $title }}</h2>
<h2>Content :{{ $content }}</h2>
<ul>
    @foreach ($names as $key => $value)
        <li>
            <h2>{{ $key . '-' . $value }}</h2>
        </li>
    @endforeach
</ul>
