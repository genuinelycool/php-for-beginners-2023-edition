<?php

$config = require'config.php';
$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 1;

// $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->fetch();
// $note = $db->query('SELECT * FROM notes WHERE user_id = :user and id = :id', [
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    // 'user' => 1,
    'id' => $_GET['id']
])->fetch();

if (! $note) {
    abort();
}

// $currentUserId = 1;
// $forbidden = 403;

if ($note['user_id'] !== $currentUserId) {
    // abort(403);
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";