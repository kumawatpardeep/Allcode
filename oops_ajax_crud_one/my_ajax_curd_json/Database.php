<?php
class Database{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="json_ajax";

    protected $connection;
     public function __construct(){
        $this->connection=new mysqli($this->host,$this->username,$this->password,$this->db_name);

        if(!$this->connection){
              echo "connection is error";
        }
     }

}


?>