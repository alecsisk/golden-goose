- Небольшой обзор на видео:
https://www.youtube.com/watch?v=bmI8-7LqIQI

- Скачиваем пакеты для запуска:
composer install

- При скачивании потребуется токен для моего приватного репозитория:
35c569c38535cb96b63202ebaa1e98550b021cf6

- Копируем .env.example в .env в корне, создаем базу, настраиваем соединение с mysql в .env

- Генерируем ключ приложения:
php artisan key:generate

- Запускаем миграции и заполняем данными приложение:
php artisan migrate --seed

- Имя и пароль для входа:
user1@gmail.com:password