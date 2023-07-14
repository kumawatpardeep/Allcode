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

$query="insert into json_ajax_curd (name,email,mobile) values ('$name','$email','$mobile')";
$objesct=$objee->insert_data($query);

if($objesct){
    $queryssss=['status'=>true,'message'=>'Successfully inserted..!'];
}
else{
    $queryssss=['status'=>true,'message'=>'Do not inserted..!'];

}
echo json_encode($queryssss);


?>