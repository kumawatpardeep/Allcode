<?php
include "Operations.php";
$objOperations=new Operations();

$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$salary=$_POST['salary'];
$checkValidationArray=[];
if(empty($name)){
    $checkValidationArray['name']='name is required';
}
if(empty($address)){
    $checkValidationArray['address']='address required';
}
if(empty($city)){
    $checkValidationArray['city']='city required';
}
if(empty($salary)){
    $checkValidationArray['salary']='salary required';
}

$newarray=['errors'=>$checkValidationArray];

if(!empty($checkValidationArray)){
  echo json_encode($newarray);
  exit();
}


$qrys="insert into users (name,addess,city,salary) values ('".$name."','".$address."','".$city."','".$salary."')";
 $resutlInsert=$objOperations->add_data($qrys);

if($resutlInsert){

    $returnArray=['Status'=>true,'Msg'=>"successfully added..!"];
    
}
else{
    $returnArray=['Status'=>false,'Msg'=>"data not added..!"];
}

echo json_encode($returnArray);



?>