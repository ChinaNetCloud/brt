FROM php:7.2.1-fpm-alpine3.7
RUN sed 's|dl-cdn.alpinelinux.org|mirrors.aliyun.com|g' /etc/apk/repositories -i && \
    apk update && apk add git && \
    git clone https://github.com/ChinaNetCloud/brt.git && \
    cd brt && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv app/config/config_jenkins_cicd.yml config.yml -y && \
    ./composer.phar update && \
    
     
