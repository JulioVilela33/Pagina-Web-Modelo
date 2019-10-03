<?php/*



  if(isset($_POST['send'])):

    //$text = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $accType = array("png", "jpeg", "jpg" , "doc", "pdf" , "xps" );
    $exte = pathinfo($_FILES['files'] ['name'], PATHINFO_EXTENSION);

    if(in_array($exte, $accType)):
      $folder = "files/";
      $tempo = $_FILES['files'] ['tmp_name'];
      $rename = uniqid().".$exte";

      move_uploaded_file($tempo, $folder.$rename);
    else:
      $message = "Formato invalido!";
    endif;  

  endif;  
?>

<!DOCTYPE html> 
  <html lang = "pt - br">    
       <head>
           
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width">
           <title>Upaload Test</title>
                      
       </head>
       
       <body>
           
               <form  action= "form.php"  method="POST" enctype="multipart/form-data">
                   
                   
                       <input type="file" name="files"><br><br>

                       <button style="" type="submit" name="send"> Enviar</button> 
                  
               </form>
               
       </body>
  </html>   