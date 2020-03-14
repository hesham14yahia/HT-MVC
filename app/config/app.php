<?php

    // app root
    define('APP_ROOT', dirname(dirname(__FILE__)));

    // url root
    define('URL_ROOT', '_YOUR_URL_');

    // site name
    define('SITE_NAME', '_YOUR_SITE_NAME_');

    // database
    define('DB', '_YOUR_DATABASE_');

    // database host
    define('DB_HOST', 'localhost');

    // database name
    define('DB_NAME', '_YOUR_DATABASE_NAME_');

    // database user
    define('DB_USER', '_YOUR_DATABASE_USER_');

    // database password
    define('DB_PASSWORD', '_YOUR_DATABASE_PASSWORD_');

    // database attribute options
    define('DB_OPTIONS', [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
