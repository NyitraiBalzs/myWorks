<?php  
$msg = "";
 
if(isset($_POST["login"])){
  include("../dbconn.php");
  $username = $_POST["username"];
  $password = $_POST["password"];
 
  $sql = "SELECT  name, password
          FROM admin
          WHERE name = '$username' AND password = '$password'
          LIMIT 1";

  $result = $db_conn->query($sql);
  $count = $result->rowCount();
  
    if($count > 0){
      foreach($result as $data){
        if(($data["password"] === $password ) && ($data["name"] === $username )){
          session_start();
          $_SESSION["logged_in"] = 'loggedIn';
          $msg = "Ügyesen bejelentkeztél!!";
        }else 
          $msg = "Sajnos nem jók a bejelntkezési adatok!";
        
      }
    } else 
      $msg = "Nincs ilyen felhasználó";
      print $msg;
      
     
}else 
  $msg = "Acces Denied";

