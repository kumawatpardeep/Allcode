<?php
include "Comman.php";
$obj=new Comman();

$name=$_POST['name'];
$email=$_POST['email'];
$village=$_POST['village'];
$gender=$_POST['gender'];
$cast=$_POST['cast'];
$mobile=$_POST['mobile'];

$arrayresutsss=[];

if(empty($name)){
    $arrayresutsss['name']='name is rquired..!';
}
if(empty($email)){
    $arrayresutsss['email']='email is required..!';
}
if(empty($village)){
    $arrayresutsss['village']='email is required..!';

}
if(empty($gender)){
    $arrayresutsss['gender']='gender is required..!';

}
if(empty($cast)){
    $arrayresutsss['cast']='cast is required..!';

}
if(empty($mobile)){
    $arrayresutsss['mobile']='mobile is required..!';

}
$newarray=['errors'=>$arrayresutsss];

if(!empty($arrayresutsss)){
    echo json_encode($newarray);
    exit;
}
 

$hidden_id=$_POST['hidden_id'];
$query="update  ajax_json_curd set name='$name',email='$email',village='$village',gender='$gender',cast='$cast',mobile='$mobile' where id=$hidden_id";

$queryss=$obj->add_data($query);

if($queryss){
    $arraysss=['status'=>true,'message'=>'successfully updated..!'];
}
else{
    $arraysss=['status'=>false,'message'=>'no updated..!'];

}
echo json_encode($arraysss);



?>