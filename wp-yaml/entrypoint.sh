#运行Wordpress时，可以通过环境变量替换连接数据库相关信息。
Wordpress_File=/usr/share/nginx/html/wp-config.php

sed -i s/{DB_NAME}/${DB_NAME:-wordpress}/g ${Wordpress_File}
sed -i s/{DB_USER}/${DB_USER:-wordpress}/g ${Wordpress_File}
sed -i s/{DB_PASSWORD}/${DB_PASSWORD:-wordpress}/g ${Wordpress_File}
sed -i s/{DB_HOST}/${DB_HOST:-localhost}/g  ${Wordpress_File}


#启动php /nginx
/usr/bin/php-fpm && \
nginx -g "daemon off;"