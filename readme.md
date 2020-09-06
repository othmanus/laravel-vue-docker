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

1 - Pull docker image
```bash
docker-compose pull
```

2 - Setup the app

```bash
mv .env.example .env
```

Then change the DB and user's credentials.

3 - SSH to the container
```bash
docker exec -it laravel-vue-docker_app_1 /bin/bash
```

4 - Install the app
```bash
/var/www# composer install
/var/www# php artisan key:generate
/var/www# npm install
```

### Testing
To run tests, SSH to the container then run `./vendor/bin/phpunit tests/*`
