<?php

require_once 'bd_connect.php' ;

if(isset($_POST['send'])):

  $accType = array("png", "jpeg", "jpg" , "doc", "pdf" , "xps" );

  $login = mysqli_escape_string($connect, $_POST['login']);
  $pass = mysqli_escape_string($connect, $_POST['pass']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $exte = pathinfo($_FILES['files'] ['name'], PATHINFO_EXTENSION);

  
    

    if(in_array($exte, $accType)):
      $folder = "files/";
      $tempo = $_FILES['files'] ['tmp_name'];
      $rename = uniqid().".$exte";

      move_uploaded_file($tempo, $folder.$rename);
    else:
      $message = "Formato invalido!";
    endif;  

  


  $sql = "INSERT INTO usuarios(login, pass, email, files) VALUES ('$login','$pass','$email', '$rename')";


  $save = mysqli_query($connect,$sql);

  mysqli_close($connect);
  
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

               <form action= "cadastro.php" method="POST" enctype="multipart/form-data" >

                       <label for="name"></label> Login<br>
                       <input style="width:400px; type="text" name="login" ><br>

                       <label for="name"></label> Senha<br>
                       <input style="width:400px; type="password" name="pass" ><br>
                       
                       <label for="email"></label>E-mail<br>
                       <input style="width:400px; type="email"  name="email"><br><br>

                       <input type="file" name="files"><br><br>

                       <button style="" type="submit" name="send"> Enviar</button> 
                   
               </form>
               
       </body>
  </html>   