<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juntacentral";

// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
else{
if (!isset($_GET['verificar']))
{
	echo "Debe especificar un codigo de cedula";
	exit;
}
	   mysql_select_db("juntacentral", $conn);
		$sql="SELECT *FROM cedula WHERE CodigoCedula =$_GET[Codigo]";
		$result=mysql_query($sql,$conn) or die("Error en: $sql: " . mysql_error());
		if ($row= mysql_fetch_array($result)) {

			header("location:registro.php");
			
	}
		else
		{
			header("location:noregistrado.php");
		}
	}
	 
mysql_close($conn);
?>