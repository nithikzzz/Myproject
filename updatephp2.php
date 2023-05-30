<html>
<head>
<title>Update existing data</title>
</head>
<body>
<table border='1'>
<?php
$xvregno=$_POST["vregno"];
$xvname=$_POST["vname"];
$xvmobile=$_POST["vmobile"];
$xvdept=$_POST["vdept"];
$xvgrade=$_POST["vgrade"];
$strquery="update instable set vname=:xvname, vmobile=:xvmobile, vdept=:xvdept , vgrade=:xvgrade where vregno=:xvregno";

$dsn = "mysql:dbname=jmj";
$username = "root";
$password = "";

$conn = new PDO( $dsn, $username, $password );

try{
$st = $conn->prepare($strquery);
	$st->bindValue( ":xvregno", $xvregno, PDO::PARAM_STR);
	$st->bindValue( ":xvname", $xvname, PDO::PARAM_STR);
	$st->bindValue( ":xvmobile", $xvmobile, PDO::PARAM_STR);
	$st->bindValue( ":xvdept", $xvdept, PDO::PARAM_STR);
        $st->bindValue( ":xvgrade", $xvgrade, PDO::PARAM_STR);
	$st->execute();
	echo "Record Updated";
	} catch (PDOException $e) {
		echo"Query failed : ", $e->getMessage();
}
?>
</table>
</body>
</html>
