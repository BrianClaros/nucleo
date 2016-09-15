<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$mysqli = new mysqli("localhost", "root", "p", "nucleo");
if ($result = $mysqli->query("SELECT * FROM usuarios WHERE user='$user' AND pass='$pass' LIMIT 1")) {
$rows = $result->num_rows;
if($rows!=0){
session_start();
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
$_SESSION['puesto']=$row[3];
session_close();
echo 'ok';
}else{
echo 'error';
}
$result->close();
}
$mysqli->close();
?>

