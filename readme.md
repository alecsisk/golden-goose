Тестовое задание:
Вводные
Реализовать задачу с использованием
- framework Laravel 5.3
- шаблонизатор Twig 2
- БД MySQL
Имеется стандартный пользователь - таблица users.
 
Задача
В интерфейсе добавить пользователю настройку - подписные каналы (набор чекбоксов).
 
Доп. информация
Атрибуты подписного канала: только короткий идентификатор латиницей (max 10 символов).
 
Требуется написать следующие части кода:
1. Миграция для БД.
2. Eloquent: модели, связи, Getters/Setters (всё, что может понадобиться).
3. Контроллер:
3.a. метод формирующий данные для шаблонизатора (если нужен)
3.b. часть шаблона с чекбоксами
3.c. метод обновляющий данные в БД
 
Код оформить Пакетом (Package) и добавить инструкцию по установке/использованию.
 
Результат опубликовать на GitHub.







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
