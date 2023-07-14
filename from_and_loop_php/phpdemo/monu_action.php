<?php

//echo "hello";
$monu = array('fname'=>'pardeep','mobile'=>'8890','village'=>'bala ka bass');//associative array
$pankaj = array(5,6,7,'name');//numberic array
echo "<pre>";

//print_r($_REQUEST);
//print_r($_GET['fname']);
//print_r($_GET['lname']);
//print_r($_POST);

$fnames =isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ? $_REQUEST['fname']: "";
$lnames =isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ? $_REQUEST['lname']: "";

echo "my name is <b>" . $fnames ."  ". $lnames ."</b>"

// print_r($_REQUEST['city']); 

 








?>