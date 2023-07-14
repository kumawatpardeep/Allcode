<?php
include "Database.php";

class Opera extends Database{
    private $data_arr=[];

    public function allData(){
        $query=$this->conn->query("select * from  jsonss");

        while($fire=$query->fetch_assoc()){
            $data_arr[]=$fire;
        }
        return $data_arr;
    }
    public function delete_data($id){
        $queryss=$this->conn->query("delete from jsonss where id=$id");

        return $queryss;
    }
}
// $obj=new Opera();
// $datass=$obj->allData();
// echo "<pre>";
// print_r($datass)

?>