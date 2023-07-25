<?php

require 'Validator.php';

$config = require 'config.php';
// $config = require'config.php';

$db = new Database($config['database']);

$heading = 'Create Note';

// dd(Validator::email('a@a.com'));
// if (! Validator::email('dasfdaf')) {
// // if (! Validator::email('a@a.com')) {
//     dd('that is not a valid email');
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // $validator = new Validator();

    // if (strlen($_POST['body']) === 0) {
    // if ($validator->string($_POST['body'])) {
    // if (! $validator->string($_POST['body'], 1, 1000)) {
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 is required';
    }

    // if (strlen($_POST['body']) > 1000) {
    //     $errors['body'] = 'A body cannot be more than 1,000 characters.';
    // }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }    
}

require 'views/note-create.view.php';

