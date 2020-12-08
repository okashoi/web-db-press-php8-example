<?php

require_once '01_class_and_function_definition.php';

$user = getLoginUser();

// $userがnullだった場合にエラーになってしまう
$user->changeName('okashoi');

/* 実行結果
$ php 02_error_with_null.php

Fatal error: Uncaught Error: Call to a member function changeName() on null in /usr/src/myapp/02_nullsafe_operator/02_error_with_null.php:8
Stack trace:
#0 {main}
  thrown in /usr/src/myapp/02_nullsafe_operator/02_error_with_null.php on line 8
*/
