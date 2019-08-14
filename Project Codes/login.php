<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
</head>
<body>
    

<div class="container">
    
    <div class="header">
        <h2>Log In</h2>
    </div>

    <form action="registration.php" method="post">
        
        <div>
            <label for="username">User Name : </label>
            <input type="text" name="username"  required>
        </div>

       

         <div>
            <label for="password">Password : </label>
            <input type="password" name="password_1" required>
        </div>

         

         

        <button type="submit" name="login_user">Log In</button>

        <p>Already a user <a href="registration.php"><b>Register Here</b></a></p>

    </form>

</div>


</body>
</html>