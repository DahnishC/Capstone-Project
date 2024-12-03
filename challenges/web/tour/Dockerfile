FROM ubuntu:latest

RUN apt-get update && apt-get install -y apache2

RUN rm -rf /var/www/html/index.html

COPY ./dist /var/www/html/

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]

