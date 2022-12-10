FROM php:7.4-apache
Run apt update;\
        apt -y install iputils-ping
RUN /etc/init.d/apache2 start
COPY ./server /var/www/html/
COPY ./flag /var/www/html/
EXPOSE 80
