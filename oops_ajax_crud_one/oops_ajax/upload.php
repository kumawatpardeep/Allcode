<?php

echo "<pre>";
print_r($_FILES);

if( isset($_FILES['file']['name']) && !empty($_FILES['file']['name']) ){

     $uploads=move_uploaded_file($_FILES['file']['tmp_name'],'uploads/myfiles.png');

    header("location:file_upload.php");
}
else{

    echo "file not found";
}


?>