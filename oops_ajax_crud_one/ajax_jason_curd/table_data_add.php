<?php
include "Comman.php";
$obj=new Comman();

$name=$_POST['name'];
$email=$_POST['email'];
$village=$_POST['village'];
$gander=$_POST['gander'];
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
if(empty($gander)){
    $arrayresutsss['gander']='gander is required..!';

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

$query="insert into ajax_json_curd (name,email,village,gender,cast,mobile) values ('$name','$email','$village','$gander','$cast','$mobile')";

$queryss=$obj->edit_data($query);

if($queryss){
    $arraysss=['status'=>true,'message'=>'successfully inserted..!'];
}
else{
    $arraysss=['status'=>false,'message'=>'no inserted..!'];

}
echo json_encode($arraysss);



?>