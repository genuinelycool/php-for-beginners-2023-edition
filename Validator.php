<?php

class Validator
{
    // public function string($value, $min = 1, $max = INF)
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        // return strlen($_POST['body']) === 0;
        // return strlen(trim($value)) === 0;

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    // public static function email($value)
    // {
    //     // Validator::email('a@a.com');
    //     // Validator::email('dsafdasfsfdsf');

    //     return filter_var($value, FILTER_VALIDATE_EMAIL);
    // }
}