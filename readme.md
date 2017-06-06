# Docker-PHP7.1 with a laravel installation and a normal installation (5 docker containers)

A quick and easy way to setup your PHP application using Docker and docker-compose. This will setup a developement environment with PHP7.1-fpm, MariaDB and Nginx.
This project contains a laravel 5.3 test project environment and one without laravel.

## Usage
~~~
git clone git@github.com:shameerc/docker-php7.git
cd docker-php7
docker-compose up
~~~

### Structure

~~~
├── app
│   └── public
│       └── php (normal php files)
│       └── laravel-project (laravel-project files)
├── database
├── docker-compose.yml
├── fpm (laravel project)
│   ├── Dockerfile
│   └── supervisord.conf
├── fpm_php (normal php)
│   ├── Dockerfile
│   └── supervisord.conf
├── nginx (laravel project)
│   ├── Dockerfile
│   └── default.conf
├── nginx_php (normal php)
│   ├── Dockerfile
│   └── default.conf
~~~

- `database` is where MariDB will store the database files.
- `laravel Nginx port` is 8080
- `php Nginx port` is 8081

