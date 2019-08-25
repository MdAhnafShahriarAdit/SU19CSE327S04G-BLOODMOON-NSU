<html lang="en">
  <head>
    <title>View Request</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" style="color: #1a1919"><h1>Online blood donation</h1></a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a class="nav-link" href="index.php">Home &ensp;<span class="sr-only"></span></a></li>
        <a class="nav-link" href="login.php">Log in&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="registration.php">Become a donor&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="send_req.php">Send Request for blood&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="view_req.php">View Request&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="search.php">Search for blood&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="contact_us.php">Contact Us&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="about_us.php">About Us&ensp;&ensp;&emsp;&emsp;<span class="sr-only">(current)</span></a></li>
      </ul>
</div>
</nav>
</head>
</html>
<div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 900px; background-color:#c3e5eb;">
      <div class="content"><br>
  <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr> 

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:#66dea4" align="center" class="bold">            
             <td class="bold" align="center" style="color:#B40404">ID</td><td align="center" style="color:#B40404">Name</td><td align="center"style="color:#B40404">Mobile</td><td align="center" style="color:#B40404">Blood group</td>
        </tr>
        <?php

$cn=mysqli_connect("localhost","root","","test");
$s="select * from requests";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
  {
        echo"<tr><td align='center' style='color:#380B61'>$data[0]</td><td align='center' style='color:#380B61'>$data[1]</td><td align='center' style='color:#380B61'>$data[4]</td><td align='center' style='color:#380B61'>$data[5]</td></tr>";
      }
      mysqli_close($cn);
      ?>


      </table>
    </nav>
  </body>
</body><br><br><br>
<?php include 'footer.php'; ?>


</html>