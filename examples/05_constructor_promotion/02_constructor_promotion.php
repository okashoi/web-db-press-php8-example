<?php

class User
{
    public function __construct(
        private string $name,
        private int $age,
    ) {}
}

/* このファイル単体で実行しても何も出力されません */
