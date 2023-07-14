<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            height: 700px;
            width: 1000px;
            border: 1px solid black;
            background-color: red;
            display:flex;
            
        }
    </style>
</head>
<body>
    <script>
        function check(){


        }
    </script>
    <div class="main">
        <div><h1 style="color:white;"><h1 style="text-decoration: underline; color:white;">Registrastion Form</h1></h1></div><br><br>
        <form action="ram_action.php" method="post" enctype="multipart/form-data" style="margin-top:200px;">
            <label for="fname"><h1 style="color:white;">Fisrt Name</h1></label><br>
            <input type="text" name="fname" id="first name" placeholder="fname" required><br>
            <label for="lname"><h1 style="color:white;">Last Name</h1></label><br>
            <input type="text" name="lname" id="lname" placeholder="last name" required><br>
            <label for="email"><h1 style="color:white;">Email</h1></label><br>
            <input type="email" name="email" id="email" placeholder="enter email" required><br><br>
            <select name="city" required>

                <option value="">select city</option>
                <option value="jaipur">jaipur</option>
                <option value="jhunjhunu">jhunjhunu</option>
                <option value="bikaner">bikaner</option>
                <option value="jodpur">jodpur</option>
                <option value="bissau">bissau</option>

            </select>
            <br>
            <label>hobbys</label>
            <input type="checkbox" value="cricket" name="hobby[]">cricket
            <input type="checkbox" value="basketboll" name="hobby[]">basketboll
            <input type="checkbox" value="kabadi" name="hobby[]">kabadi
            <br>
            <input type="file" name="photo" accept="image/jpeg,image/png">
            <br>
            <button type="submit" onclick="return check()">submit</button>

          

            
        </form>

    </div>
    
</body>
</html>