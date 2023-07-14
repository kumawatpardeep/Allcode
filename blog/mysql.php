<?php
//mysqli driver

//how to connect db with php

// $conn=mysqli_connect('host','username','password','database name');
// $conn=mysqli_connect('localhost','root','','test') or die('error in connect db');
$conn=mysqli_connect('localhost','root','','test');

if(!$conn)
 echo "error in connect db";

 $qrusy="select * from user";
  $fetchDataQuery=mysqli_query($conn,$qrusy) or die(mysqli_error($conn));//this function return true or false   (fire query)

//   $fetchResult=mysqli_fetch_array($fetchDataQuery);//for fetch data connetion variable is not required

 while($fetchResult=mysqli_fetch_array($fetchDataQuery)){

     echo $fetchResult['id'].' '.$fetchResult['name'].' '.$fetchResult['email'].' '.$fetchResult['mobile'];
     echo "<br>";
 }






?>