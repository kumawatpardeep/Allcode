<?php
include "Database.php";
class Operations extends Database{


    private $result_array=[];
    public function getAllData(){

        $resultsFireQuery=$this->conenction->query("select * from users");

        while($results=$resultsFireQuery->fetch_object()){//fetch_assoc

            $this->result_array[]=$results;
        }

         return $this->result_array;
    }

    public function delete_data($id){

        $resultsFireQuery=$this->conenction->query("delete from users where id=$id ");

        return $resultsFireQuery;

    }

    public function add_data($qry){

        $resultsFireQuery=$this->conenction->query($qry);

        return $resultsFireQuery;

    }

}

// $objOperations=new Operations();
// $myData=$objOperations->getAllData();



?>