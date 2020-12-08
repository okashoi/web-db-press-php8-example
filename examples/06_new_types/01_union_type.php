<?php

// 引数にint型の値もfloat型の値も渡せる
// 戻り値はint型またはfloat型のどちらか
function square(int|float $x): int|float
{
    return $x * $x;
}

var_dump(square(2));
var_dump(square(0.5));

/* 実行結果
$ php 01_union_type.php
int(4)
float(0.25)
*/
