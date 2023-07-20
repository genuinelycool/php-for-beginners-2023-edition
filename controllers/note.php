<?php

$config = require'config.php';
$db = new Database($config['database']);

$heading = 'Note';

// dd($_GET['id']);

// $id = $_GET['id'];
// $notes = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $id])->fetchAll();
// $notes = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->fetchAll();

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->fetch();

// dd($notes);

require "views/note.view.php";