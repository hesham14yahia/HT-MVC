<?php

    /*
     * handle files
     */
    class AppFile
    {

        // return file path for controllers models and views or any class in app folder
        function path($type, $name, $use_ucwords_fun = false)
        {
            return !$use_ucwords_fun ? '../app/'. $type . '/' . ucwords($name) . '.php' :
                '../app/'. $type . '/' . $name . '.php';
        }

        // view doesn't exist
        function file_does_not_exist_message($type)
        {
            die(ucwords($type) . ' doesn\'t exist');
        }
    }