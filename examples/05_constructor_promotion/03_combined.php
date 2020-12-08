<?php

class User
{
    private string $name;

    public function __construct(
        string $name,
        private int $age
    ) {
        // $ageは自動的にプロパティになるが
        // コンストラクタ内で値のチェックもできる
        if ($age < 0) {
            throw new InvalidArgumentException();
        }

        // 引数$nameにはアクセス修飾子がないので
        // 従来どおりの扱いとなる（併用可）
        $this->name = strtolower($name);
    }

    public function getProfile(): string
    {
        // プロパティ$name、$age両方にアクセスできる
        return "{$this->name}({$this->age})";
    }
}

$user = new User('OKASHOI', 30);

var_dump($user->getProfile());

/* 実行結果
$ php 03_combined.php
string(11) "okashoi(30)"
*/
