# Project setup
Clone repo
	$ git clone git@github.com:motizukilucas/dular.git

Copie .env.example para .env
    $ cp .env.example .env

Preencha os seguintes dados no .env
> DB_CONNECTION=mysql
> DB_HOST=db
> DB_PORT=3306
> DB_DATABASE=dular
> DB_USERNAME=dular
> DB_PASSWORD=

De permissoes ao server
	$ sudo chown www-data:www-data -R storage/ bootstrap/cache

Build project
    $ docker-compose up 

## Dentro do laravel container
Acesse o container
	$ docker exec -it dular_web_1 bash

Instale dependencias
	$ composer install

Gere key
    $ php artisan key:generate
> talvez tenha que rodar docker-compose down depois up para validar a key

Rode as migrations
    $ php artisan migrate

# Testing
## Seeding banco de dados
Acesse o container
	$ docker exec -it dular_web_1 bash

Entao
    $ php artisan db:seed