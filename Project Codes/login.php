<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    
    <?php include 'header.php'; ?>

  </head>
    
  <div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 600px;">
      <div class="content">
        <br>
      <table width="100%" style="margin: 0 auto; border:3px solid;text-align:center">

      <tr><td class="lefttd"><h3>E-Mail:</h3></td><td><input type="email" name="t1" required="required" title="Please enter your email"/></td></tr>
      <tr><td class="lefttd"><h3>Password:</h3></td><td><input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>

      <tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:#2D7FDE; width:125px; height:40px;  box-shadow:2px 2px 10px black; color:#E2ECF8; font-weight:bold; font-size:20px;"></td></tr><br>

        <font size="5" align="center">&nbsp;&nbsp;Not a donor?<a href="registration.php" style="color:red">&nbsp;Click here</a>&nbsp;to register.</font>
        <br><br>
