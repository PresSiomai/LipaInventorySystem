<?php 

if(isset($_POST['btn_update_item_history_archive'])){

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

	$sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode) VALUES ('$author','UPDATE ACHIVE ITEM HISTORY', '$item_name', '$itemCode')";

	if($con->query($sqlactionlog) === TRUE){

		$sqlupdate = "UPDATE tbl_archive SET ItemName='$newItemName', PropertyNumber='$newPropNumber',
		Classification='$newClass', SourceOfFund='$newsofund', UnitValue='$newItemValue', DateAcquired='$newDateAcq' 
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




if(isset($_POST['btn_edit_item_archive'])){

	$adminPass=$_POST['hstryadminPass'];
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
		WHERE ItemCode = '$ItemCode'";

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


if(isset($_POST['btn_retrieve'])){


	

	$adminPass=$_POST['transAdminPass'];






	$sqlAdmin = "SELECT * FROM tbl_users WHERE username = '". $author."' AND password = '" . $adminPass . "' AND is_active = '1'";

	$result = mysqli_query($con,$sqlAdmin);
	$admin = mysqli_fetch_array($result);

	if($admin){

		$sqlArchive ="INSERT INTO tbl_items (ItemCode, ItemName, PropertyNumber, Classification, SourceOfFund, UnitValue, DateAcquired) SELECT ItemCode, ItemName, PropertyNumber, Classification, SourceOfFund, UnitValue, DateAcquired FROM tbl_archive WHERE ItemCode = '$ItemCode'";

		if($con->query($sqlArchive) === TRUE){

			$sqlactionlog = "INSERT INTO tbl_action_log(author,action,ItemName,ItemCode) VALUES ('$author','ITEM RETRIVE', '$item_name', '$itemCode')";

			if($con->query($sqlactionlog) === TRUE){

				$sqlDelete = "DELETE FROM tbl_archive WHERE ItemCode = '$ItemCode'";

				if($con->query($sqlDelete) === TRUE){

					$header='<div class="modal-header bg-success">
					<h5 class="modal-title" id="exampleModalLabel">SUCCESS</h5>
					</div>';
					$msg="THIS ITEM IS NOW AVAILABLE";
					$showModal = "true"; 

				}else{

					$header='<div class="modal-header bg-danger">
					<h5 class="modal-title" id="exampleModalLabel">ERROR!</h5>
					</div>';
					$msg="UPDATING ITEM FAILED!";
					$showModal = "true";

				}




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
			$msg="RETRIEVING ITEM FAILED!";
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


include 'modalNotif.php';


 ?>