<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function check(){

        }
    </script>
    <form action="monu_action.php" method="post">
        <label for="fname">First name</label><br>
        <input type="text" name="fname" id="fname" placeholder="first name" required><br>
        <label for="lname">last name</label><br>
        <input type="text" name="lname" id="lname" placeholder="first name" required><br><br>
        <select name="city" required>
            <option value="">select city</option>
            <option value="jhunjhunu">jhunjhunu</option>
            <option value="jaipur">jaipur</option>
            <option value="bissau">bissau</option>
            <option value="chirawa">chirawa</option>

        </select><br><br>
        <button type="submit" onclick="return check()">submit</button>
        
    </form>
</body>
</html>