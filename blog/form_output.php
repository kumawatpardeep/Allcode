<?php
$name=isset($_POST['name'])?$_POST['name']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";
$city=isset($_POST['city'])?$_POST['city']:"";
$gender=isset($_POST['gender'])?$_POST['gender']:"";


if($name==""){
    echo "name_error";
    exit();
}
else if($email==""){
    echo "email_error";
    exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    
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
else if($city==""){
    echo "city_error";
    exit();
}
else if($gender==""){
    echo "gender_error";
    exit();
}

 echo "<pre>";
 print_r($_REQUEST);

?>