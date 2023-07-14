<?php
// echo "<pre>";
// print_r($_FILES['photo']);


$file_name= isset($_FILES['photo']['name']);
$file_name="text.png";
$file_tmpname= isset($_FILES['photo']['tmp_name']);
$file_size= isset($_FILES['photo']['size']);
$file_type= isset($_FILES['photo']['type']);

move_uploaded_file($file_tmpname,'monu/'.$file_name);


?>