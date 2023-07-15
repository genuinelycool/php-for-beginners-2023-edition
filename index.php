<?php

$books = [
    [
        'name' => 'book 1',
        'author' => 'author 1',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example1.com'
    ],[
        'name' => 'book 2',
        'author' => 'author 2',
        'releaseYear' => 2010,
        'purchaseUrl' => 'http://example1.com'
    ],
    [
        'name' => 'book 3',
        'author' => 'author 2',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example3.com'
    ]
];

$filteredBooks = array_filter($books, function ($book) {
    // return $book['releaseYear'] < 2000;
    return $book['author'] === 'author 2';
});  

require "index.view.php";