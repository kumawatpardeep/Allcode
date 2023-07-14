<?php
include "Operations.php";

$obj=new Operations();

$name=$_POST['name'];
$email=$_POST['email'];
$village=$_POST['village'];

$arrayresut=[];

if(empty($name)){
    $arrayresut['name']='name is required..!';
}
if(empty($email)){
    $arrayresut['email']='email is required..!';
}
if(empty($mobile)){
    $arrayresut['mobile']='mobile is required..!';
}
$newarray=['error'=>$arrayresut];

if(!empty($arrayresut)){
    echo json_encode($newarray);
    exit;
}

$newquery="insert into ajax_json (name,email,village) values ('$name','$email','$village')";
$queryss=$obj->data_add($newquery);

// print_r($queryss);

if($queryss){
    $arryresult=['status'=>true,'message'=>'Successfully inserted..!'];
}
else{
    $arryresult=['status'=>true,'message'=>'UNsuccessfully inserted..!'];

}
echo json_encode($arryresult);
?>