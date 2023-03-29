<?php

if(isset($_POST['btn_update_item'])){

  $newItemName=$_POST['newItemName'];
  $newPropNumber=$_POST['newPropNumber'];
  $newClass=$_POST['newClass'];
  $newsofund=$_POST['newsofund'];
  $newDateAcq=$_POST['newDateAcq'];
  $newItemValue=$_POST['newItemValue'];


  // $header='<div class="modal-header bg-success">
  // <h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
  // </div>';
  // $msg="EDI WOW!";
  // $showModal = "true";

// echo '<script>alert("Welcome to Geeks for Geeks")</script>';

  $sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode) VALUES ('$author','UPDATE', '$item_name', '$itemCode')";

  if($con->query($sqlactionlog) === TRUE){

    $sqlupdate = "UPDATE tbl_items SET ItemName='$newItemName', PropertyNumber='$newPropNumber',
    Classification='$newClass',SourceOfFund='$newsofund',UnitValue='$newItemValue', DateAcquired='$newDateAcq' 
    WHERE ItemCode = '$itemCode'";

     if($con->query($sqlupdate) === TRUE){

       $header='<div class="modal-header bg-success">
         <h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
         </div>';
         $msg="UPDATING ITEM SUCCESS!";
         $showModal = "true";  

     }else{

        $header='<div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
        </div>';
        $msg="ERROR UPDATING ITEM!";
        $showModal = "true";

     }

  }else{

        $header='<div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
        </div>';
        $msg="ERROR SAVING ACTION LOG!";
        $showModal = "true";

  }




}
include 'ModalNotif.php';
?>
