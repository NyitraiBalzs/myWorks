<?php 

 require_once('../dbconn.php');
 if (!empty($_POST['kategId']) && !empty($_POST['termek']) && !empty($_POST['leiras']) && !empty($_POST['ar'])) {

 $id = $_POST['id'];
 $kategId = $_POST['kategId'];
 $termek = $_POST['termek'];
 $leiras = $_POST['leiras'];
 $ar = $_POST['ar'];
  

 if(!empty($kategId) && !empty($termek) && !empty($leiras) && !empty($ar) && !empty($id) ){
    $sql = "UPDATE etelek SET ID_kateg=:kategId, megnevezes=:termek, leiras=:leiras, ar=:ar WHERE ID=:id";
    $result = $db_conn->prepare($sql);
    $result->bindParam(':kategId',$kategId);
    $result->bindParam(':termek',$termek);
    $result->bindParam(':leiras',$leiras);
    $result->bindParam(':ar',$ar);
    $result->bindParam(':id',$id);
    
    $ok=$result->execute();
    $db_conn=null;

    if($ok){
        print '<div class="col-md-offset-4 col-md-5 text-center alert alert-success"> Sikeresen Javitva!!</div>';
    }else  

    exit("Nemsikerult a javítás!!");  
 }   
}
