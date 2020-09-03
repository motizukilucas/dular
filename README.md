Clone repo

Copy .env.example to .env
    $ cp .env.example .env

Fill the following data in .env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=dular
DB_USERNAME=dular
DB_PASSWORD=

Give server permissions
    $ sudo chown www-data:www-data -R storage/ bootstrap/cache

Build project
    $ docker-compose up 

Generate key
    $ docker exec -it web bash
    $ php artisan key:generate

Run migrations
    $ php artisan migrate