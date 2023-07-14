<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<script>
    function check(){
        
    }
  </script>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="name_action.php" method="post" required>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter email" name="fname" required>
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter password" name="lname" required>
    </div>
    <div class="checkbox">
      <select name="city"  required>
        <option value="">Select City</option>
        <option value="jaipur">jaipur</option>
        <option value="jhunjhunu">jhunjhunu</option>
        <option value="bikaner">bikaner</option>
        <option value="ajmer">ajmer</option>
        <option value="badmer">badmer</option>
      </select>
    </div>
    <button type="submit" onclick="return check()" required>Submit</button>
  </form>
</div>

</body>
</html>
