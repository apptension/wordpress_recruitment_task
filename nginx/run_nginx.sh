set -e

envsubst '\${NGINX_HOST} \${NGINX_PROXY_PASS_HOST}' < /etc/nginx/conf.d/app.tmpl > /etc/nginx/conf.d/app.conf && nginx -g 'daemon off;' || cat /etc/nginx/nginx.conf
