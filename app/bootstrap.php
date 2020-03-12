<?php

    // load config
    require_once 'config/app.php';

    // autoload libraries
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });