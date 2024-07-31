# web_lab
 
# REST API для Управления Пользователями

Этот проект предоставляет REST API для управления пользователями, включающую методы для создания, обновления, удаления, авторизации пользователей и получения информации о пользователях.

## Требования
- PHP 7.0 или выше
- MySQL
- Веб-сервер (например, Apache)

## Установка

1. Склонируйте репозиторий:
   git clone https://github.com/ваш-репозиторий.git


2. Настройте файл `db.php` с вашими данными для подключения к базе данных.

3. Запустите скрипт `setup_db.php` для создания базы данных и таблицы:

4. После успешного запуска удалите или переместите файл `setup_db.php` для безопасности.

## Методы API

1. Создание пользователя

Endpoint: `/api/create_user`  
Метод: `POST`  
Описание: Создает нового пользователя.

Пример тела запроса:

{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123"
}


Ответ:

{
    "message": "User created successfully"
}


### 2. Получение информации о пользователе

Endpoint: `/api/get_user?id={id}`  
Метод: `GET`  
Описание: Возвращает информацию о пользователе по его ID.

Пример запроса:

GET /api/get_user?id=1


Oтвет:

{
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com"
}


### 3. Обновление информации пользователя

Endpoint: `/api/update_user`  
Метод: `PUT`  
Описание: Обновляет информацию о пользователе.

Пример тела запроса:

{
    "id": 1,
    "name": "John Smith",
    "email": "johnsmith@example.com"
}


Ответ:

{
    "message": "User updated successfully"
}


### 4. Удаление пользователя
Endpoint: `/api/delete_user?id={id}`  
Метод: `DELETE`  
Описание: Удаляет пользователя по его ID.

Пример запроса:

DELETE /api/delete_user?id=1


Ответ:

{
    "message": "User deleted successfully"
}


### 5. Авторизация пользователя

Endpoint: `/api/authenticate_user`  
Метод: `POST`  
Описание: Авторизует пользователя, проверяя его email и пароль.

Пример тела запроса:

{
    "email": "john@example.com",
    "password": "password123"
}

Ответ:

{
    "message": "Authentication successful"
}


