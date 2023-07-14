<?php
class Database{
   private $_host="localhost";
   private $_username="root";
   private $_password="";
   private $_dbname="test_new";
   protected $conenction="";
   public function __construct(){//php magic function

      $this->conenction=new mysqli($this->_host,$this->_username,$this->_password,$this->_dbname);
      
      if(!$this->conenction){
        //echo "Error in conenction established";
      }
      else{
       // echo "conenction established";
      }
   }
}
// $objConn=new Database();

?>