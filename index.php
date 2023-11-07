<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            font-size: medium;
            font-family: 'Courier New', Courier, monospace;
        }
        input,select{
            width:400px;
        }
    </style>
</head>
<body bgcolor="aliceblue">
    <H3 ALIGN="CENTER" style="color: brown;">SELLER INFORMATION</H3>

   <div class="form">
    <form action="connect.php" method="post">
        <label for="fname"> <B> Name</B></label><BR>
        <input type="text" id="fname" name="fname" value=" "><br>
        <label for="lname"><B>Last Name</B></label><BR>
        <input type="text" id="lname" name="lname" value=" "><br>
        <label for="phone"> <B> Phone-number</B></label><BR>
            <input type="text" id="phone" name="Phone" value=" "><br>
            <label for="email"><B>E-mail</B></label><BR>
            <input type="text" id="email" name="email" value=" "><br><pre></pre>
            <form>
                <label FOR="gender"><b>Gender</b></label><br>
                <SELECT id="gender" name="gender">
                    <option value="Male">male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</optgroup>
                    
                </SELECT>
                    
            </form><br>
            <label for="product"> <B> Product-Name</B></label><BR>
                <input type="text" id="Product" name="Product" value=" "><br><pre></pre>
                <form>
                    <label for="about"> <B> About produt</B></label><BR>
                    <textarea name="message" rows="20" cols="100">
                        
                    </textarea><br>
                    <input type="submit" onclick="done()">
                
                    </form>


    </form>
    <script>
        function done()
        {
            alert("sucessfully submitted")
        }
    </script>
   </div>
    
</body>
</html>