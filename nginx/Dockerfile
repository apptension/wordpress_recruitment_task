##
# Dependency stage
##
FROM wp-boilerplate-wordpress AS wordpress-base
FROM segment/chamber:2 AS chamber

##
# Build main image stage
##
FROM nginx:alpine
COPY --from=chamber /chamber /bin/chamber
RUN mkdir -p /var/log/nginx/healthd /usr/share/nginx/html && \
    chmod 0777 /var/log/nginx/healthd && \
    rm /etc/nginx/conf.d/default.conf
COPY run_nginx.sh /bin/run_nginx.sh
RUN chmod +x /bin/run_nginx.sh
COPY files/ /etc/nginx/

COPY --from=wordpress-base /usr/src/wordpress /var/www/html
COPY --from=wordpress-base /var/www/app /var/www/app

CMD /bin/chamber exec $CHAMBER_SERVICE_NAME -- /bin/sh -c "/bin/run_nginx.sh"
