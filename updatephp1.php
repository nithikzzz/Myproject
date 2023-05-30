<html>
<head>
<title>Student record</title>
</head>
<body>
<table border='1'>
<?php
$xvregno = $_POST["vregno"];
$username = "root";
$password = "";
$dsn = "mysql:dbname=jmj";
$conn = new PDO( $dsn, $username, $password );
$query = "select * from instable where vregno = '$xvregno'";
$rows = $conn->query($query);
foreach ( $rows as $row ) {
	$xvregno=$row["vregno"];
	$xvname=$row["vname"];
	$xvmobile=$row["vmobile"];
	$xvdept=$row["vdept"];
        $xvgrade=$row["vgrade"];
	}
?>
<font face="Verdana, Arial">
<table cellpadding="10" cellspacing="10" align="center">
<tbody>
<tr><td colspan="3" align="center">
<strong>Enter Student Detail</strong>
<br>
</td></tr>
<form name="update" method="post" action="updatephp2.php">
<tr>
<td>
<br>

<tr><td>  Regn. No.   </td><td> ::</td><td>  <input name="vregno" value="<?php echo $xvregno; ?>" maxlength="5" type="text" readonly></td></tr>

<tr><td>  Student Name</td><td> ::</td><td>  <input name="vname" value="<?php echo $xvname; ?>" maxlength="30" type="text"></td></tr>

<tr><td>  Mobile No.  </td><td> ::</td><td>  <input name="vmobile" value="<?php echo $xvmobile; ?>" maxlength="10" type="text"></td></tr>

<tr><td>  Department  </td><td> ::</td><td>  <input name="vdept" value="<?php echo $xvdept; ?>" maxlength="10" type="text"></td></tr>

<tr><td>  Grade       </td><td> :: </td><td> <input name="vgrade" value="<?php echo $xvgrade; ?>" maxlength="1" type="text"></td></tr>

</div>
</td></tr>
<tr>
<td colspan="3" height="52" align="center">
<input name="Submit1" value="Update" type="submit"> &nbsp; &nbsp; &nbsp
<input name="Submit2" value="Reset" type="reset">

</td>
</tr>
</font>
</tbody>
</table>
</form>
</body>
</html>
