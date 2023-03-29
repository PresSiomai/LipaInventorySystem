
<style>
  .modal-header{
    background-color: #45cece;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
  }

  .modal-title{
    font-weight: bold;
    font-family: Poppins;
    color: #fff;
    margin: auto;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;

  }

  .itemName{
    font-weight: bold;
    color: #626867;
    font-size: 26px;
    padding: 20px;
    margin-top: -20px;
    text-align:  center;
  }

  .itemInfo{
    display: flex;
    width: auto;
    margin-top: -20px;
  }

  .itemLabel{
    float: left;
    text-align: right; 
    font-size: 16px; 
    color: #626867;
    width: 50%;
  }

  .itemData{
    float: right;
    text-align: left; 
    font-size: 16px; 
    color: #626867;
    width: 50%;
  }

  .itemLabel h5{
    padding: 5px, 10px;
    margin: 10px 10px;
  }

  .itemData h5{
    color: ;
    padding: 5px, 10px;
    margin: 10px 10px;
  }

</style>

<div class="modal fade" id="transModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius:10px;">
      <div class="modal-header">
        <h4 class="modal-title" >TRANSFER ITEM</h4>
      </div>
      <div class="modal-body">
        <h3 class="itemName"><?php echo $item_name; ?></h3>

        <div class="itemInfo">
          <div class="itemLabel">
            <h5>
              Code number :
            </h5>
            <h5>
              Property Number :
            </h5>
            <h5>
              Classification :
            </h5>
            
            <h5>
              Item value :
            </h5>
            
            <h5>
              Date aquired :
            </h5>



          </div>
          <div class="itemData">
            <h5 class="text-success">
              <?php echo $itemCode;?>
            </h5>
            <h5 class="text-success">
              <?php echo $property_num;?>
            </h5>
            <h5 class="text-success">
              <?php echo $classification;?>
            </h5>

            <h5 class="text-success">
              <i class="fa-regular fa-peso-sign"></i><?php echo  number_format($unit_value,"2"); ?>
            </h5>
            <h5 class="text-success" >
              <?php echo $date_acq;?>
            </h5>
          </div>
        </div>
        <hr style="display: block; ">

        <form method="POST" accept-charset="UTF-8">
          <input type="hidden" name="itemCodeTrans" value="<?php echo $itemCode;?>">
          <div class="form-group">
            <label for="receiver-name" class="col-form-label">Recipient</label>
            <input type="text" class="form-control" id="receiver-name" name="receiverName" >


            <label for="position" class="col-form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" >


            <label for="date-transfer" class="col-form-label">Date Transfer</label>
            <input type="date" class="form-control" id="date-transfer" name="dateTransfer" >
          </div>
          <hr style="display: block; ">

          <div class="form-group">
            <label for="admin-pass" class="col-form-label">Enter Admin Password</label>
            <input type="text" class="form-control" id="admin-pass" name="adminPassword" required>
          
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="TransferBtn">Confirm Transfer</button>
        </div>
        </form>
      </div>
    </div>
  </div>

