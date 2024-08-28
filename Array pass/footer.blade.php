<h1>Footer Page</h1>
<h2>Title : {{ $title }}</h2>
<h2>Content :{{ $content }}</h2>
<ul>
    @foreach ($names as $name)
        <li>
            <h2>{{ $name }}</h2>
        </li>
    @endforeach
</ul>
