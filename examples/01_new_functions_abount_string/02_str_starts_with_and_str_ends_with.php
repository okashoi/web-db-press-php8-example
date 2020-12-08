<?php

var_dump(str_starts_with('Hello, PHP8!', 'Hello'));
var_dump(str_starts_with('Hello, PHP8!', 'PHP8!'));

var_dump(str_ends_with('Hello, PHP8!', 'Hello'));
var_dump(str_ends_with('Hello, PHP8!', 'PHP8!'));

/* 実行結果
$ php 02_str_starts_with_and_str_ends_with.php
bool(true)
bool(false)
bool(false)
bool(true)
*/
