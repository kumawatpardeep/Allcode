<?php
include "Database.php";

class Operations extends Database{
    private $array_result=[];

    public function getAllData(){
        $queryss=$this->connection->query("select * from json_ajax_curd");
        while($results=$queryss->fetch_object()){
            $this->array_result[]=$results;
        }
        return $this->array_result;
    }
    public function delete_data($id){
        $arrayquery=$this->connection->query("delete from json_ajax_curd where id=$id");
        return $arrayquery;
    }
    public function insert_data($query){
        $arrayquerys=$this->connection->query($query);
        return $arrayquerys;
    }
    public function update_data($query){
        $arrayqueryss=$this->connection->query($query);
        return $arrayqueryss;
    }
}
// $d=new Operations();
// $dd=$d->update_data($arrayqueryss);
// print_r($dd);


?>