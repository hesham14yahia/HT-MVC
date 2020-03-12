<?php

    /*
     * Base Controller
     * Loads the models and views
     */

    require_once '../app/libraries/AppFile.php';

    class  Controller extends AppFile
    {
        // Load model
        public function model($model)
        {
            // require model file
            require_once $this->path('models', $model, true);

            // instantiate model
            return new $model();
        }

        // load view
        public function view($view, $data = [])
        {
            // check for view file
            if(file_exists($this->path('views', $view)))
            {
                // require view file
                require_once $this->path('views', $view);
            } else {
                // view doesn't exist
                $this->file_does_not_exist_message('view');
            }
        }
    }