<?php

require 'functions.php';
require 'Database.php';


$db = new Database();

// $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);
$posts = $db->query("select * from posts where id = 1")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] ."</li>";
}