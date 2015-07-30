<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title>Junta Central Electoral</title>
	<style type="text/css">
	body { 
    background: url(Img/jc.jpg) no-repeat center center fixed; 
     background-size: cover;
}
	</style>
</head>
<body>
   <div class="container">
    <?php include("menu.php");?>
   
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Img/image1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="Img/image2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="Img/image3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="Img/Image4.jpeg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
     <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div>
    <?php include("pie.php");?>
 </div>
</body>
</html>