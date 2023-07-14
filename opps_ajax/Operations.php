<?php
include "Database.php";

class Operations extends Database{

    private $array_result=[];
public function getAllData(){
    $Firequery=$this->connection->query("select * from vihan_pardeep");

    while($result=$Firequery->fetch_object()){
        $this->array_result[]=$result;
    }
    return $this->array_result;
}
public function delete_data($id){
    $querys=$this->connection->query("delete from vihan_pardeep where id=$id");
     return $querys;
   }
   public function insert_data($qrys){
    $sqlsss=$this->connection->query($qrys);
    return $sqlsss;
 }
}
// $obj=new Operations();
// $data=$obj->insert($name,$email,$mobile);
// echo "<pre>";
// print_r($data);

?>