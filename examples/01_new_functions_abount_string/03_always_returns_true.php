<?php

var_dump(str_contains('Hello, PHP8!', ''));
var_dump(str_starts_with('Hello, PHP8!', ''));
var_dump(str_ends_with('Hello, PHP8!', ''));

/* 実行結果
$ php 03_always_returns_true.php
bool(true)
bool(true)
bool(true)
*/
