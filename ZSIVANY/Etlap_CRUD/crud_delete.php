<?php 
session_start();
 if(isset($_SESSION['logged_in'])){
   require_once("../dbconn.php");
 $id=$_POST["id"];
 $sql="DELETE FROM etelek WHERE ID =:ID Limit 1";
 $result=$db_conn->prepare($sql);
 $result->execute([
     'ID'=>$id
 ]);
 $db_conn=NULL;
}
?>
 
 