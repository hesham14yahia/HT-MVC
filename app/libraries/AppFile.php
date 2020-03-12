<?php

    /*
     * handle files
     */
    class AppFile
    {

        // return file path for controllers models and views or any class in app folder
        function path($directory, $name, $use_ucwords_fun = false)
        {
            return !$use_ucwords_fun ? '../app/'. $directory . '/' . ucwords($name) . '.php' :
                '../app/'. $directory . '/' . $name . '.php';
        }

        // view doesn't exist
        function file_does_not_exist_message($type)
        {
            die(ucwords($type) . ' doesn\'t exist');
        }
    }