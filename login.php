<?php

require_once 'bd_connect.php';

/*session_start();*/

if(isset($_GET['logar'])):

	$id = $_GET['id'];//filter_input($_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
	$senha =  $_GET['senha'];//filter_input($_POST,'senha', FILTER_SANITIZE_NUMBER_INT);

	if(empty($id) || empty($senha)):
		echo "Os campos precisa ser preenchidos corretamente";
    else:
    	$sql = "SELECT login FROM usuarios WHERE login = '$id'";
    	$save = mysqli_query($connect, $sql);

    	if(mysqli_num_rows($save) > 0):
    		/*$sql = "SELECT * FROM usuarios WHERE login  = '$id' AND pass ='$senha'";
    		$save = mysqli_query($connect, $sql);

    		/*if(mysqli_num_rows($save) == 1):
    			/*$data = mysqli_fetch_array($save);
    			$_SESSION['logado'] = true;*/
    			header('location: user.php');
    		/*else:
    			echo "login e senha não correspondem";
    		endif;*/
    	else:
    		echo "usuario inexistente";
    	endif;
    endif;
endif;


?>


<!DOCTYPE html>
<html lang = "pt - br">
       
       <head>
           
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width">
           <title> teste </title>
                      
       </head>
       
       <body>
               <form action= "login.php" method="GET" >
                       
                       <label for="name"></label> Login<br>
                       <input style="width:400px; type="text" name="id" ><br>

                       <label for="name"></label> Senha<br>
                       <input style="width:400px; type="password" name="senha" ><br><br>
                       
                       <button style="" type="submit" name="logar"> Logar</button><a href="cadastro.php">Cadastre</a>
      
               </form>
           
       </body>
   