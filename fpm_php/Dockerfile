FROM ubuntu:latest

LABEL version="1.0"
LABEL description="FPM Test Image, for NGINX Image"
LABEL maintainer "Marc"

RUN apt-get update && apt-get install -y software-properties-common language-pack-en-base \
    && LC_ALL=en_US.UTF-8 add-apt-repository -y ppa:ondrej/php \
    && apt-get update \
    && apt-get install -y php7.1 php7.1-fpm php7.1-mysql mcrypt php7.1-gd php7.1-pgsql curl \
       php7.1-curl php-redis php7.1-mbstring sendmail supervisor \
    && mkdir /run/php \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN sed -i -e 's/listen = \/run\/php\/php7.1-fpm.sock/listen = 0.0.0.0:9001/g' /etc/php/7.1/fpm/pool.d/www.conf \
    && sed -i -e 's/;daemonize = yes/daemonize = no/g' /etc/php/7.1/fpm/php-fpm.conf

WORKDIR /var/app

EXPOSE 9001

CMD ["/usr/bin/supervisord"]

#WORKDIR /app/public/laravel-project
#CMD php artisan serve --host=0.0.0.0 --port=8000
