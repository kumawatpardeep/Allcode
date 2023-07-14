<?php

$name=isset($_POST['name'])?$_POST['name']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";
$gender=isset($_POST['gender'])?$_POST['gender']:"";
$pincode=isset($_POST['pincode'])?$_POST['pincode']:"";

$data=[];
if($name==''){
    $data['name']='Name is required';
}
if($email==''){
    $data['email']='Email is required';
}
if($password==''){
    $data['password']='Password is requried';
}
if($mobile==''){
    $data['mobile']='Mobile is required';
}
if($gender==''){
    $data['gender']='Select gender';
}
if($pincode==''){
    $data['pincode']='Enter pincode';
}
$datas['error']=$data;
echo json_encode($datas);




?>