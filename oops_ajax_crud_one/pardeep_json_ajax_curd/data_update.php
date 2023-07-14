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

$hidden_id=$_POST['hidden_id'];
$query="update table_new set name='$name',email='$email',village='$village' where id=$hidden_id";
$object=$obj->data_add($query);


if($object){
    $array_results=['status'=>true,'message'=>'successfully Edit'];
}
else{
    $array_results=['status'=>false,'message'=>'not Edit'];

}
echo json_encode($array_results);
?>