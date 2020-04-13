# BlaBlaPub (Web & API)

## Dependencias

- [XAMPP](https://www.apachefriends.org) or [MAMP](https://www.mamp.info) (Apache + MySQL + PHP)
- [Composer](https://getcomposer.org).
- [Node JS](https://nodejs.org).

## Despliegue

- Creamos una base de datos con el nombre que queramos ponerle, por ejemplo: blablapub

- Copiamos el archivo de ejemplo .env.example en uno nuevo que se llame .env, y configuramos este para que tenga los datos de conexión a la base de datos creada anteriormente

- Desde la ruta base del proyecto, ejecutamos los siguientes comandos:

    - `composer install`
    - `php artisan key:generate`
    - `php artisan jwt:secret` => tendréis que confirmar que queréis crear una nueva clave
    - `php artisan migrate:refresh --seed`
    - `npm install`
    - `npm run prod`
    - `php artisan serve` => este solo en desarrollo, ya que nos hará un servidor virtual en [http://127.0.0.1:8000](http://127.0.0.1:8000)
    ovi
