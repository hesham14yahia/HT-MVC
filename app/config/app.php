<?php

    // app root
    define('APP_ROOT', dirname(dirname(__FILE__)));

    // url root
    define('URL_ROOT', 'http://localhost/sites/htmvc/');

    // site name
    define('SITE_NAME', 'HT-MVC');

    // database
    define('DB', 'mysql');

    // database host
    define('DB_HOST', 'localhost');

    // database name
    define('DB_NAME', 'ht-mvc');

    // database user
    define('DB_USER', 'root');

    // database password
    define('DB_PASSWORD', '');

    // database attribute options
    define('DB_OPTIONS', [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
