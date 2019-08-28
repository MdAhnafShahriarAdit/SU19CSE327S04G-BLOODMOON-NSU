<?php include 'header.php'; ?>
<?php include('DBconnection.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from requests where req_id='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}
?>

<form method="post">
<table border="0" align="center" width="500" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd" font="10">DELETE REQUEST</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select Request ID</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from requests";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);

	while($data=mysqli_fetch_array($result))
	{
			echo "<option value=$data[0]>$data[0]</option>";		
	}
	mysqli_close($cn);
?>
</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from requests where req_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	$data=mysqli_fetch_array($result);
	$req_id=$data[0];
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	$bgroup=$data[5];
	$email=$data[6];
	$reqdate=$data[7];
	$detail=$data[8];		
	mysqli_close($cn);
}
?>
</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"></td></tr>
</table>
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>
   
</body>
</html>

<!Taken help from w3school and youtube !>
