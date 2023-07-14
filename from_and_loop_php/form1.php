<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function check(){
            alert();
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var mobile=document.getElementById("mobile").value;
            var email=document.getElementById("email").value;
            var pincode=document.getElementById("pincode").value;
            var male=document.getElementById("male").value;
            var datas=$("#myform").serialize();

            $.ajax({
                type:"POST",
                url:"vihan_action.php",
                data:datas,
                success:function(response){
                    $(".success").html(response);
                }
            })
            return false;
        }
    </script>
</head>
<body>
    <div class="success" style=color:green;></div>
    <form action="vihan_action.php" method="POST" id="myform" required>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" value="pardeep" required><br><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="kumawat" required><br><br>
        <label for="mobile number">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" value="8890941174" required><br><br>

        
        <?php
        include "form2.php";
        ?>
    
</body>
</html>