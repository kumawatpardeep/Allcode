<?php
include "Operations.php";

$objee=new Operations();

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$checkValidationArray=[];
if(empty($name)){
    $checkValidationArray['name']='name is required';
}
if(empty($email)){
    $checkValidationArray['email']='email is required';

}
if(empty($mobile)){
    $checkValidationArray['mobile']='mobile is required';

}
$newarray=['errors'=>$checkValidationArray];

if(!empty($checkValidationArray)){
  echo json_encode($newarray);
  exit();
} 


$hidden_id=$_REQUEST['hidden_id'];


$query="UPDATE `json_ajax_curd` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id=$hidden_id";
$objesct=$objee->update_data($query);

if($objesct){
    $queryssss=['status'=>true,'message'=>'Successfully Updated..!'];
}
else{
    $queryssss=['status'=>false,'message'=>'Do not Updated..!'];

}
echo json_encode($queryssss);


?>