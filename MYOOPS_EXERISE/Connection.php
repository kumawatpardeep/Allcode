<?php
class Connection{
    private $_host="localhost";
    private $_username="root";
    private $_password="";
    private $_db_name="subhash";

    protected $conne;

    public function __construct(){
        $this->conne=new mysqli($this->_host,$this->_username,$this->_password,$this->_db_name);

        if(!$this->conne){
            echo "connection is error";
        }
        // else{
        //     echo "connection is success";
        // }
    }

}

// $obj=new Connection();
?>