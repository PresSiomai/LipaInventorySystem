
<?php   
if(isset($_POST['btn_edit_item'])){

	$adminPass=$_POST['hstryadminPass'];
	$id=$_POST['id'];
	$NewRcvrName = $_POST['NewRcvrName'];
	$newRcvrPos = $_POST['newRcvrPos'];
	$newDateAcq = $_POST['newDateAcq'];
	$newDateTrans = $_POST['newDateTrans'];


	$sqlAdmin = "SELECT * FROM tbl_users WHERE username = '". $author."' AND password = '" . $adminPass . "' AND is_active = '1'";

	$result = mysqli_query($con,$sqlAdmin);
	$admin = mysqli_fetch_array($result);

	if($admin){

		$updateQuery = "UPDATE tbl_history SET receiverName='$NewRcvrName',receiverPos='$newRcvrPos',dateTrans='$newDateAcq',
		dateReceived='$newDateTrans', remarks = 'TRANSFERRED' 
		WHERE id = '$id'";

		if($con->query($updateQuery) === TRUE){

			$sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode)
			VALUES ('$author','Update Item', '$item_name', '$itemCode')";

			if($con->query($sqlactionlog)===TRUE){

				$header='<div class="modal-header bg-success">
				<h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
				</div>';
				$msg="UPDATING ITEM SUCCESS!";
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
			$msg="UPDATING FAILED!";
			$showModal = "true";
		}


	}else{
		$header='<div class="modal-header bg-danger">
		<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
		</div>';
		$msg="ADMIN PASSWORD NOT MATCHED!";
		$showModal = "true";
	}



	
// echo '<script>alert("Welcome to Geeks for Geeks")</script>';


}




if(isset($_POST['btn_update_item_history'])){

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
		WHERE ItemCode = '$ItemCode'";

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

if(isset($_POST['btn_history_item'])){

	$adminPass=$_POST['transAdminPass'];






	$sqlAdmin = "SELECT * FROM tbl_users WHERE username = '". $author."' AND password = '" . $adminPass . "' AND is_active = '1'";

	$result = mysqli_query($con,$sqlAdmin);
	$admin = mysqli_fetch_array($result);

	if($admin){

		$sqlArchive ="INSERT INTO tbl_archive (ItemCode, ItemName, PropertyNumber, Classification, SourceOfFund, UnitValue, DateAcquired) SELECT ItemCode, ItemName, PropertyNumber, Classification, SourceOfFund, UnitValue, DateAcquired FROM tbl_items WHERE ItemCode = '$ItemCode'";

		if($con->query($sqlArchive) === TRUE){

			$sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode) VALUES ('$author','MARK UNSERVICEABLE', '$item_name', '$itemCode')";

			if($con->query($sqlactionlog) === TRUE){

				$sqlDelete = "DELETE FROM tbl_items WHERE ItemCode = '$ItemCode'";

				if($con->query($sqlDelete) === TRUE){

					$header='<div class="modal-header bg-success">
					<h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
					</div>';
					$msg="THIS ITEM IS NOW UNSERVICEABLE!";
					$showModal2 = "true"; 

				}else{

					$header='<div class="modal-header bg-danger">
					<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
					</div>';
					$msg="UPDATING ITEM FAILED!";
					$showModal2 = "true";

				}




			}else{
				$header='<div class="modal-header bg-danger">
				<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
				</div>';
				$msg="ERROR SAVING ACTION LOG!";
				$showModal2 = "true";
			}



		}else{

			$header='<div class="modal-header bg-danger">
			<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
			</div>';
			$msg="MARK AS UNSERVICEABLE FAILED!";
			$showModal2 = "true";

		}
	}else{
		$header='<div class="modal-header bg-danger">
		<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
		</div>';
		$msg="ADMIN PASSWORD NOT MATCHED!";
		$showModal2 = "true";
	}
}

include 'ModalNotifDelete.php';
include 'ModalNotif.php';

?>




