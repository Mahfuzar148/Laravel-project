<h1>Welcome to my home page</h1>

{{ 5 + 2 }}
<br><br>

{{ 'Hello ' . 'world!' }}

<br><br>
{{-- HTML in blade Template --}}
{!! '<h1>Hello World!</h1>' !!}
{{-- JavaSrcipt in blade Template --}}
{!! "<script>
    alert('Allahu Akbar')

 </script>" !!}
{{-- Comment Statement --}}

{{-- PHP in blade template --}}
@php
    $hello = 'Hello World!';
    echo $hello;
    $sum = 5 + 2;
@endphp
<br><br>
{{ 'The sum is ' . $sum }}

@php
    $names = ['Ahmed', 'Mahfuz', 'Arif', 'Sujan'];
@endphp

<ul>
    @foreach ($names as $name)
        <li>
            <h1> {{ $loop->index }}-Hello, {{ $name }}!</h1>
        </li>
    @endforeach
</ul>
{{ 'Iteration property :' }}
<ul>
    @foreach ($names as $name)
        <li>
            <h1> {{ $loop->iteration }}-Hello, {{ $name }}!</h1>
        </li>
    @endforeach
</ul>

{{ 'Give red color on first value' }}

<ul>
    @foreach ($names as $name)
        @if ($loop->first)
            <li style="color: red">
                <h1> {{ $loop->iteration }}-Hello, {{ $name }}!</h1>
            </li>
        @elseif($loop->last)
            <li style="color: green">
                <h1> {{ $loop->iteration }}-Hello, {{ $name }}!</h1>
            </li>
        @else
            <li>
                <h1> {{ $loop->iteration }}-Hello, {{ $name }}!</h1>
            </li>
        @endif
    @endforeach
</ul>

{!! '<h1> Even and odd property</h1>' !!}

<ul>
    @foreach ($names as $key => $name)
        @if ($loop->odd)
            <li style="color: blue">{{ $loop->iteration }}-{{ $name }}</li>
        @elseif($loop->even)
            <li style="color: red">{{ $loop->iteration }}-{{ $name }}</li>
        @endif
    @endforeach

</ul>
{!! '<h1> Count Property</h1>' !!}
@foreach ($names as $name)
    {{ 'Count : ' }}{{ $loop->count }}
@break
@endforeach
