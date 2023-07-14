<?php

$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";

if($email==""){
   echo json_encode((['status'=>false,'message'=>'email is required','type'=>'email']));
    exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo json_encode((['status'=>false,'message'=>'valid email required','type'=>'email']));
    exit();
}
else if($password==""){
   echo json_encode((['status'=>false,'message'=>'password is required','type'=>'password']));
    exit();
}
else if($mobile==""){
    echo json_encode((['status'=>false,'message'=>'mobile is required','type'=>'mobile']));
    exit();
}
else{
    echo json_encode((['status'=>true]));
    exit();
}

// echo "<pre>";
// print_r($_REQUEST)

?>