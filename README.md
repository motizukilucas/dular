# Project setup
Clone repo
	$ git clone git@github.com:motizukilucas/dular.git

Copy .env.example to .env
    $ cp .env.example .env

Fill the following data in .env
> DB_CONNECTION=mysql
> DB_HOST=db
> DB_PORT=3306
> DB_DATABASE=dular
> DB_USERNAME=dular
> DB_PASSWORD=

Give server permissions
	$ sudo chown www-data:www-data -R storage/ bootstrap/cache

Build project
    $ docker-compose up 

## Inside laravel container
Access the container
	$ docker exec -it dular_web_1 bash

Install dependencies
	$ composer install

Generate key
    $ php artisan key:generate
> you might need to run docker-compose down then up to validate the key

Run migrations
    $ php artisan migrate