# アプリケーション名
お問い合わせフォーム

## 環境構築
1.	docker compose up -d　(--build)
3. docker ps
4. docker exec -it コンテナID(1c036251e5d74614a6fcb9a97aee92cb927ad6ad1961e441e5c0b23786e46f62) bash

Laravel環境構築
・docker-compose exec php bash
・docker ps
・docker exec -it コンテナID(1c036251e5d74614a6fcb9a97aee92cb927ad6ad1961e441e5c0b23786e46f62) bash
・mysql -u contact_user -p
・contact_pass

・php artisan make:migration create_contacts_table
・php artisan migrate
・php artisan db:seed

## 使用技術(実行環境)
Laravel 8.x
PHP 8.3.9
MySQL 8.0.39
Docker27.1.1

## ER図
作成が間に合いませんでした。

## URL
http://localhost

phpMyAdmin:http://localhost:8080/

origin  https://github.com/amisoeda/contact-form.git (fetch)

origin  https://github.com/amisoeda/contact-form.git (push)
