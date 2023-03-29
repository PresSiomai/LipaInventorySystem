<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <!--  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->

      <?php echo $header?>
      <div class="modal-body">
        <center>
         <strong><h4><?php echo $msg;?></h4></strong>
       </center>
     </div>
     <div class="modal-footer">
       <!--  <button onclick="location.href = 'index.php';" type="button" class="btn btn-info"data-dismiss="modal"><i class="fa fa-arrow-left"></i>&nbsp BACK</a> -->
        
          <a href="../view_items"> class="btn btn-info btn-sm" name="itemCode" value="<?php echo $ItemCode;?>" style=" width: auto;"><i class="fa fa-arrow-left"></i>&nbsp BACK</a>
        
     <!--    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
  </div>
</div>
</div>