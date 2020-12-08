<?php

function foo(mixed $value): mixed
{
    return $value;
}

var_dump(get_debug_type(foo(1)));
var_dump(get_debug_type(foo('a')));
var_dump(get_debug_type(foo(true)));
var_dump(get_debug_type(foo(null)));
var_dump(get_debug_type(foo(['a'])));
var_dump(get_debug_type(foo(fn($x) => $x)));

/* 実行結果
$ php 02_mixed_type.php
string(3) "int"
string(6) "string"
string(4) "bool"
string(4) "null"
string(5) "array"
string(7) "Closure"
*/
