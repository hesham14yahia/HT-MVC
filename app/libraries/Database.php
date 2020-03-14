<?php
    /*
     * PDO Database class
     * Connect to database
     * Create prepared statements
     * Bind values
     * Return rows and results
     */

    class Database
    {
        private $host = DB_HOST;
        private $db = DB;
        private $dbname = DB_NAME;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $options = DB_OPTIONS;

        private $database_handler;
        private $statement;
        private $error;

        public function __construct()
        {
            // set DSN
            $dsn = $this->db . ':host' . $this->host . ';dbname=' . $this->dbname;

            // create PDO instance
            try {

                $this->database_handler = new PDO($dsn, $this->user, $this->password, $this->options);

            } catch (PDOException $e) {

                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }