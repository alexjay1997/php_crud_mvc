<?php

class UserModel{

    private $server;
    private $server_user;
    private $server_pass;
    private $server_name;

    protected function db_connection()
    {
   
        $this->server ="localhost";
        $this->server_user ="root";
        $this->server_pass  ="";
        $this->server_name ="php_mvc_crud1";

    $this->connection = new mysqli($this->server,$this->server_user,$this->server_pass,$this->server_name);
    
            // Check connection
    if ($this->connection->connect_error) {
        die("Connection failed: " . $this->connection->connect_error);
        }
    
    return $this->connection;
    
        
    } 

    

}





?>