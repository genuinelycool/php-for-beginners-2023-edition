<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo | Associative Arrays</title>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'book 1',
                'author' => 'book 1 ko author',
                'purchaseUrl' => 'http://example1.com'
            ],
            [
                'name' => 'book 2',
                'author' => 'book 2 ko author',
                'purchaseUrl' => 'http://example2.com'
            ]
        ];
    ?>
    
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl']; ?>">
                <?= $book['name']; ?>
            </a>            
        </li>
    <?php endforeach ?>

</body>
</html>