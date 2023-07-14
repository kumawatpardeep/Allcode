<?php
include "Comman.php";
$obj=new Comman();



$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$village=$_POST['village'];
$hidden_id=$_REQUEST['hidden_id'];


$query="update oneclick_json_curd set  name='$name',email='$email',mobile='$mobile',village='$village' where id=$hidden_id";
$object=$obj->edit_data($query);
if($object){
    $resultesre=['status'=>true,'message'=>'edit is successfully'];
}
else{
    $resultesre=['status'=>false,'message'=>'no'];

}
echo json_encode($resultesre);


?>