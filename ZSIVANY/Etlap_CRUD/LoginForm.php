<?php
  
session_start();

if(!isset($_SESSION["logged_in"])){
  $logged = false;
  print '<div class="alert alert-primary" role="alert">
  Jelentkezz Be!
</div>';
}else {$logged = true;
print "<div class='alert alert-success' role='alert'>
Sikeresen Bejelentkeztél!
</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Csak az ÁDINAK HALO </title>
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Karla:ital@0;1&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../Etlap_CRUD/Etlap_crud.css">
  <script src="../JS/jquery-3.5.1.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    
      <button id="showBtn">Bejelentkezés</button>

      <form class="login-form" method="POST">
        <label >A NEVED ÁDIKA</label>
        <input type="text" id="user-name">
        <label >ÉS A FINOM KIS JELSZAVAD</label>
        <input type="password" id="password">
        <button id="login" type="button">Lessgo</button>
      </form>
      
      <div id="message"></div>

    
    
  
  <?php
   
  if($logged != false){
    include('crud_form.php');
    print "<a href='logout.php' class='btn btn-dark my-3'>Kijelentkezés</a>";
  } 
  ?>
 


  </div>
<script> 
/* LOGIN AJAX */

$(document).ready(function(){
  $("#login").on("click", function(){
    $.post("../Etlap_CRUD/login.php",
    {
      username:$("#user-name").val(),
      password:$("#password").val(),
      login:"Ok"
    }, function(data){
       $("#message").html("<h3>"+data+"</h3>"); 
       $('#message').fadeOut(1500)
       window.setTimeout('location.reload()', 1500)     				               
    });
  });
   
});
/* UI animations */
let showBtn = document.getElementById('showBtn');
    let loginForm = document.querySelector('.login-form');
    showBtn.onclick = function(){
      loginForm.classList.toggle('fade-in');
    }
</script>
</body>

</html>