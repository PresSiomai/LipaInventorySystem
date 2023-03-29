
<!-- ==================================== -->


<div class="modal fade" id="edit-file<?php echo $id; ?>">
  <form method="POST" accept-charset="UTF-8">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #45cece;">
          <center>

            <h5 class="modal-title" id="exampleModalLabel" style="color:#ffff">Edit File</h5>
          </center>
        </div>
        <div class="modal-body">

          <h3 style="text-align: center !important;"><?php echo $item_name;?></h3>


          <div style="text-align:center;">
            <span style="font-size: 8pt" >Item Code: </span>
            <p class="text-success" style="margin-bottom: -5px;"><?php echo $ItemCode;?></p>            
          </div>

          <hr style="margin-bottom: 5px; width: 50%;">

          <div style="text-align:center;">
            <span style="font-size: 8pt">Property Number: </span>
            <p class="text-success" style="margin-bottom: -5px;"><?php echo $property_num;?></p>
          </div>

          <hr style="margin-bottom: 5px; width: 50%;">

          <div style="text-align:center;">
            <span style="font-size: 8pt">Classification: </span>
            <p class="text-success" style="margin-bottom: -5px;"><?php echo $classification;?></p>
          </div>


          <hr>



          <div class="form-group row" >
            <label for="static" class="col-sm-4 col-form-label">Receiver Name:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="NewRcvrName" value="<?php echo $rcvrName; ?>"required>
              <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">
            </div>
          </div>

          <div class="form-group row" >
            <label for="static" class="col-sm-4 col-form-label">Position:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newRcvrPos"value="<?php echo $rcvrPos; ?>"required>
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Date Transfer:</label>
            <div class="col-sm">
              <input type="date" class="form-control" name="newDateAcq"value="<?php echo $dateTrans; ?>"required>
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Date Received:</label>
            <div class="col-sm">
              <input type="date" class="form-control" name="newDateTrans" value="<?php echo $rcvdDate; ?>"required>
            </div>
          </div>
          <hr>


          <div style="text-align:center; margin-bottom: 20px;">
            <span style="font-size: 12pt" class="text-success"> To confirm this action enter admin password</span>
            <input type="password" class="form-control" name="hstryadminPass" style="text-align: center;" placeholder="Enter Admin Password!" required>         
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" name="btn_edit_item">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>


<div class="modal fade" id="adminPass" tabindex="-1" role="dialog" aria-hidden="true">
 <form method="POST" accept-charset="UTF-8">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #dc3545; color: #fff;">

        <h5 class="modal-title"
        style="margin: auto;"
        >UNSERVICEABLE ITEM!</h5>
      <!--   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->

      </div>

      <div class="modal-body">
        <div class="form-group">
          <center>
            <h5 class="text-danger">To confirm the transaction, <br>
              Please enter admin password!   

            </h5>
          </center>
        </div>
        <hr>
        <div class="form-group">
          <label class="col-form-label">Admin Password</label>
          <input type="password" class="form-control" name="transAdminPass" required>
        </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="btn_history_item">Confirm Password</button>
      </div>





    </div>
  </div>

</form>
</div>



<!-- modal edit -->



<div class="modal fade" id="edit-item" tabindex="-1" >
  <form method="POST" accept-charset="UTF-8">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #45cece;">
          <center>

            <h5 class="modal-title" id="exampleModalLabel" style="color:#ffff">Edit File</h5>
          </center>
        </div>
        <div class="modal-body">

          <label>Item Name</label>
          <input type="text" class="form-control" name="newItemName" value="<?php echo $item_name;?>" style="font-size: 16pt;">
          <p class="text-success" style="font-style: italic; font-size: 10pt;"><?php echo $ItemCode;?></p>
          <hr>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Property # :</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newPropNumber" value="<?php echo $property_num;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Classification:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newClass" value="<?php echo $classification;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Source of fund:</label>
            <div class="col-sm">
             <select class="form-control" placeholder="" name="newsofund"  id="sofund" required>
              <option value="<?php echo $sof; ?> selected"><?php echo $sof; ?></option>
              <option value="1">Data 1</option>
              <option value="2">Data 2</option>
              <option value="3">Data 3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="static" class="col-sm-4 col-form-label">Date Aquired:</label>
          <div class="col-sm">
            <input type="date" class="form-control" name="newDateAcq" value="<?php echo $date_acq;?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="static" class="col-sm-4 col-form-label">Item Value:</label>
          <div class="col-sm">
            <input type="text" class="form-control" name="newItemValue" onkeypress="return isNumber(event)" value="<?php echo $unit_value;?>">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="btn_update_item_history">Save changes</button>
        </div>
      </div>
    </div>
  </form>
</div>





<!-- end modal edit -->