<?php

var_dump(is_numeric(' 123'));
var_dump(is_numeric('123 '));

$a = 'Hello, World!';
var_dump($a['abc']);

/* 実行結果（PHP 7.4）
$ php 03_numeric_string.php
bool(true)
bool(false)

Warning: Illegal string offset 'abc' in /usr/src/myapp/07_breaking_changes/03_numeric_string.php on line 7
string(1) "H"
*/

/* 実行結果（PHP 8.0）
$ php 03_numeric_string.php
bool(true)
bool(true)

Fatal error: Uncaught TypeError: Cannot access offset of type string on string in /usr/src/myapp/07_breaking_changes/03_numeric_string.php:7
Stack trace:
#0 {main}
  thrown in /usr/src/myapp/07_breaking_changes/03_numeric_string.php on line 7
*/
