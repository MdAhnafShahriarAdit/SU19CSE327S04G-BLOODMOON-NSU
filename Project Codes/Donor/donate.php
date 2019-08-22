<?php include 'header.php'; ?>
<body>
  <div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 700px; ">
      <div class="content"><br>

    <table width="100%" style="margin: 2 auto; border:3px solid;text-align:center">
    <tr><td class="lefttd"><h6>Your Name:</h6></td><td><input type="text" name="t1" required="required" title="Please enter your name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Mobile no:</h6></td><td><input type="number" name="t2" required="required" pattern="[0-9]{10,11}" title="Please youe valied mobile no"/></td></tr><br>
    <tr><td class="lefttd"><h6>Blood Group:</h6></td><td><input type="text" name="t3" required="required" title="Please enter your Blood group"/></td></tr><br>
    <tr><td class="lefttd"><h6>Request ID:</h6></td><td><input type="number" name="t4" required="required" title="Please enter request id whom you want to donate"/></td></tr><br>
    

    <tr><td></td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background: blue; width:125px; height:40px; box-shadow:5px 5px 10px black; color:black; font-weight:bold; font-size:20px;"></td></tr></table>

<?php
if(isset($_POST["sbmt"])) 
{
    $cn=mysqli_connect("localhost","root","","");

      $s="insert into donated(name,mobile,blood_group,req_id) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] ."')";
      
  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>alert('Sending request Confermed');</script>";
  }
  else
  {echo "<script>alert('Sending request Failed');</script>";
  }
    
    } 

?>

</body>
</html>
<?php include 'footer.php'; ?>