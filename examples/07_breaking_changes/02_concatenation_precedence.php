<?php

$a = 1;
$b = 2;

var_dump('sum: ' . $a + $b);

/* 実行結果（PHP 7.4）
$ php 02_concatenation_precedence.php

Warning: A non-numeric value encountered in /usr/src/myapp/07_breaking_changes/02_concatenation_precedence.php on line 6
int(2)
*/

/* 実行結果（PHP 8.0）
$ php 02_concatenation_precedence.php
string(6) "sum: 3"
*/
