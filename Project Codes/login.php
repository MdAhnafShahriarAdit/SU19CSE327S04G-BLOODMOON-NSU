<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>

    
   

  </head>
  <body style="background-color:">

   <div class="header">
    <h2>Online Blood Bank </h2>
  </div>
  <div class="container">
<div>
  <div class="logo">
      <h1><a href="login.php"><img src="img/1lo.jpg" height="150" width="150" ; alt=""></a></h1>
    </div>
  <p>
    <img src="img/b1.jpg" alt="">
  </p>

</div>

  
  
  <div style="height:00px;">
     <form method="post" action="login.php" enctype="multipart/form-data" style="width: 1235px; height: 700px;">
       
      <div class="content">
        <br>
      <table width="100%" style="margin: 0 auto; border:0px solid;text-align:center">

      <tr><td class="lefttd"><h3>E-Mail:</h3></td><td><input type="email" name="t1" required="required" title="Please enter your email"/></td></tr>
      <tr><td class="lefttd"><h3>Password:</h3></td><td><input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>

      <tr><td>&nbsp;</td><td><input type="submit" value="Sign In" name="sbmt" style="border:0px; background: red; width:125px; height:40px; box-shadow:5px 5px 10px black; color:white; font-weight:bold; font-size:20px;"></td></tr></table><br><br><br><br><br><br>

        <font size="5" align="center">&nbsp;&nbsp;Not a Donar?<a href="registration.php" style="color:red">&nbsp;Click here</a>&nbsp;to register.</font>
        <br><br>
</div>
</div>
</nav>
</body>
</body>


<?php include 'DBconnection.php'; ?>

<?php
$_SESSION['donorstatus']="";
if(isset($_POST["sbmt"])) 
{
    
    $cn=makeconnection();           
            $s="select *from donorregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
            
    $q=mysqli_query($cn,$s);
    $r=mysqli_num_rows($q);
    mysqli_close($cn);
    if($r>0)
    {
        $_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";
//header("location:donor/index.php");
echo "<script>location.replace('Donor/index.php');</script>";
    }
    else
    {
        echo "<script>alert('Invalid User Name Or Password');</script>";
    }
        
        }   
?> 
</html>
