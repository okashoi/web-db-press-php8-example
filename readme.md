# 『WEB+DB PRESS Vol.120』「5年ぶりの新版！　PHP 8登場！」ソースコード集

このリポジトリでは『[WEB+DB PRESS Vol.120]()』に掲載された記事「5年ぶりの新版！　PHP 8登場！」に登場するソースコードを公開しています。

また Docker Compose がインストールされている環境ではそのまま動作を確認することができます。
併せて活用してください。

## 注意点

* プログラムを実行できるようにするため、本誌に掲載されたソースコードに一部変更を加えています
* 結果の出力には統一して `var_dump()` を用いるように変更しています
* 実行結果を、ソースコード末尾にブロックコメントで示しています

## ソースコードへのリンク

ファイル名の先頭に、本誌掲載順に番号を振っています。

* [「文字列に関する新しい関数」のソースコード](./examples/01_new_functions_abount_string)
* [「null安全演算子」のソースコード](./examples/02_nullsafe_operator)
* [「match式」のソースコード](./examples/03_match_expression)
* [「名前付き引数」のソースコード](./examples/04_named_arguments)
* [「コンストラクタにおけるプロパティ代入の省略記法」のソースコード](./examples/05_constructor_promotion)
* [「型に関する機能の強化」のソースコード](./examples/06_new_types)
* [「破壊的変更」のソースコード](./examples/07_breaking_changes)


## （付録）Docker Compose で動作させる手順


次のコマンドを実行することで PHP 8.0 がインストールされたコンテナ内で bash が起動した状態になります。

```bash
$ docker-compose run --rm php80
```

コンテナ内で `php` コマンドを実行することで、各ソースコードをプログラムとして実行できます。

```bash
# cd 01_new_functions_abount_string
# php 01_str_contains.php
bool(true)
bool(false)
```

「破壊的変更」のソースコード（[07_breaking_changes](./examples/07_breaking_changes)）の実行結果比較のために、PHP 7.4 がインストールされたコンテナも準備しています。
次のコマンドで起動してください（プログラムの実行方法は同じです）。

```bash
$ docker-compose run --rm php74
```

```bash
# cd 07_breaking_changes
# php 01_type_error.php

Warning: array_map() expects parameter 1 to be a valid callback, first array member is not a valid class name or object in /usr/src/myapp/07_breaking_changes/01_type_error.php on line 4
NULL
```

なお、該当のバージョンの PHP がインストールされていれば、ソースコードのあるディレクトリに移動して直接実行することもできます。
