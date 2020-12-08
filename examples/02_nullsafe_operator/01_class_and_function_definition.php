<?php

class User
{
    public function __construct(private string $name)
    {
    }

    public function changeName(string $newName): void
    {
        $this->name = $newName;
    }
}

// ログインユーザーを返す
// 未ログインの場合はnullを返す
//
// ※注：例示のためのコードであり、実際に認証機構は備わっていません
function getLoginUser(): ?User
{
    if (!isset($_SESSION['username'])) {
        return null;
    }

    return new User((string)$_SESSION['username']);
}

/* このファイル単体で実行しても何も出力されません */
