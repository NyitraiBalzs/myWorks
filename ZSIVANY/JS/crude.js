 
// CRUD //
  $(document).ready(function(){

    $.get("crud_view.php", function(data){
        $("#table_content").html(data);
    });
    $("#link-add").hide();

    $("#show-add").click(function(){
        $("#link-add").slideDown(500);
        $("#show-add").hide();
    });

    $("#add").click(function(){
        let kategId = $('#kateg-id').val();
        let termek = $('#termek').val();
        let leiras = $('#leiras').val(); 
        let ar = $('#ar').val(); 
        $.ajax({
        url: "crud_insert.php",
        type: "POST",
    data: { 
           kategId: kategId,
           termek: termek, 
           leiras: leiras,
           ar: ar
         },
        success: function(data, status, xhr) {
        $('#kateg-id').val('');
        $('#termek').val('');
        $('#leiras').val('');
        $('#ar').val('');
        $.get("crud_insert.php", function(data) {
        $("#records_content").html(data);
        window.setTimeout('location.reload()', 1500)
        });
        $('#records_content').fadeOut(1100).html(data);
        },
        error: function() {
        $('#records_content').fadeIn(5000).html('<div class="text-center">ERROR here</div>');
        },
        beforeSend: function() {
        $('#records_content').fadeOut(1000).html('<div class="text-center">Loading...</div>');
        },
        complete: function() {
        $('#link-add').hide();
        $('#show-add').show(1000);
        }
        });
        });
  
});
