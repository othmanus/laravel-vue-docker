# Laravel

Framework documentation: https://laravel.com/docs

## Dev

### Prerequisites

* Docker

### Content

* Laravel 6.x
* PHP 7.4
* MySQL 5.7
* Nginx
* VueJS 2
* Tailwindcss 1.1

### Install

1 - Setup the app

```bash
mv .env.example .env
```

Then change the DB and user's credentials.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app
DB_USERNAME=root
DB_PASSWORD=root
```

```
ROOT_ID=2
ROOT_EMAIL=my@email.com
ROOT_NAME=MyName
ROOT_PASSWORD=MyPassword
```

1 - Pull docker image
```bash
docker-compose build
```

Then run

```bash
docker-compose up -d
```

3 - SSH to the container
```bash
docker exec -it laravel-vue-docker_app_1 /bin/bash
```

4 - Install the app
```bash
/var/www# composer install
/var/www# php artisan key:generate
/var/www# php artisan migrate --seed
/var/www# npm install
```

### Run

```bash
docker-compose up -d
```

Then SSH to the container to execute `php artisan` commands or `npm` commands.

### Testing
To run tests, SSH to the container then run `./vendor/bin/phpunit tests/*`

## Authentication

The authentication views are based on Laravel's default scaffolding. You can use the custom Vuejs components by using them in login and register pages.

# Run

To access the homepage

```
http://localhost:8000/
```

To access the admin page:

Login with the root admin credentials, then access to:
```
http://localhost:8000/admin
```