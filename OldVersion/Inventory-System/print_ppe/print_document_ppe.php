<div class="modal fade" id="ape-modal" tabindex="-1" >
  <form method="POST" accept-charset="UTF-8">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #45cece;">
          <center>

            <h5 class="modal-title" id="exampleModalLabel" style="color:#ffff">PRINT DOCUMENT - APE</h5>
          </center>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Received from:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newPropNumber" value="<?php echo $property_num;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Position:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newClass" value="<?php echo $classification;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Received by:</label>
            <div class="col-sm">
             <input type="text" class="form-control" name="newClass" value="<?php echo $classification;?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="static" class="col-sm-4 col-form-label">Position</label>
          <div class="col-sm">
            <input type="text" class="form-control" name="newClass" value="<?php echo $classification;?>">
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success" name="btn_update_item_history">Print</button>
        </div>
      </div>
    </div>
  </form>
</div>