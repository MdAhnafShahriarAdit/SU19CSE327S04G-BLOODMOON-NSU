<?php include 'header.php'; ?>

<div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 900px; background-color:#ffffff;">
      <div class="content"><br>
  <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr> 

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:#7180f5" align="center" class="bold">            
     <td class="bold" align="center" style="color:#B40404">Name</td><td align="center" style="color:#B40404">Gender</td><td align="center"style="color:#B40404">Age</td><td align="center" style="color:#B40404">Blood Group</td><td align="center"style="color:#B40404">Mobile</td></tr>  
     
<?php
$cn=mysqli_connect("localhost","root","","test");
$s="select * from donorregistration";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);             