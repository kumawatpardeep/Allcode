<?php
class Database{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="json_ajax";


    protected $conn;
    public function __construct(){
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->db_name);

        if(!$this->conn){
            echo "connection is error";
        }
        // else{
        //     echo "ok";
        // }
    }

}
?>