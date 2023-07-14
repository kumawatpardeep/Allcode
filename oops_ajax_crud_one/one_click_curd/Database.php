<?php
   abstract  class Database{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="json_ajax";

    protected $conn;

    public function __construct(){//magic function
        $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

        if(!$this->conn){
                echo "connetion is error";
        }
        // else{
        //     echo "connection is successfully";
        // }
    }

}
// $obj=new Database();
?>