<?php 


if(isset($_POST['btn_trans_item'])){

  $adminPass=$_POST['transAdminPass'];
  $RcvrName = $_POST['rcvrName'];
  $RcvrPos = $_POST['RcvrPos'];
  $TransDate = $_POST['transDate'];

  



  $sqlAdmin = "SELECT * FROM tbl_users WHERE username = '". $author."' AND password = '" . $adminPass . "' AND is_active = '1'";

  $result = mysqli_query($con,$sqlAdmin);
  $admin = mysqli_fetch_array($result);

  if($admin){




    $updateQuery = "UPDATE tbl_items SET is_available='0',is_transferred='1',status='Transfering',remarks = 'Waiting to Recieved' 
    WHERE ItemCode = '$itemCode'";

    
    if($con->query($updateQuery) === TRUE){

      $sql= "INSERT INTO tbl_history (ItemCode, receiverName, receiverPos, dateTrans, dateReceived, remarks)
      VALUES ('$itemCode',  '$RcvrName' , '$RcvrPos', '$TransDate', '-----','Pending')";

      if($con->query($sql) === TRUE){


       $sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode) VALUES ('$author','Transfer New Item', '$item_name', '$itemCode')";
       if($con->query($sqlactionlog)===TRUE){

         $header='<div class="modal-header bg-success">
         <h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
         </div>';
         $msg="TRANSFERING NEW ITEM SUCCESS!";
         $showModal = "true";  


       }else{
        $header='<div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
        </div>';
        $msg="ERROR SAVING ACTION LOG!";
        $showModal = "true";
      }

    }else{
      $header='<div class="modal-header bg-danger">
      <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
      </div>';
      $msg="ERROR TRANSFERING NEW ITEM! <br>".$itemCode ."<br>".$RcvrName ."<br>".$RcvrPos ."<br>".$TransDate ."";
      $showModal = "true";
    }


  }else{

   $header='<div class="modal-header bg-danger">
   <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
   </div>';
   $msg="ERROR UPDATING TRANSFER ITEM!";
   $showModal = "true";

 }

}else{

 $header='<div class="modal-header bg-danger">
 <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
 </div>';
 $msg="ADMIN PASSWORD NOT MATCHED!";
 $showModal = "true";
}

}

include 'ModalNotif.php';
?>
