# これはなに？

* Laravel 5.1 で作成したシンプルな掲示板サイトです。
* スレッド一覧表示・スレッド投稿・コメント投稿ができます。

# 環境

* OS X Yosemite
* Laravel 5.1
* PHP 5.6.15
* MySQL
* Materialize
    * http://materializecss.com/

# ローカル環境で実行するときの手順

1. ソースコードをDLする。
```
git clone https://github.com/amymd/Laravel_bbs.git
```

2. `cd Laravel_bbs/bbs`

3. ライブラリ等のインストールを行う。
```
composer install
```

4. `.env.example`ファイルをコピーして`.env`ファイルを作成する。
```
cp .env.example .env
```

5. .envファイルを、ローカル環境の設定に合わせて修正する。

6. `php artisan key:generate`を実行してAPP_KEYを取得する。

7. 以下のコマンドを叩き、DBのテーブルを生成して、初期データを追加します。
```
php artisan migrate
php artisan db:seed
```

8. 以下のコマンドでアプリを起動すると、正常にアプリ画面が表示されるはずです。お疲れ様でした！
```
php -S localhost:8000 -t public
```
