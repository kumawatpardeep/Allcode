<?php
include "Comman.php";

$obj=new Comman();
$id=$_POST['id'];


$obje=$obj->delete_data($id);

if($obje){
    $resultesre=['status'=>true,'message'=>'delete is successfully'];
}
else{
    $resultesre=['status'=>false,'message'=>'no'];

}
echo json_encode($resultesre);

?>