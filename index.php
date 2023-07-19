<?php

require 'functions.php';
require 'Database.php';

$config = require'config.php';

$db = new Database($config['database']);

// dd($_GET);
// dd($_GET['id']);

$id = $_GET['id'];
// $query = "select * from posts where id = {$id}";     // never inline the variable (ie. user data) into a query string.
// $query = "select * from posts where id = ?";
$query = "select * from posts where id = :id";      // key

// dd($query);

// $posts = $db->query("select * from posts")->fetchAll();
// $posts = $db->query($query)->fetch();
// $posts = $db->query($query, [$id])->fetch();
// $posts = $db->query($query, ['id' => $id])->fetch();     // pass in a associative array. where key begins with colon(:) or no colon.
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] ."</li>";
}