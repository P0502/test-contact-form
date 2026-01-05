# アプリケーション名
### coachtechお問い合わせフォーム

## 環境構築
### Dockerビルド
#### ・git clone git@github.com:P0502/test-contact-form.git
#### ・docker-compose up -d --build

### Laravelのパッケージのインストール
#### ・docker-compose exec php bash
#### ・composer install

### env.ファイルの作成
#### ・cp .env.example.env

### アプリケーション実行
#### ・php artisan migrate

### シーディング実行
#### ・php artisan db:seed

### 使用技術(実行環境)
#### ・PHP:8.4.14
#### ・Laravel:8.83.29
#### ・nginx:1.21.1
#### ・mysql:8.0.26
#### ・phpmyadmin:8080:80

## ER図
<img width="564" height="517" alt="スクリーンショット 2026-01-04 025335" src="https://github.com/user-attachments/assets/eb559ff2-623f-43a1-9a7a-348a0a6b4746" />

## URL
#### ・お問い合わせフォーム: http://localhost/
#### ・phpmyadmin: http://localhost:8080/
