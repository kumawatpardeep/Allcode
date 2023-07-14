<?php
include "Database.php";

class Comman extends Database{

    protected $result_array=[];
    public function getAllData(){
        $result=$this->conn->query("select * from table_new");

        while($fireresult=$result->fetch_assoc()){
            $this->result_array[]=$fireresult;
        }

        return $this->result_array;
    }
    public function delete_data($id){
        $resultss=$this->conn->query("delete from table_new where id=$id");

        return $resultss;
    }
    public function data_add($query){
        $resultsss=$this->conn->query($query);

        return $resultsss;
    }
    public function data_update($query){
        $resultssss=$this->conn->query($query);

        return $resultssss;
    }
}


?>