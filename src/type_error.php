<?php

// 引数の順序が間違って逆になっている
$result = array_map([1, 2], fn ($x) => $x * 2);
var_dump($result);
