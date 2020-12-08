<?php

$fullName = '';

function setFullName(string $givenName, string $familyName): void
{
    global $fullName;
    $fullName = "${givenName} ${familyName}";
}

// familyNameを先に指定できる
setFullName(familyName: '岡田', givenName: '正平');

var_dump($fullName);

/* 実行結果
$ php 01_arguments_order.php
string(13) "正平 岡田"
*/
