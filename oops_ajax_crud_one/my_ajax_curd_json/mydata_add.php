<?php
include "Operations.php";

$obj=new Operations();

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$village=$_POST['village'];

$query="insert into oneclick_json_curd (name,email,mobile,village) values ('$name','$email','$mobile','$village')";
$object=$obj->add_data($query);
if($object){
    $aarayreut=['status'=>true,'message'=>'successfully inserted..!'];
}
else{
    $aarayreut=['status'=>false,'message'=>'no inserted..!'];

}
echo json_encode($aarayreut);

?>