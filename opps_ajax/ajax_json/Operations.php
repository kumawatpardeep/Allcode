<?php
include "Database.php";

class Operations extends Database{
    private $array_result=[];
    private $data;

    public function getDataAll(){
        $this->data=$this->connection->query("select * from ajax_json");

        while($firequery=$this->data->fetch_object()){
            $this->array_result[]=$firequery;
        }
        return $this->array_result;
    }
    public function data_delete($qrys){
        $delete_data=$this->connection->query($qrys);


        return $delete_data;
    }
    public function data_add($qrys){
        $data_add=$this->connection->query($qrys);


        return $data_add;
    }
}
// $obj=new Operations();
// $datass=$obj->data_delete();
// print_r($datass);
?>