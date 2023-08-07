<?php

// use Core\Database;

// $config = require base_path('config.php');
// $db = new Database($config['database']);

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1;')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);