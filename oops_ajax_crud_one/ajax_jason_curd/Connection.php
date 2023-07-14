<?php
class Connection{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="json_ajax";

    protected $conn;

    public function __construct(){
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->db_name);
        if(!$this->conn){
            echo "connections error";
        }
        // else{
        //     echo "connections is successfully";
        // }
    }

}
// $obj=new Connection();

?>