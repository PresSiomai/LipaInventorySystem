<?php


if(isset($_POST['btn_add_item'])){

  $NewItemCode = $_POST['ItemCode'];
  $author = $_SESSION['admin'];
  $item_name = $_POST['itemName'];
  $property_num = $_POST['propertyNum'];
  $classification = $_POST['classification'];
  $sof = $_POST['sofund'];
  $unit_value = $_POST['unitValue'];
  $date_acq = $_POST['dateAcq'];
  

    // echo '<script>alert("'.$NewItemCode.'\n'.$author.'\n'.$item_name.'\n'.$property_num.'\n'.$classification.'\n'.$sof.'\n'.$unit_value.'\n'.$date_acq.'")</script>';




  $sql ="INSERT INTO tbl_items (ItemCode, ItemName, PropertyNumber, Classification, SourceOfFund, UnitValue, DateAcquired, status, remarks)
  VALUES ('$NewItemCode', '$item_name','$property_num', '$classification', '$sof','$unit_value','$date_acq','Available', 'New Item')";

  if($con->query($sql) === TRUE){

    $action_log ="INSERT INTO tbl_action_log(author, action, itemName, ItemCode) VALUES ('$author', 'ADD ITEM', '$item_name', '$NewItemCode')";


    if($con->query($action_log) === TRUE){

     $header='<div class="modal-header bg-success">
     <h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
     </div>';
     $msg="NEW ITEM SAVED!";
     $showModal = "true";  
   }
   else{
     $header='<div class="modal-header bg-danger">
     <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
     </div>';
     $msg="ERROR SAVING ACTION LOG!";
     $showModal = "true";
   }

 } else {
  $header='<div class="modal-header bg-danger">
  <h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
  </div>';
  $msg="ERROR SAVING NEW ITEM!";
  $showModal = "true";
}



}
include 'ModalNotif.php';

// if(isset($_POST['TransferBtn'])){

//   $adminPass = $_POST['adminPassword'];
//   $author = $_SESSION['admin'];

//   $receiver_name = $_POST['receiverName'];
//   $position = $_POST['position'];
//   $dateTransfer = $_POST['dateTransfer'];
//   $adminPass = $_POST['adminPassword'];




//   $sqlAdmin = "SELECT * FROM tbl_users WHERE username ='". $author ."'";

//   $resultAdmin = mysqli_query($con,$sqlAdmin);
//   $row = mysqli_fetch_array($resultAdmin);
//   $admin_pass = $row['password'];


//   if($admin_pass === $adminPass){
//     echo '<script>alert("Admin Name: '.$author.'\n password input: '.$adminPass.'\n Admin password:'.$admin_pass.'");</script>';
//   }else{

//       $msg='SOMETHING WENT WRONG, PLEASE TRY AGAIN!';
//       include 'Modals/modalSuccess.php';
//       // echo '<script>alert("Password not Matched!\nAdmin Name: '.$author.'\n password input: '.$adminPass.'\n Admin password:'.$admin_pass.'");</script>';


//   }
// }







?>