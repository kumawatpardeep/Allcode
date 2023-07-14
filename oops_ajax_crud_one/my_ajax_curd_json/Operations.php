<?php
include "Database.php";

class Operations extends Database{

private $array_result=[];
    public function getAllData(){
          $fireresut=$this->connection->query("select * from oneclick_json_curd");

          while($result=$fireresut->fetch_assoc()){
            $this->array_result[]=$result;
          }
          return $this->array_result;
    }
    public function delete_data($id){
        $fireresut=$this->connection->query("delete from oneclick_json_curd where id=$id");

        return $fireresut;
  }
  public function add_data($query){
    $fireresuts=$this->connection->query($query);

    return $fireresuts;
}
}

?>