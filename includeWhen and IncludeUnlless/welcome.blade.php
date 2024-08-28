@php
    // Initialize an associative array with car details
    $cars = [
        'name' => 'Toyota',
        'price' => 20000,
        'color' => 'red',
        'year' => 2015,
        'model' => 'Camry',
        'description' => 'This is a Toyota Camry.',
    ];
    $value = ''; // Initialize an empty variable
@endphp

{{-- Include the header file only if $value is empty --}}
@includeWhen(empty($value), 'pages.header', ['name' => $cars])

<h1>Welcome to my home page</h1>

@php
    // Initialize an associative array with fruit names
    $fruits = [
        'one' => 'apple',
        'two' => 'banana',
        'three' => 'orange',
        'four' => 'grape',
        'five' => 'kiwi',
        'six' => 'mango',
    ];
    $value = ''; // Reset $value to an empty string
@endphp

{{-- Include the footer file unless $value is empty --}}
@includeUnless(empty($value), 'pages.footer', [
    'title' => 'My Home Page',
    'content' => 'This is the content of my home page.',
    'names' => $fruits,
])

{{-- Include a view file if it exists --}}
@includeIf('view.name', ['some' => 'data'])
