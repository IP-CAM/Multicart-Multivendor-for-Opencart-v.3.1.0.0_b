<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/multicart/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/multicart/');

// DIR
define('DIR_APPLICATION', '/var/www/html/multicart/catalog/');
define('DIR_EXTENSION', '/var/www/html/multicart/extension/');
define('DIR_IMAGE', '/var/www/html/multicart/image/');
define('DIR_SYSTEM', '/var/www/html/multicart/system/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');


// DB
define('DB_DRIVER', 'postgre');
//define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'ec2-18-235-109-97.compute-1.amazonaws.com');
define('DB_USERNAME', 'jdnjfyuhhpyqou');
define('DB_PASSWORD', '2614ff42aac19d0b5b7fdc3a5ef8e5c69a1ab8eeb81e8db57df898ab894ee147');
define('DB_DATABASE', 'de61661Host');
define('DB_PORT', '5432');
define('DB_PREFIX', 'oc_');

/*
// DB
define('DB_DRIVER', 'postgre');
//define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'njoku');
define('DB_PASSWORD', 'nuhTMX6z');
define('DB_DATABASE', 'multicart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
*/

/*
Host
    ec2-18-235-109-97.compute-1.amazonaws.com
Database
    de61661Host
    ec2-18-235-109-97.compute-1.amazonaws.com
Database
    de61661elfs7mc
User
    jdnjfyuhhpyqou
Port
    5432
Password
    2614ff42aac19d0b5b7fdc3a5ef8e5c69a1ab8eeb81e8db57df898ab894ee147
URI
    postgres://jdnjfyuhhpyqou:2614ff42aac19d0b5b7fdc3a5ef8e5c69a1ab8eeb81e8db57df898ab894ee147@ec2-18-235-109-97.compute-1.amazonaws.com:5432/de61661elfs7mc
Heroku CLI
    heroku pg:psql postgresql-elliptical-94107 --app multimartelfs7mc
User
    jdnjfyuhhpyqou
Port
    5432
Password
    2614ff42aac19d0b5b7fdc3a5ef8e5c69a1ab8eeb81e8db57df898ab894ee147
URI
    postgres://jdnjfyuhhpyqou:2614ff42aac19d0b5b7fdc3a5ef8e5c69a1ab8eeb81e8db57df898ab894ee147@ec2-18-235-109-97.compute-1.amazonaws.com:5432/de61661elfs7mc
Heroku CLI
    heroku pg:psql postgresql-elliptical-94107 --app multimart*/