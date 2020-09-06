FROM nginx:1.10

ADD /.docker/nginx/vhost.conf /etc/nginx/conf.d/default.conf
