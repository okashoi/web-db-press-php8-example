<?php

// null安全演算子を使わない場合
function withoutNullSafeOperator(?Foo $foo): ?FooBar
{
    if(is_null($foo)) {
        return null;
    }

    $bar = $foo->bar();
    if(is_null($bar)) {
        return null;
    }

    $buz = $bar->buz();
    if(is_null($buz)) {
        return null;
    }

    return $buz->foobar();
}

// null安全演算子を使う場合
function withNullSafeOperator(?Foo $foo): ?FooBar
{
    return $foo?->bar()
        ?->buz()
        ?->foobar();
}

// 以下、型情報の定義（本誌未掲載）
interface Foo
{
    public function bar(): ?Bar;
}

interface Bar
{
    public function buz(): ?Buz;
}

interface Buz
{
    public function foobar(): ?FooBar;
}

interface FooBar
{
}

/* このファイル単体で実行しても何も出力されません */
