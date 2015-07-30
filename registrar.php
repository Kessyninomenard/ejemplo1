<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysql_select_db("juntacentral", $conn);
   
   $fecha_hora = date('y-d-m');  
   $nombre = $_POST["Nombre"]; 
   $Codigocedula=$_POST['Codigocedula'];
   $apellido = $_POST["apellido"];  
   $nacionalidad = $_POST["nacionalidad"];  
   $occupacion = $_POST["occupacion"];  
   $sexo = $_POST["sexo"]; 
   $EstadoCivil = $_POST["ec"];  
   $TipoDeSangre = $_POST["TiposDeSangre"]; 
   $FechaDeNacimiento= $_POST["fdn"]; 
   $LugarDeNacimiento = $_POST["ldn"];  
   $ciudad = $_POST["ciudad"];
   $sector= $_POST["sector"];  
   $casa = $_POST["casa"];  
    
   
$sql = "INSERT INTO formulario (Nombre, Codigocedula,Apellido, Nacionalidad, Occupacion, Sexo, EstadoCivil, TipoDeSangre, FechaDeNacimiento, LugarDeNacimiento, Ciudad, Sector, NumeroCasa,FechaFormulario)
VALUES ('$nombre', '$Codigocedula' ,'$apellido',' $nacionalidad', '$occupacion ', '$sexo',' $EstadoCivil ','$TipoDeSangre','$FechaDeNacimiento', '$LugarDeNacimiento','$ciudad','$sector','$casa','$fecha_hora')";
header("location:registro1.php");
$res=mysql_query($sql,$conn) or die(mysql_error());
mysql_close($conn);
?>