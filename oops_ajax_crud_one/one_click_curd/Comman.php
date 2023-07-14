<?php
include "Database.php";

class Comman extends Database{
   private $aaray_result=[];

   public function getAllData(){
    $result=$this->conn->query("select * from oneclick_json_curd");
    while($fireresult=$result->fetch_assoc()){
        $this->aaray_result[]=$fireresult;
    }
    return $this->aaray_result;
   }
   public function delete_data($id){
  $resylte=$this->conn->query("delete from oneclick_json_curd where id=$id");
  return $resylte;
   }
   public function add_data($query){
    $resyltes=$this->conn->query($query);
    return $resyltes;
     }
     public function edit_data($query){
        $resyltess=$this->conn->query($query);
        return $resyltess;
         }
}






?>