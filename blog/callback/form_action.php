<?php

// echo "<pre>";
// print_r($_REQUEST);//both 
// print_r($_GET);//_GET 
// print_r($_POST);//_POST

 $email=isset($_GET['email'])?$_GET['email']:"";
 $password=isset($_GET['password'])?$_GET['password']:"";



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
            
  <table class="table table-striped">
    <thead>
      <tr>
       
       
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $email?></td>
        <td><?php echo $password; ?></td>
        
      </tr>
     
    </tbody>
  </table>
</div>

</body>
</html>
