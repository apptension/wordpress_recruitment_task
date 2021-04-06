FROM wordpress:cli-php7.4 AS cli
FROM wordpress:php7.4-fpm-alpine

COPY --from=composer /usr/bin/composer /bin/composer
COPY --from=cli /usr/local/bin/wp /bin/wp
RUN mkdir /var/www/app
COPY ./app /var/www/app

COPY ./docker-entrypoint.sh /usr/local/bin/
COPY ./install-entrypoint.sh /usr/local/bin/

#RUN ["chown", "www-data:www-data", "/bin/bootstrap.sh"]
RUN ["chmod", "+x", "/usr/local/bin/docker-entrypoint.sh"]
RUN ["chmod", "+x", "/usr/local/bin/install-entrypoint.sh"]

WORKDIR /var/www/html/

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm", "install-entrypoint.sh"]

