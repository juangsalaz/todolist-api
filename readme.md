<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Todo List API create using Laravel framework

I created an todo list app with Laravel, and this is the API as the backend. This project still on progress, always update this project. Thanks

## How to install this service

1. Clone this repository in your local
2. Enter into project directory and run `composer install` in your console
3. Run `php artisan migrate` to running the migration database
4. Then run `php artisan serve` to running the local server


## API Endpoint
**GET** `api/v1/activities` (Get all activities details)

**GET** `api/v1/activities/{activity_id}` (Get activity by ID)

**POST** `api/v1/activities` (Create new activity)

**POST** `api/v1/activities/{activity_id}/items` (Create new item for an activity)

**PATCH** `api/v1/activities/{activity_id}` (Update an activity)

**PATCH** `api/v1/activities/{activity_id}/items/{item_id}` (Update an item from an activity)
