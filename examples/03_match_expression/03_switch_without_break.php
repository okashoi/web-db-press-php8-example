<?php

switch (1) {
    case 1:
        $english = 'one';
    // ここで処理は終わらずに
    // 以下の処理すべてが実行される
    case 2:
        $english = 'two';
    case 3:
        $english = 'three';
    default:
        $english = 'more than three';
}

var_dump($english);

/* 実行結果
$ php 03_switch_without_break.php
string(15) "more than three"
*/
