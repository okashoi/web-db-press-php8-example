<?php

$english = match (2) {
    1 => 'one',
    3 => 'three',
};

var_dump($english);

/* 実行結果
$ php 04_unhandled_match_error.php

Fatal error: Uncaught UnhandledMatchError: Unhandled match value of type int in /usr/src/myapp/03_match_expression/04_unhandled_match_error.php:3
Stack trace:
#0 {main}
  thrown in /usr/src/myapp/03_match_expression/04_unhandled_match_error.php on line 3
*/
