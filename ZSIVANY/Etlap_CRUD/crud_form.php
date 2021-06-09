 <div class="container" style="padding-top: 25px;">
   <div class="row">
     <div class="col-md-12">
       <div class="pull-right">
         <button class="btn btn-success" id="show-add">Add New Record</button>
       </div>
       <div id="link-add" class="form-inline">
         <div class="form-group col-md-3">
           <div class="input-group-prepend">
             <label class="input-group-text" for="kateg-id">Kategória</label>
           </div>
           <select class="custom-select" id="kateg-id">

             <option value="tojas">Tojás</option>
             <option value="napi_m">Napi Menü</option>
             <option value="ital">Ital</option>
             <option value="B_SZ">Bagel & Szendvics</option>
           </select>
         </div>
         <div class="form-group col-md-2">
           <input type="text" name="termek" id="termek" placeholder="Termék" class="form-control" required />
         </div>
         <div class="form-group col-md-2">
           <input type="text" id="leiras" name="leiras" placeholder="Leirás" class="form-control" required />
         </div>
         <div class="form-group col-md-2">
           <input type="text" id="ar" name="ar " placeholder="Ár" class="form-control" required />
         </div>
         <div class="form-group col-md-3">
           <button type="button" class="btn btn-primary" id="add" name="add">Add Record</button>
           <button type="button" href="javascript:void(0);" class="btn btn-default" id="cancel" name="add" onclick="$('#link-add').slideUp(400);$('#show-add').show(600);">Cancel</button>
         </div>
       </div>
     </div>

   </div>

 </div>
 <div class="row ">
   <div class="col-12">
     <div id="records_content"></div>
     <br>
     <div class="col-md-offset-1 col-md-10" id="table_content"></div>
   </div>
 </div>

 <script src="../JS/crud.js"></script>