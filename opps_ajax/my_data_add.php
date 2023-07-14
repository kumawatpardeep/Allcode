<?php
include "Operations.php";

$ojbect=new Operations();
// print_r($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];



$chechValidationArray=[];

if(empty($name)){
    $chechValidationArray['name']='Name is required';
}
if(empty($email)){
    $chechValidationArray['email']='Email is required';
}
if(empty($mobile)){
    $chechValidationArray['mobile']='mobile is required';
}
$newarray=['errors'=>$chechValidationArray];

if(!empty($chechValidationArray)){
    echo  json_encode($newarray);
    exit;
}

  $qrys="insert into vihan_pardeep (name,email,mobile) values ('$name','$email','$mobile')";
  $resutlInsert=$ojbect->insert_data($qrys);
 
 if($resutlInsert){
 
     $returnArray=['Status'=>true,'message'=>"successfully added..!"];
     
 }
 else{
     $returnArray=['Status'=>false,'message'=>"data not added..!"];
 }
 
 echo json_encode($returnArray);



?>