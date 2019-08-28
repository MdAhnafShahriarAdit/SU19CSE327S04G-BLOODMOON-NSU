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