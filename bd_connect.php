<?php
// conexão banco de dados

$servername = "localhost";
$username = "root";
$passo = "";
$bdname = "cadastro";

$connect = mysqli_connect($servername, $username, $passo, $bdname)or die(mysqli_error());

?>
