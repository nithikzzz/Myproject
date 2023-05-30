<html>
<body>
<?php
$xvregno=$_POST["vregno"];
$conn=new PDO("mysql:dbname=jmj","root","");
$sql=" delete from instable where vregno='$xvregno'";
try{	
	$conn->exec($sql);
	
}
catch(PDOException $e)
{
echo "Query failed:",$e->getMessage();
}
echo "record deleted";

?>
</body>
</html>
