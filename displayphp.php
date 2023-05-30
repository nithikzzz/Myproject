<html>

<head>
<title>Statement of Marks</title>
</head>

<body>
<table border='1'>

<?php
$xvregno = $_POST["vregno"];
$xvregno = "%" . $xvregno . "%";
$dsn = "mysql:dbname=jmj";
$username = "root";
$password = "";
$conn = new PDO( $dsn, $username, $password );

$strquery = "select * from instable where vregno like '$xvregno'";
$rows = $conn->query( $strquery );
echo "<br>";
echo "<br>";
echo "<tr>";
echo "<th>Register No.</th><th>Student Name</th><th>Grade.</th>" ;
echo "</tr>";
if (is_array($rows) || is_object($rows))
{
foreach ( $rows as $row ) {
	echo "<tr>","<td>", $row["vregno"], "</td>","<td>", $row["vname"], "</td>","<td>", $row["vgrade"], "<br>" ;
	}

}

?>
</body>
</table>
</html>
