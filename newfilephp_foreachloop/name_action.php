<?php
// echo "hello";
// echo "<pre>";
// $pardeep=array('fname'=>'pardeep','village'=>'bala ka bass','address'=>'3423q43');
// $pardeep1=array(1,2,3,4,'pardeep');

print_r($_REQUEST);

$fnames=isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ? $_REQUEST['fname'] :"";
$lnames=isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ? $_REQUEST['lname'] :"";



echo "my name is <br>" . $fnames ."  ". $lnames ."</br>"
//print_r($_REQUEST);


?>