<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo | Arrays</title>
</head>
<body>
    <h1>Recomended Books</h1>
    
    <?php 
        $books = [
            "book 1",
            "book 2",
            "book 3"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?> 
    </ul>
</body>
</html>