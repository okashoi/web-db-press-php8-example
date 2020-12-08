<?php

$english = match (1) {
    1 => 'one',
    2 => 'two',
    3 => 'three',
    default => 'more than three',
};

var_dump($english);

/* 実行結果
$ php 01_match_expression.php
string(3) "one"
*/
