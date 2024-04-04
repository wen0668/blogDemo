FROM centos-nginx-php74:7
# 0、申明环境变量，便于后续的复用以及变更；
ENV Web_Dir="/usr/share/nginx/html/"
#
# 1、准备epel源、base源、并且安装nginx以及php、最后清理缓存、删除默认的nginx站点


# 2、将代码存储到指定的路径下
# 2024.4.4为支持安装woocommerce插件，创建了wp-content/upgrade 目录.
COPY . ${Web_Dir}

# 3、准备nginx调用php的配置文件；-->抽离到configmap管理


# 4、修订权限；为了避免nginx和php运行的身份不一致，从而造成wordpress无法正常上传图片
RUN useradd -M www && \
    sed -i '/^user/c user www;' /etc/nginx/nginx.conf && \
    sed -i '/^user/c user = www' /etc/php-fpm.d/www.conf && \
    sed -i '/^group/c group = www' /etc/php-fpm.d/www.conf && \
    chown -R www.www ${Web_Dir} /var/lib/nginx/

# 5、暴露容器的端口
EXPOSE 80

# 6、启动脚本 nginx php 然后启动这个镜像会执行该脚本
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["bash","-c","/entrypoint.sh"]