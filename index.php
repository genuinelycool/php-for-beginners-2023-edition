<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

        <?php
            $name = "Dark Matter";
            $read = true;
            // $read = false;

            if ($read) {
                $message = 'You have read' . ' ' . $name;       // SINGLE quotes and CONCATENATE
                // $message = "You have read $name";
            } else {
                $message = "You have NOT read $name";           // DOUBLE quotes WITHOUT concatenate and VARIABLE
            }

        ?>

    <h1>
        <?php //echo $message; ?>
        <?= $message ?>             <!-- semicolon is optional here. -->
    </h1>
    
</body>
</html>