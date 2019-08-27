<?php include 'header.php'; ?>
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
        
