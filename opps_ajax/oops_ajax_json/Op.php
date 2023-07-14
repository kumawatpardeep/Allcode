<?php
include "Conn.php";
class Op extends Conn{
    private $index_array=[];
    private $date;

    public function getAllData(){
        $this->date=$this->con->query("select * from ajax_json");
        while($query_fire=$this->date->fetch_object()){
            $index_array[]=$query_fire;
        }
        return $index_array;
    }
}



?>