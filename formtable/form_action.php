<?php
echo "<pre>";
print_r($_REQUEST);
$emails=isset($_REQUEST['email'])?$_REQUEST['email']: "";
echo $passwords=isset($_REQUEST['password'])?$_REQUEST['password']: "";
$fnames=isset($_REQUEST['fname'])?$_REQUEST['fname']: "";
$lnames=isset($_REQUEST['lname'])?$_REQUEST['lname']: "";
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


  <?php 
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $address = $_REQUEST['address'];
  
  
  ?>
</head>
<body>
    
<div class="container">
    <table>
 <table class="table table-striped" border='1' cellspacing='0' cellpadding='0'>
    <thead>
      <tr>
        <th>Email</th>
        <th>password</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>address</th>
        
      </tr>
    </thead>
    <tbody>
   
      <tr>
        <td><?php echo $email?></td>
        <td><?php echo $password?></td>
        <td><?php echo $fname?></td>
        <td><?php echo $lname?></td>
        <td><?php echo $address?></td>

      </tr>
    </tbody>
  </table>
       </table>  

</div>

</body>
</html>
