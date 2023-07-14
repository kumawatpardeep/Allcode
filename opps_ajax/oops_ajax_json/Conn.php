<?php
class Conn{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="curd_class";

    protected $con;

    public function __construct(){
        $this->con=new mysqli($this->host,$this->username,$this->password,$this->db_name);
        if(!$this->con){
            echo "connection is error";
        }
    }

}



?>