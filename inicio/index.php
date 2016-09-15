<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['puesto']=='adm'){
header("Location: ../admin/");
}
}
else{
header("Location: ../");
}
?>
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../icon.png">
	<title>Nucleo</title>
	<link rel="stylesheet" href="../.css/bootstrap.min.css"/>
	<link href="../.css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src="../.js/jquery.min.js"></script>
	<script type="text/javascript" src="../.js/bootstrap.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
  </head>

  <body>
  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Nucleo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href=".">Inicio</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carga<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../carga/masiva">Masiva</a></li>
                <li><a href="../carga/manual">Manual</a></li>
              </ul></li> 
        <li><a href="#">Carteras</a></li>
        <li><a href="#">Ingreso manual</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="logout"><a href="#"><span class="glyphicon glyphicon-log-out"></span>Salir</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
	<div class="jumbotron text-center">
  		<h1>Nucleo</h1>
  		<p>En el menú, escoja su opcion.</p> 
	</div>
    </div>
  </body>
<script>
$("#logout").click(function (){
$.ajax({
	url:'../.php/logout.php',
	type:'post',
	success:function(res){
if(res=='ok'){
$(location).attr('href', '../');
}
}
});
});
</script>
</html>
