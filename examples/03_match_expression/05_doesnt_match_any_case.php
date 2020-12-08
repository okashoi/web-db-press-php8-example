<?php

switch (2) {
    case 1:
        $english = 'one';
        break;
    case 3:
        $english = 'three';
        break;
}

var_dump($english);

/* 実行結果
$ php 05_doesnt_match_any_case.php

Warning: Undefined variable $english in /usr/src/myapp/03_match_expression/05_doesnt_match_any_case.php on line 12
NULL

※本誌掲載のコードでは echo を使っているため、何も表示されない（Warning メッセージは表示される）
*/
