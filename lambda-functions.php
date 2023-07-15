<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo | Functions and Filters</title>
</head>
<body>
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

        // $filterByAuthor = function ($books, $author) {    // anonymous function

        function filterByAuthor($books, $author) {  // named function
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

        $filteredBooks = filterByAuthor($books, 'author 2');    // normal function call.

    ?>
    
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']; ?>
                    </a>            
                </li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>