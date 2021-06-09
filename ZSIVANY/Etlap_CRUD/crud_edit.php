 <?php
  require_once('../dbconn.php');
  $id = $_POST['id'];

  if (empty($id)) {
  ?><div class="text-center">no records found under this selection <a href="#" onclick="$('#link-add').hide();$('#show-add').show(700);">Hide this</a></div>
 <?php
    die();
  }

  $sql = "SELECT * FROM etelek Where ID=:ID Limit 1";
  $result = $db_conn->prepare($sql);
  $result->execute([
    'ID' => $id //itt kapja meg az id  értéket
  ]);
  $db_conn = NULL;
  foreach ($result as $row) {
  ?>
   <div id="edit-data" class="form-inline">
     <div class="form-group col-md-3">
       <div class="input-group-prepend">
         <label class="input-group-text" for="kateg-id">Kategória</label>
       </div>
       <select class="custom-select" id="kateg-id">

         <option value="<?php echo $row['ID_kateg']; ?>"><?php echo $row['ID_kateg']; ?></option>
         <option value="tojas">Tojás</option>
         <option value="napi_m">Napi Menü</option>
         <option value="ital">Ital</option>
         <option value="B_SZ">Bagel & Szendvics</option>
       </select>
     </div>
     <div class="form-group col-md-2">
       <input type="text" name="termek" value="<?php echo $row['megnevezes']; ?>" id="termek" placeholder="Termék" class="form-control" required />
     </div>
     <div class="form-group col-md-2">
       <input type="text" id="leiras" name="leiras" value="<?php echo $row['leiras']; ?>" placeholder="Leirás" class="form-control" required />
     </div>
     <div class="form-group col-md-2">
       <input type="text" id="ar" name="ar " placeholder="Ár" value="<?php echo $row['ar']; ?>" class="form-control" required />
     </div>
     <div class="form-group col-md-3">
       <button type="button" class="btn btn-primary update mt-n3" id="<?php echo $row['ID'];?>" name="add">Update Record</button>
       <button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
     </div>
   <?php
  }
    ?>

   <script type="text/javascript">
     $('.update').click(function() {
       let id = $(this).attr('id');
       let kategId = $('#kateg-id').val();
       let termek = $('#termek').val();
       let leiras = $('#leiras').val();
       let ar = $('#ar').val();

       $.ajax({
         url: "crud_update.php",
         type: "POST",
         data: {
           id: id,
           kategId: kategId,
           termek: termek,
           leiras: leiras,
           ar: ar
         },
         success: function(data, status, xhr) {
           
           $('#kateg-id').val('tojas');
           $('#termek').val('');
           $('#leiras').val('');
           $('#ar').val('');
           $('#records_content').fadeOut(12000).html(data);
           $.get("crud_view.php", function(html) {
             $("#table_content").html(html);
           });
           $('#records_content').fadeOut(12000).html(data);
         },
         complete: function() {
           $('#link-add').hide();
           $('#show-add').show(700);
         }
       });
     }); 
   </script>