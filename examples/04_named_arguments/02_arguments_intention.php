<?php

class Order
{
    public function __construct(
        private int $productId,
        private int $amount,
        private int $unitPrice,
    ) {}
}

// これだけだと意図がわかりにくい
$order = new Order(1, 10, 100);

// 引数に名前が付くと意図がわかりやすい
$order = new Order(productId: 1, amount: 10, unitPrice: 100);

/* このファイル単体で実行しても何も出力されません */
