
<?php include('header.php'); ?>

    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:0px; margin-bottom:125px; background-color:#f000; border:2px solid #f000; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
            <img src="img/c1.jpg" height="100px" width="300px" align="center" />
  
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle">E-Mail</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle">Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle">Massage</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>

</div>
</div>
    
      </div>
</form>
        </div>
         </div> 
         </div>
        

<?php include 'DBconnection.php'; ?>
<?php
if(isset($_POST["sbmt"])) 
{
  
  $cn=makeconnection();     

      $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
      
      
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


 


</body>
<?php include('footer.php'); ?>
</html>


