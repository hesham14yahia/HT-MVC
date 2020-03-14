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

        // prepare statement with query
        public function query($sql)
        {
            $this->statement = $this->database_handler->prepare($sql);
        }

        // bind values
        public function bind($param, $value, $type = null)
        {
            if(is_null($type)) {
                switch(true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }

            $this->statement->bindValue($param, $value, $type);
        }

        // execute prepare statement
        public function execute()
        {
            return $this->statement->execute();
        }

        // get result set as array of objects
        public function resultSet()
        {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        // get single record as object
        public function single()
        {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        // get rows count
        public function rowCount()
        {
            return $this->statement->rowCount();
        }
    }