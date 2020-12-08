<?php

switch (1) {
    case 1:
        $english = 'one';
        break;
    case 2:
        $english = 'two';
        break;
    case 3:
        $english = 'three';
        break;
    default:
        $english = 'more than three';
        break;
}

var_dump($english);

/* 実行結果
$ php 02_switch_statement.php
string(3) "one"
*/
