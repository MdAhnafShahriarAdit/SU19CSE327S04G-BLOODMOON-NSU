<! doctype html>
<html lang="en">
 <head>
 	<title>Online Blood Bank</title>

 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><div class="logo">
      <h1><a href="index.php"><img src="img/1lo.jpg" height="150" width="150" ; alt=""></a></h1>
    </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
 	<div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 900px; background-color:#ffffff;">
      <div class="content"><br>
<body>
<h1 align="center">Request for blood</h1>
<table width="90%" style="margin: 0 auto; border:3px solid;text-align:center">
<tr><td class="lefttd" align="center"> Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>
 <br><br>
<tr><td class="lefttd" align="center">Gender:</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female">Female</td></tr>
 <br><br>
 <tr><td class="lefttd" align="center">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
 <br><br>
<tr><td class="lefttd" align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
<br><br>
<tr><td class="lefttd" align="center">Blood group:</td><td><input name="b1" type="radio" value="A+" checked="checked">A+<input name="b1" type="radio" value="A-">A-<input name="b1" type="radio" value="B+">B+<input name="b1" type="radio" value="B-">B-<input name="b1" type="radio" value="AB+">AB+<input name="b1" type="radio" value="AB-">AB-<input name="b1" type="radio" value="O+">O+<input name="b1" type="radio" value="O-">O-</td></tr>
<br><br>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">E-Mail</td><td><input type="email" name="t5" required="required" /></td></tr>
 <tr><td>&nbsp;</td></tr>
 <br><br>
<tr><td class="lefttd" align="center">Till Required Date</td><td>
<select name="month">
<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="1">MARCH</option>
<option value="1">APRIL</option>
<option value="1">MAY</option>
<option value="1">JUNE</option>
<option value="1">JULY</option>
<option value="1">AUG</option>
<option value="1">SEPT</option>
<option value="1">OCT</option>
<option value="1">NOV</option>
<option value="1">DEC</option>
</select>
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<input type="text" name="year" style=" width:50px"  /></td></tr><br><br>
 <tr><td>&nbsp;</td></tr>
<tr><td class="lefttd" align="center">Detail</td><td><textarea name="t7"></textarea></td></tr>
 <tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td>
<input type="submit" value="Submit" name="sbmt" style="border:0px; background:red; width:100px; height:30px; border-radius:10px 1px 10px; box-shadow:1px 1px 5px black; color:black; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
 

 <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
  <div class="f_nav">
    <ul>
      <li class="active"><a href="index.php">Home</a></li>      
       <li ><a href="login.php">Log in</a></li>
        <li ><a href="registration.php">Become a donor</a></li>
        <li ><a href="send_req.php">Send Request for blood</a></li>
        <li ><a href="view_req.php">View Request</a></li>
        <li ><a href="search.php">Search for blood</a></li>
        <li ><a href="contact_us.php">Contact Us</a></li>
        <li ><a href="about_us.php">About Us</a></li>
      
            </ul>
  </div>
    <div class="copy">
      <p class="title"><br><br>©CSE327 Group Blood Moon  </p>
    </div>
  <div class="clear"></div>
</div>
</div>
</div>




</body>

</html>

</html>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","test");
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}

?>

<?php
if(isset($_POST["sbmt"])) 
{
			
		
	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requests(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["b1"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";

			
			
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

<style>
  
.ftr-bg{
  background: #E9DCC9;
  border-top: 1px solid rgba(214, 195, 167, 0.34);
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
.footer{
  padding:3% 0;
}
.f_nav{
  float:left;
}
.f_nav li{
  display: inline-block;
}
.f_nav li.active a{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
}
.f_nav li a{
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  display:block;
  padding: 8px 18px;
  color: #805752;
  font-size: 0.8125em;
}
.f_nav li a:hover{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
  -webkit-transition: 0.9s;
  -moz-transition: 0.9s;
  -o-transition: 0.9s;
}







</style>		
	



