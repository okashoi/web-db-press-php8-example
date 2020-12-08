<?php

require_once '01_class_and_function_definition.php';

$user = getLoginUser();

if (!is_null($user)) {
    $user->changeName('okashoi');
}

// 三項演算子を用いて次のような書き方も可能
is_null($user) ?: $user->changeName('okashoi');

/* 実行結果
$ php 03_avoid_error_with_null_check.php

※エラーにならずに終了（何も出力しない）
*/
