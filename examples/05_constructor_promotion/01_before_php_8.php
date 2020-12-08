<?php

class User
{
    private string $name;
    private ?int $age;

    public function __construct(
        string $name,
        ?int $age
    ) {
        $this->name = $name;
        $this->age = $age;
    }
}

/* このファイル単体で実行しても何も出力されません */
