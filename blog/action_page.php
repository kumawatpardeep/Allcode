<?php


$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";
if($email==""){
    echo "email_error";
    exit();
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    
   echo "invalidemail_error";
   exit();
}
else if($password==""){
    echo "password_error";
    exit();
}
else if($mobile==""){
    echo "mobile_error";
    exit();
}

echo "<pre>";
print_r($_REQUEST);

?>