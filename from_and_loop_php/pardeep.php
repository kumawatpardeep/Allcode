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
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var email=document.getElementById("email").value;
            var checkbox=document.getElementById("obc").value;
            var checkbox=document.getElementById("st").value;
            var datas=$("#myform").serialize();
            

            $.ajax({
                beforeSend:function(){
                    alert('loder on');
                },
               
                type:"POST",
                url:"pardeep_action.php",
                data:datas,
                success:function(response){
                    $(".success").html(response);
                },
                error:function(errors){
                    alert('errors');
                },
                complete:function(){
                    alert('loder off');
                }
            })
            return false;
        }
    </script>
</head>
<body>
 <div class="success" style="color:red;"></div>
    <form action="pardeep_action.php" id="myform" method="post">
        <label for="fname">first name</label>
        <input type="text" name="fname" id="fname" placeholder="first name" required><br><br>
        <label for="lname">last name</label>
        <input type="text" name="lname" id="lname" placeholder="last name" required><br><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="ente email" required><br><br>
        <input type="checkbox" name="obc" id="obc" required>
        <label for="obc">obc</label><br>
        <input type="checkbox" name="st" id="st" required>
        <label for="st">st</label><br><br> 

        <select name="city" id="city" required>
            <option value="">select city</option>
            <option value="jhunjhunu">jhunjhunu</option>
            <option value="jaipur">jaipur</option>
            <option value="bikaner">bikaner</option>
            <option value="bissau">bissau</option>
            <option value="bala ka bass">bala ka bass</option>

        </select><br><br>
        <button type="submit" onclick=" return check()">submit</button>
    </form> 
   
</body>
</html>