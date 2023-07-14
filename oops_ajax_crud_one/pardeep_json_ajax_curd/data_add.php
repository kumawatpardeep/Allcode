<?php
include "Comman.php";
$obj=new Comman();

$name=$_POST['name'];
$email=$_POST['email'];
$village=$_POST['village'];

$arrayresutsss=[];

if(empty($name)){
    $arrayresutsss['name']='name is rquired..!';
}
if(empty($email)){
    $arrayresutsss['email']='email is required..!';
}
if(empty($village)){
    $arrayresutsss['village']='village is required..!';

}

$newarray=['errors'=>$arrayresutsss];

if(!empty($arrayresutsss)){
    echo json_encode($newarray);
    exit;
}

$query="insert into table_new (name,email,village) values ('$name','$email','$village')";
$object=$obj->data_add($query);


if($object){
    $array_results=['status'=>true,'message'=>'successfully insert'];
}
else{
    $array_results=['status'=>false,'message'=>'not insert'];

}
echo json_encode($array_results);
?>