<?php   
$fname=isset($_POST['fname'])?$_POST['fname']:"";
$lname=isset($_POST['lname'])?$_POST['lname']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$date=isset($_POST['date'])?$_POST['date']:"";
$Address=isset($_POST['Address'])?$_POST['Address']:"";
$city=isset($_POST['city'])?$_POST['city']:"";
$Region=isset($_POST['Region'])?$_POST['Region']:"";
$state=isset($_POST['state'])?$_POST['state']:"";

$data=[];
if($fname==''){
    $data['fname']='First is Requried';
}
if($lname==''){
    $data['lname']='lname is Requried';
}if($email==''){
    $data['email']='email is Requried';
}if($password==''){
    $data['password']='password is Requried';
}if($date==''){
    $data['date']='date is Requried';
}if($Address==''){
    $data['Address']='Address is Requried';
}if($city==''){
    $data['city']='city is Requried';
}if($Region==''){
    $data['Region']='Region is Requried';
}
if($state==''){
    $data['state']='state is Requried';
}
// $datas['error']=$data;
// echo json_encode($datas);
$pardeep=['error'=>$data];
echo json_encode($pardeep);






?>