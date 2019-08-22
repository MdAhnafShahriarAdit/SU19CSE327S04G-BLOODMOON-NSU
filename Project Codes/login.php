<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onine Blood Bank</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >

    <div class="header">
    <div class="logo">
              <h1><a href="index.php"><img src="Image/2.jpg" alt=""></a></h1>
            
            </div>
  </div>

    

<div class="container">
    


    <div class="header">
        <h2>Log In</h2>
    </div>

    <form action="registration.php" method="post">
        <center><img src="img/l2.png" alt="#" class="l1"></center>
        
        <div class="input-group">
            <label for="username">User Name : </label>
            <input type="text" name="username" required>
        </div>

       

         <div class="input-group">
            <label for="password">Password : </label>
            <input type="password" name="password_1" required>
        </div>

         

         

        <div class="input-group">
    <button type="submit" class="btn" name="login_user">Log In</button>
        </div>

        <p>Already a user <a href="registration.php"><b>Register Here</b></a></p>

    </form>

</div>


</body>
</html>