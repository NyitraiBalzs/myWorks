

 <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Karla:ital@0;1&family=Work+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="CSS/utilityes.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/etlap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
  crossorigin="anonymous" />

    <style>
.navbar a{
  color: #0D0D0D;
}



</style>
 
<?php
include('navbar.php');

 
include_once('dbconn.php');

$etlapSQL = "SELECT * FROM  etelek
ORDER BY ID_kateg";
$result = $db_conn->query($etlapSQL);
$count = $result->rowCount();
if($count > 0){
  


      $old_id="";
      
      foreach($result as $etlapData){;
        $img=['B_SZ','ital','napi_m','tojas'];
        $megnevezes = $etlapData['megnevezes'];
        $ar = $etlapData['ar'];
        $leiras = $etlapData['leiras'];
      if($old_id != $etlapData['ID_kateg'] ){
        $old_id=$etlapData['ID_kateg'];
          if($img= $old_id){ 
          print '</div>';  
          print "<div class='IMG' id='$img'><img src='ETLAP_img/$img.png'></div>";
          print '<div class="etlapGrid container">';
          
        }
       }
     
       $display='';
       $display.='<div class="etlapCard">';
       $display.="<h4>$megnevezes<div class='line'></div><span class='ar'>$ar.-</span></h4>";
       $display.="<p class='leiras'>$leiras</p>";
       $display.="</div>";
       
       print $display;

     }
    }   
       print '</div>';
      include('footer.php');
    
?>
 