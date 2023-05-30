<html>
<head>
<title>Inserting new data</title>
</head>
<body>
<table border='1'>

<?php
$xvregno = $_POST["vregno"];
$xvname = $_POST["vname"];
$xvmobile = $_POST["vmobile"];
$xvdept = $_POST["vdept"];
$xvgrade = $_POST["vgrade"];

$dsn = "mysql:dbname=jmj";
$username = "root";
$password = "";

$conn = new PDO( $dsn, $username, $password );

$strquery = "insert into instable values (:xvregno, :xvname, :xvmobile, :xvdept, :xvgrade)";

try {
	$st = $conn->prepare($strquery);
	$st->bindValue( ":xvregno", $xvregno, PDO::PARAM_STR );
	$st->bindValue( ":xvname", $xvname, PDO::PARAM_STR  );
	$st->bindValue( ":xvmobile", $xvmobile, PDO::PARAM_STR  );
	$st->bindValue( ":xvdept", $xvdept, PDO::PARAM_STR  );
	$st->bindValue( ":xvgrade", $xvgrade, PDO::PARAM_STR  );
	$st->execute();
} 
catch (PDOException $e) {
echo "Query failed : ", $e->getMessage();
}
echo " Row inserted";
echo "<br>";
echo "<br>";

?>
</body>
</table>
</html>
