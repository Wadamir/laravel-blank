# Laravel 11 + Vue

## Used
- nginx
- php: 8.3-fpm
- mysql 8

## Features
- Composer in Dockerfile.php

## File structure
- /project
- - /nginx
- - ──  default.conf
- - /php
- - - /conf
- - - ── php.ini
- - /mysql
- - /www
- ── docker-compose.yml
- ── Dockerfile.php
- ── README.md

## Installation

```sh
cd project
docker-compose up -d
docker exec -it laravel_app bash
```
```sh
composer create-project --prefer-dist laravel/laravel .
php artisan key:generate
php artisan migrate
npm install
npm install vue@latest
npm install @vitejs/plugin-vue
npm install bootstrap @popperjs/core
npm run dev
```