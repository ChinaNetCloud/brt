BRT
====
Install:
# Install prerequisits:
## nginx
## php-fpm and PHP 7.x
## MySQL, should work with any version. I have 5.7

Before you proceed, please make sure these steps those dependencies are 
installed and working correctly

# Configure DB parameters.yml on app/config/

parameters:
    #    dbal: 
    database_host: serverIP
    database_port: 3306(or custom port is applicable)
    database_name: db_bame
    database_user: db_user
    database_password: pass

# Create DB:
to do that first go to code directory using cd.
## drop DB is exists/wanted:
php bin/console doctrine:database:drop --force
## create DB:
php bin/console doctrine:database:create


## Create tables:
php bin/console doctrine:schema:update --force
this should create 2 tables.

# Execute composer update unless you already have the vendor components downloaded.

# configure nginx my current dev config looks like this:

server {
    listen 0.0.0.0:80;
    server_name brt.new.dev;
    root /var/www/sites/brt/web;
    sendfile  off;
    expires -1;
    add_header Cache-Control no-cache;

    location / {
        # try to serve file directly, fallback to app.php
        try_files $uri /app.php$is_args$args;
    }
    #DEV
    location ~ ^/(app_dev|config)\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }
    # PROD
    location ~ ^/app\.php(/|$) {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
       fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
       fastcgi_param DOCUMENT_ROOT $realpath_root;
#       internal;
   }
   location ~ \.php$ {
     return 404;
   }
   error_log /var/log/nginx/brt_project_error.log;
   access_log /var/log/nginx/brt_project_access.log;
}

As you might have already noticed my PHP-FPM listens on localhost port 9000.

# If you need/want to test on prod env, 
you need to follow steps similar to this:
http://www.abelworld.com/symfony-2-deploy-prodution-environment/

the URL for production is:
http://you_dev_server_URL/
The URL for development environment is:
http://you_dev_server_URL/app_dev.php/

There are a few differences most noticeably dev will be slow mainly because it 
does not use any caching mechanism 

# Execute a few backups from a machine to test results, 
you need to point the backups of nc-backup-py to:

http://you_dev_server_URL/backup/

on this parameters of the json file I show my configs: 
    "MESSAGE_CONFIG_COMMAND": "http://brt.new.dev/app_dev.php/backup/",
    "MESSAGE_CONFIG_METHOD": "post",

# These report tool can probably be used by other software, but the post request 
needs to have a specific format. You can find more information about that on 
the file src/NCbrtBundle/Controller/DefaultController.php:

The synchronization feature is done in php but not using Symfony. you can find 
the relevant files on the web folder:
sync_sugar.php
sync_config.dist.php

Do not hesitate on rasing an issue if you think this readme needs change.
