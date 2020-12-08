<?php

// 引数の順序が間違って逆になっている
$result = array_map([1, 2], fn ($x) => $x * 2);
var_dump($result);

/* 実行結果（PHP 7.4）
$ php 01_type_error.php

Warning: array_map() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /usr/src/myapp/07_breaking_changes/01_type_error.php on line 4
NULL
*/

/* 実行結果（PHP 8.0）
$ php 01_type_error.php

Fatal error: Uncaught TypeError: array_map(): Argument #1 ($callback) must be a valid callback, first array member is not a valid class name or object in /usr/src/myapp/07_breaking_changes/01_type_error.php:4
Stack trace:
#0 /usr/src/myapp/07_breaking_changes/01_type_error.php(4): array_map(Array, Object(Closure))
#1 {main}
  thrown in /usr/src/myapp/07_breaking_changes/01_type_error.php on line 4
*/
