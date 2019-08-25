<html lang="en">
  <head>
    <title>View Request</title>
<?php include 'header.php'; ?>
</head>

<div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 900px; background-color:#c3e5eb;">
      <div class="content"><br>
<table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr> 

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
   <tr style="background-color:#6247b5" align="center" class="bold">            
             <td class="bold" align="center" style="color:#ffffff">Name</td><td align="center" style="color:#ffffff">Mobile</td><td align="center"style="color:#ffffff">Email</td><td align="center" style="color:#ffffff">Request ID</td><td align="center" style="color:#ffffff">Blood Quantity</td></tr>        
<?php

$cn=mysqli_connect("localhost","root","","test");
$s="select * from donated";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
  {
        echo"<tr><td align='center' style='color:#380B61'>$data[1]</td><td align='center' style='color:#380B61'>$data[2]</td><td align='center' style='color:#380B61'>$data[3]</td><td align='center' style='color:#380B61'>$data[4]</td><td align='center' style='color:#380B61'>$data[5]</td></tr>";
      }
      mysqli_close($cn);
      ?>


      </table>
    </nav>
  </body>
</body><br><br><br>
<?php include 'footer.php'; ?>


</html>             