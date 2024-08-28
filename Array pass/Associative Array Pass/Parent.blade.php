<!-- Include the header file -->
@include('pages.header')

<h1>Welcome to my home page</h1>
@php
    // Associative array
    $fruits = [
        'one' => 'apple',
        'two' => 'banana',
        'three' => 'orange',
        'four' => 'grape',
        'five' => 'kiwi',
        'six' => 'mango',
    ];
@endphp
<!-- Pass parameter to the footer include -->
@include('pages.footer', [
    'title' => 'My Home Page',
    'content' => 'This is the content of my home page.',
    'names' => $fruits,
])
