<!DOCTYPE html>
<html>
<head>
	<title>Junta Central Electoral</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
     <script src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>Junta Central Electoral</title>
	<style type="text/css">
	body{ 
    background: url(Img/jc.jpg) no-repeat center center fixed; 
    background-size: cover;
}
	</style>
	<script>
	  function validacion(id){
	  	va elem=document.getElementById(id);
	  	if(elem.chekValidity())
	  		elem.style.borderColor="blue";
	  	else
	  		elem.style.borderColor="red";
	  }
	</script>
</head>
<body>
<div class="container">
	<?php include("menu.php");?>
	<form action="verificar.php" method="get">
	 <table>
	 	<tr>
       		<td class="td1">Codigo Cedula:</td>
       		<td><input type="text" name="Codigo" placeholder="escribir su codigo de cedulacion" oninput="validacion('codigo')" required/></td>	
       		<td><input type="submit" name="verificar" value="Verificar" class="botton"/></td>	
	 	</tr>
	 </table>
	</form>
	<?php include("pie.php");?>
</div>

</body>
</html>