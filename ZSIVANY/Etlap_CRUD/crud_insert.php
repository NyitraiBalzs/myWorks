<?php
require_once('../dbconn.php');
if (!empty($_POST['kategId']) && !empty($_POST['termek']) && !empty($_POST['leiras']) && !empty($_POST['ar'])) {

    $kategId = $_POST['kategId'];
    $termek = $_POST['termek'];
    $leiras = $_POST['leiras'];
    $ar = $_POST['ar'];

    $sql = $db_conn->prepare("INSERT INTO `etelek`(`ID_kateg`, `megnevezes`, `ar`, `leiras`) 
                                VALUES(:ID_kateg,:megnevezes,:ar,:leiras)");

    $sql->bindParam(':ID_kateg', $kategId);
    $sql->bindParam(':megnevezes', $termek);
    $sql->bindParam(':ar', $ar);
    $sql->bindParam(':leiras', $leiras);
    $sql->execute();
   
}
