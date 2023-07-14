<?php
include "Comman.php";
$obj=new Comman();

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$village=$_POST['village'];

$query="insert into oneclick_json_curd (name,email,mobile,village) values ('$name','$email','$mobile','$village')";
$object=$obj->add_data($query);
if($object){
    $resultesre=['status'=>true,'message'=>'add is successfully'];
}
else{
    $resultesre=['status'=>false,'message'=>'no'];

}
echo json_encode($resultesre);


?>