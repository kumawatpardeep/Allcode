<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function check(){
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var city=document.getElementById("city").value;
            var datas=$("#myform").serialize();
            
            $.ajax({
                // beforeSend:function(){
                //     alert('loder on');
                // },
                type:"POST",
                url:"submit_action.php",
                data:datas,
                success:function(response){
                    $(".success").html(response);
                },
                // error:function(){

                // },
                // complate:function(){
                //     alert('loder off');
                // }
            })
            return false;
        }
    </script>
</head>
<body>
    <div class="success" style="color-red">
</div>
    <form action="submit_action.php" method="post" id="myform">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="fname" required><br><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="lname" required><br>
        <select name="city" id="city" required>
            <option value="">select city</option>
            <option value="jaipur">jaipur</option>
            <option value="siker">siker</option>
            <option value="jhunjhunu">jhunjhunu</option>
            <option value="bissau">bissau</option>
        </select>
        <br>
        <!--<input type="file" name="photo" accept="image/jpeg">-->
        <br>
        <button type="submit" onclick="return check()">submit</button>

    
    </form>
</body>
</html>