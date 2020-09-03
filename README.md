Clone repo

Build project
    $ docker-compose up 

Give server permissions
    $ sudo chown www-data:www-data -R storage/ bootstrap/cache

Generate key
    $ docker exec -it web bash
    $ php artisan key:generate

Copy .env.example to .env
    $ cp .env.example .env
