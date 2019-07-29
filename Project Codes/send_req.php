<! doctype html>
<html lang="en">
 <head>
 	<title>Online Blood Bank</title>
 </head>
 <body>
 	
<?php include ('header.php'); ?>
<p><h1 align="center">Request for blood</h1></p>
<br><br>

<tr><td class="lefttd" align="center"> Name:&nbsp;&nbsp;</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>
 <br><br>
<tr><td class="lefttd" align="center">Gender:&nbsp;</td><td><input name="r1" type="radio" value="male" checked="checked">Male&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="female">Female&nbsp;&nbsp;&nbsp;</td></tr>
 <br><br>
 <tr><td class="lefttd" align="center">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
 <br><br>
<tr><td class="lefttd" align="center">Mobile No</td><td><input type="number" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
<br><br>
<tr><td class="lefttd" align="center">Blood group:&nbsp;</td><td><input name="r1" type="radio" value="A+" checked="checked">A+&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="A-">A-&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="B+">B+&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="B-">B-&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="AB+">AB+&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="AB-">AB-&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="O+">O+&nbsp;&nbsp;&nbsp;<input name="r1" type="radio" value="O-">O-&nbsp;&nbsp;&nbsp;</td></tr>
<br><br>

 </body>


<?php include ('footer.php'); ?>
</html>