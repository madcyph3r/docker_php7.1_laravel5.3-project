FROM nginx

LABEL version="1.0"
LABEL description="NGINX Test Image"
LABEL maintainer "Marc"

ADD ./default.conf /etc/nginx/conf.d/

RUN echo "daemon off;" >> /etc/nginx/nginx.conf

CMD service nginx start
