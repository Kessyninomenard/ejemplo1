<!DOCTYPE html>
<html>
<head>
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
	<br>
 <form method="post"> 
	<table>
  <tr>
    <td class="td1">Codigo Cedula:</td>
    <td><input type="text" name="Codigocedula" oninput="validacion('Codigocedula')" required/></td>   
    <td></td>
  </tr>
  <tr>
    <td class="td1">Nombre:</td>
    <td><input type="text" name="Nombre" oninput="validacion('Nombre')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Apellido:</td>
    <td><input type="text" name="apellido" oninput="validacion('apellido')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Nacionalidad:</td>
    <td><input type="text" name="nacionalidad" oninput="validacion('nacionalidad')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Occupacion:</td>
    <td><input type="text" name="occupacion" oninput="validacion('occupacion')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Sexo:</td>
    <td><input type="radio" name="sexo" value="M">Masulino
         <input type="radio" name="sexo" value="F">Feminino	
    <td>
  </tr>
  <tr>
    <td class="td1">Estado Civil:</td>
    <td><input type="radio" name="ec" value="Casado">Casado
         <input type="radio" name="ec" value="Soltero">Soltero
    <td>
  </tr>
  </tr>
  <tr>
    <td class="td1">Tipos De Sangre:</td>
    <td>
    <select name="TiposDeSangre">
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
     </select>
    <td>
    </td>
    <tr>
    <td class="td1">Fecha De Nacimiento:</td>
    <td><input type="date" name="fdn" oninput="validacion('fdn')" required/></td>		
    <td></td>
  </tr>
   <tr>
    <td class="td1">Lugar De Nacimiento:</td>
    <td><input type="text" name="ldn" oninput="validacion('ldn')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Ciudad:</td>
    <td><input type="text" name="ciudad" oninput="validacion('ciudad')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Sector:</td>
    <td><input type="text" name="sector" oninput="validacion('sector')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1"># Casa:</td>
    <td><input type="text" name="casa" oninput="validacion('casa')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td class="td1">Telefono:</td>
    <td><input type="text" name="telefono" oninput="validacion('telefono')" required/></td>		
    <td></td>
  </tr>
  <tr>
    <td><input type="submit" value="Enviar" class="botton" name="enviar" onclick="this.form.action = 'registrar.php'"></td>
    <td><input type="Reset" value="Limpiar Campos" class="botton" name="limpiar"></td>		
    
  </tr>
</table>
</form>
	<?php include("pie.php");?>
</div>
</body>
</html>