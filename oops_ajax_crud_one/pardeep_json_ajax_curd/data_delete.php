<?php
include "Comman.php";
$obj=new Comman();

$id=$_POST['id'];

$object=$obj->delete_data($id);

if($object){
    $array_results=['status'=>true,'message'=>'successfully delete'];
}
else{
    $array_results=['status'=>false,'message'=>'not delete'];

}
echo json_encode($array_results);
?>