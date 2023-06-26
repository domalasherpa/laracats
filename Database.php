<?php

class Database{
    public $connection;
    public function __construct($config){

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $config['username'], $config['pass'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);  

        $this->connection->exec("use $config[dbname]");
    }
   

    public function query($query){
        
        $statement = $this->connection->prepare($query);
        $statement ->execute();

        return $statement;
    }

}