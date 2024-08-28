<!-- Include the header file -->
@include('pages.header')

<h1>Welcome to my home page</h1>
@php
    $fruits = [
        'apple',
        'banana',
        'orange',
        'grape',
        'kiwi',
        'mango',
        'pear',
        'peach',
        'pineapple',
        'strawberry',
        'watermelon',
        'cherry',
        'blueberry',
        'raspberry',
        'blackberry',
        'raspberry',
    ];
@endphp
<!-- Pass parameter to the footer include -->
@include('pages.footer', [
    'title' => 'My Home Page',
    'content' => 'This is the content of my home page.',
    'names' => $fruits,
])
