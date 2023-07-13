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

        <?php 
            // foreach ($books as $book) {
            //     // echo "<li>$book™</li>";    // doesnot work
            //     // echo "<li>$book ™</li>";    // space cha vane, works. 
            //     // echo "<li>{$book}™</li>";    //  works without space, but put inside curly brace. 
                
            //     echo "<li>$book</li>";
            //     // echo "<li>" . $book ."</li>";
            // }
        
        ?>

        <!-- <li>book 1</li>
        <li>book 2</li>
        <li>book 3</li> -->
    </ul>
</body>
</html>