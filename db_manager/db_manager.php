<?php
//
//  db_connect.php
//  web-api backend
//
//  Created by eugenerdx on 28.03.16.
//  Copyright © 2016 Evgeny Ulyankin. All rights reserved.
//

 
class DatabaseManager
{
    protected static $instance;
    private $connection;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
        $this->connect();
    }

    private function __clone(){}
    private function __wakeup(){}

    public function connect()
    {
        require('db_config.php');

        $this->connection = mysqli_connect($host, $user, $pass) or die(mysqli_error());
        mysqli_select_db($this->connection, $db) or die(mysqli_error());

        return $this->connection;
    }
 
    protected function close()
    {
        mysqli_close($this->connection);
    }

    public function query($query) 
    {
        $connection = $this->connect();
        $result = mysqli_query($connection, $query);
        $this->close();

        return $result;
    }
}

?>
