
<?php
        
    require_once 'bd_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
   
   <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <title>Pagina Demostração</title>
        
    </head>

    <body>
        
        <table class="table">

            <h3 style="margin-left: 500px;">Informações</h3><br><br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contato</th>
      <th scope="col">Arquivo</th>
    </tr>
  </thead>
  <tbody>
<?php
  
  $sql = "SELECT * FROM usuarios";
  $save = mysqli_query($connect, $sql); 
  while($data = mysqli_fetch_array($save)):
?>
    <tr>
      <th scope="row"><?php  echo $data['id']; ?></th>
      <td><?php  echo $data['login']; ?></td>
      <td><?php  echo $data['email']; ?></td>
      <td><?php  echo $data['files']; ?></td> <?php //echo '<img src="/files/'.$data['files'].'"/>' ?>
    </tr>
  </tbody>

<?php
    endwhile;
?>

</table>

    </body>