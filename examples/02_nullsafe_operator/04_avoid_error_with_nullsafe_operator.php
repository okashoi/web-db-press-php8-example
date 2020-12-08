<?php

require_once '01_class_and_function_definition.php';

$user = getLoginUser();

// $userがnullの場合は何もせず、エラーにもならない
$user?->changeName('okashoi');

/* 実行結果
$ php 04_avoid_error_with_nullsafe_operator.php

※エラーにならずに終了（何も出力しない）
*/
