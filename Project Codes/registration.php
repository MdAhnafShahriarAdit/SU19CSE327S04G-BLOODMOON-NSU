<!doctype html>
<html lang="en">
  <head>
    <title>Became a Donor</title>
   
  </head>

  <div class="header">
    <h2>Online Blood Bank</h2>
  </div>

  <div class="logo">
      <h1><a href="registration.php"><img src="img/1lo.jpg" height="150" width="150" ; alt=""></a></h1>
    </div>

    </div>
  <p>
    <img src="Image/AboutUsImage.jpg" alt="">
  </p>

</div>


  <div style="">
     <form method="post" enctype="multipart/form-data" style="width: 1235px; height: ;">
      
      <center><h1>Join Us!</h1></center>
      <table width="50%" style=";text-align:center">
    <tr><td class="lefttd"><h6>Your Name:</h6></td><td><input type="text" name="t1" required="required" title="Please enter your first name"/></td></tr>
    <tr><td class="lefttd" align="center"><h6>Gender:</h6></td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
    <tr><td class="lefttd" align="center"><h6>Age:</h6></td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
    
    <tr><td class="lefttd"><h6>Mobile no:</h6></td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="Please youe valied mobile no"/></td></tr>
    <tr><td class="lefttd"><h6>Address:</h6></td><td><input type="text" name="t4" required="required" title="Please enter your address"/></td></tr>
    <tr><td class="lefttd"><h6>Email:</h6></td><td><input type="email" name="t5" required="required" title="Please enter your email address"/></td></tr>
    <tr><td class="lefttd"><h6>Password:</h6></td><td><input type="password" name="t6" required="required" pattern="[a-zA-Z0-9]{5,15}" title="Please enter a password in the range of 5-15 to make it strong"/></td></tr>
    <tr><td class="lefttd"><h6>Confirm Password:</h6></td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9]{5,15}" title="Confirm it again" /></td></tr>

    <tr><td>&nbsp;</td><td><input type="submit" value="Sign Up" name="sbmt" style="border:0px; background: red; width:125px; height:40px; box-shadow:5px 5px 10px black; color:white; font-weight:bold; font-size:20px;"></td></tr></table><br><br><br><br><br><br>


     <font size="5" align="center">&nbsp;&nbsp;Already a Member?<a href="login.php" style="color:red">&nbsp;Click here</a>&nbsp;to Sign In.</font>
        <br><br>

</div>
</form>
</div>
</nav>
</body>
</body>


<?php include 'DBconnection.php'; ?>

<?php
if(isset($_POST["sbmt"])) 
{
        $cn=makeconnection();
            $s="insert into donorregistration(name,gender,age,bgroup,mobile,address,email,pwd) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["b1"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t7"] ."')";
    
    $q=mysqli_query($cn,$s);
    mysqli_close($cn);
    if($q>0)
  {
  echo "<script>alert('Record Save');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }
    
    } 
?> 
</html>