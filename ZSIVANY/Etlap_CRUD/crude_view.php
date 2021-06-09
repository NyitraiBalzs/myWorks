<?php
 require_once('../dbconn.php');
 $sql="SELECT * FROM etelek ORDER BY ID_kateg DESC";
 $result=$db_conn->query($sql);
?>
<table class="container table table-bordered my-3">
<tr class="info">
    <th>ID</th>
    <th>Kategória</th>
    <th>Termék</th>
    <th>Leírás</th>
    <th>Ár</th>
    <th>Acction</th>
</tr>
<?php 
    foreach($result as $record){
        print '<tr>';
        print '<td>'.$record["ID"].'</td>';
        print '<td>'.$record["ID_kateg"].'</td>';
        print '<td>'.$record["megnevezes"].'</td>';
        print '<td>'.$record["leiras"].'</td>';
        print '<td>'.$record["ar"].'</td>';
        print '<td><button id="'.$record["ID"].'" class="edit btn-block btn-sm btn-info">Edit</button> <button id="'.$record["ID"].'" class="del btn-block btn-sm btn-danger">Delete</button></td>';
        print '</tr>';
    }

 


?>
</table>

<script>
 //DELETE
 
 $('.del').click(function() {
    let ok = confirm("Biztosan törölni akarod?");
    if (ok) {
      let id = $(this).attr('id');
      $.post("crud_delete.php", {
        id: id
      }, function(data, status) {
        console.log(data)
        $("#records_content").fadeOut(1500).html(data);
      });
      $.get("crud_view.php", function(data) {
        $("#table_content").html(data);
        window.location.reload()
      });
    }
  }); 

  //EDIT

  $('.edit').click(function() {
    let id = $(this).attr('id');
    
    $("#show-add").hide();
    $.post("crud_edit.php", {
      id: id
    }, function(data, status) {
      $("#link-add").html(data);
      $("#link-add").show(500);
    });

  }); 
</script>