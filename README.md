# CakePHP-Jasmine

## 使い方

### CakePHP関連の準備

チェックアウトしたら、まずは

    $ composer install

を実行。

`Config/database.php.default`と`Config/email.php.default`をコピーして
`Config/database.php`と`Config/email.php`にする。

    $ cp Config/database.php.default Config/database.php
    $ cp Config/email.php.default Config/email.php

このアプリケーションではDBは使っていないが、できれば、`Config/database.php`を編集
して、存在するMySQLのDatabaseへの接続を設定しておく。

`tmp`ディレクトリ以下をすべて書き込み可能にしておく。

    $ chmod -R a+w tmp

`webroot`ディレクトリを、apacheでdocument rootとしておく。

### Jasmine関連の準備

まずは

    $ npm install

次に、

    $ gulp copy
    $ gulp compile

を実行すればOK。

`gulp copy`は`nodule_modules`以下にあるjasmine関連のファイルを`webroot/js`以下にコピーする

`gulp compile`は`Src/coffee`以下にあるcoffee scriptのファイルをコンパイルして、`webroot/js`以下に配置する。

上記の他

    $ gulp clean
    $ gulp serve

がある。

`gulp clean`は、`webroot/js`以下を削除する

`gulp serve`は、jasmine関連のファイルが変更されたり、あるいは、coffee scriptが変更、追加されたときに、自動的にcopyとcompileを実行する。

### 確認

ブラウザで、`/main`を確認する。

例： http://cakephp-jasmine/main

テストは、 http://cakephp-jasmine/test/test.html
