<?php

    /*
     * App Core Class
     * Creates URL & load core controller
     * URL FORMAT - /controller/method/params
     */

    class Core extends AppFile {

        // if there isn't any controllers load pages controller
        protected  $currentController = 'Pages';

        // if there isn't any method load index method
        protected $currentMethod = 'index';

        // params are optional
        protected $params = [];

        public function __construct()
        {
            $url = $this->getUrl();

            // convert the controller name in url to a valid controller file name
            $controllerName = ucwords($url[0]);

            // check if there is a controller matches the controller named in url
            if(file_exists($this->path('controllers' ,$controllerName))){

                // if exists, set controller name as current controller
                $this->currentController = $controllerName;

                // remove controller name form url array
                unset($url[0]);
            }

            // require the controller
            require_once $this->path('controllers' ,$this->currentController);

            // Instantiate controller class
            $this->currentController = new $this->currentController;

            // get method name from url
            $methodName = $url[1] ?? false;

            // check if url has method
            if(isset($methodName)){

                // check if the controller has the method named in url
                if(method_exists($this->currentController, $methodName)) {
                    $this->currentMethod = $methodName;
                }

                // remove method name form url array
                unset($url[1]);
            }

            // get params from url
            $this->params = $url ? array_values($url) : [];

            // call a callback function with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        // return the combination of the controller method and params creating url
        public function getUrl()
        {
            if(isset($_GET['url'])) {

                // remove back slashes
                $url = rtrim($_GET['url'], '/');

                // validate url character for a valid url
                $url = filter_var($url, FILTER_SANITIZE_URL);

                // convert url to array
                $url = explode('/', $url);
                return $url;
            }
        }

    }