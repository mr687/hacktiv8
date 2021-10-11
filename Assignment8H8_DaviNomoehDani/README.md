# Assignment 8 - Kampus Merdeka
Rest API CRUD Products using Laravel 8.

## Clone and Run
```sh
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate:fresh --seed
$ php artisan serve
```

Endpoint: `http://127.0.0.1:8000/v1/products`

Methods :  `GET|POST|PUT|PATCH|DELETE`

## Screenshots
- Get all products

![Screen Shot 2021-10-11 at 20 49 29](https://user-images.githubusercontent.com/26916086/136803303-7547eade-6702-4589-aeb4-9f8d1ee9473f.png)

- Create new product

![Screen Shot 2021-10-11 at 20 40 09](https://user-images.githubusercontent.com/26916086/136803488-58b85191-144e-40f6-a218-67c2f58858a4.png)



# Requirements
- Text editor: [Visual Studio Code](https://code.visualstudio.com/)
- Laravel: ^8
- PHP: ^7.3
- Postman
- Local DBMS
