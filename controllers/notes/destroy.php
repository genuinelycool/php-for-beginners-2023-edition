<?php

use Core\App;
use Core\Database;

// $config = require base_path('config.php');
// $db = new Database($config['database']);

// $db = App::container()->resolve('Core\Database');
// $db = App::container()->resolve(Database::class);
// $db = App::container()->resolve(\Core\Database::class);
$db = App::resolve(Database::class);

// dd($db);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('Location: /notes');
exit();
