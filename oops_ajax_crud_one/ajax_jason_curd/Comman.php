<?php
include "Connection.php";
class Comman extends Connection{
    private $result_array=[];

    public function dataAllGet(){
        $queryes=$this->conn->query("select * from ajax_json_curd");

        while($result=$queryes->fetch_assoc()){
            $this->result_array[]=$result;
        }
        return $this->result_array;
    }
    public function delete_data($id){
        $queryes=$this->conn->query("delete from ajax_json_curd where id=$id ");

       return $queryes;
    }
    public function add_data($query){
        $queryess=$this->conn->query($query);

       return $queryess;
    }
    public function edit_data($query){
        $queryess=$this->conn->query($query);

       return $queryess;
    }
}
// $obj=new Comman();
// $kkk=$obj->dataAllGet();

// echo "<pre>";
// print_r($kkk);

?>