<?php
include "Operations.php";
$objOperations=new Operations();

$id=$_POST['id'];
$myData=$objOperations->delete_data($id);

if($myData){

    $returnArray=['Status'=>true,'Msg'=>"successfully deleted..!"];
    
}
else{
    $returnArray=['Status'=>false,'Msg'=>"data not deleted..!"];
}

echo json_encode($returnArray);



?>