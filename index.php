<?php
session_start();
if(isset($_SESSION['user'])){
header("Location: inicio/");
}
else{
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="icon.png">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href=".css/bootstrap.min.css"/>
	<link href=".css/signin.css" rel="stylesheet"/>
	<script type="text/javascript" src=".js/jquery.min.js"></script>
	<script type="text/javascript" src=".js/bootstrap.js"></script>
<style>
.navbar-static-top{
margin-top:-40px;
}
</style>
  </head>

  <body>
  <nav class="navbar navbar-default navbar-static-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Nucleo</a>
    </div>
  </nav>
    <div class="container">
	<form class="form-signin">
        <h2 class="form-signin-heading">Iniciar sesión</h2>
        <label for="user" class="sr-only">Usuario</label>
        <input type="text" id="user" class="form-control" placeholder="Usuario" required autofocus>
        <label for="pass" class="sr-only">Contraseña</label>
        <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-danger btn-block" id="entrar">Entrar</button>
      </form>
    </div>
  </body>
<script>
$("#entrar").click(function (){
var datos={
	'user':$("#user").val(),
	'pass':$("#pass").val()
};
$.ajax({
	url:'.php/login.php',
	type:'post',
	data:datos,
	success:function(res){
if(res=='ok'){
window.location.href = 'inicio/';
}
}
});
});

$('input[type=text]').on('keydown', function(e) {
    if (e.which == 13) {
        e.preventDefault();
	$('#pass').focus();
    }
});
</script>
</html>
