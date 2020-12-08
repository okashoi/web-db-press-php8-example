<?php

// str_contains()相当
function my_str_contains(string $a, string $b): bool
{
    return strpos($a, $b) !== false;
}

// str_starts_with()相当
function my_str_starts_with(string $a, string $b): bool
{
    return strpos($a, $b) === 0;
}

// str_ends_with()相当
function my_str_ends_with(string $a, string $b): bool
{
    return strrpos($a, $b) === strlen($a) - strlen($b);
}

var_dump(my_str_contains('Hello, PHP8!', 'PHP'));
var_dump(my_str_contains('Hello, PHP8!', 'PHP7'));

var_dump(my_str_starts_with('Hello, PHP8!', 'Hello'));
var_dump(my_str_starts_with('Hello, PHP8!', 'PHP8!'));

var_dump(my_str_ends_with('Hello, PHP8!', 'Hello'));
var_dump(my_str_ends_with('Hello, PHP8!', 'PHP8!'));

/* 実行結果
$php 04_before_php_8.php
bool(true)
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
*/
