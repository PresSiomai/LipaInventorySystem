<?php


if(!empty($_POST["username"]) && !empty($_POST["password"])){

	$username = $_POST["username"];
	$password = $_POST["password"];
	$sqlAdmin = "SELECT * FROM tbl_users WHERE username = '". $username ."' AND password = '" . $password . "' AND is_active = '1'";

	$result = mysqli_query($con,$sqlAdmin);
	$admin = mysqli_fetch_array($result);

	if($admin){

		$_SESSION["admin"] = $username;?>
		
		<div class="alert alert-success" role="alert" 
		style="width: 70%; 
		margin-top: 20px !important;
		height: 10%; 
		text-align: center; 
		margin: auto; 
		opacity: 80%; 
		z-index: 100;">
		Login Success!
	</div>

	<?php

	header("Refresh: 1; dashboard/");

}else{
	?>
	<div class="alert alert-danger" role="alert" 
	style="width: 70%; 
	margin-top: 20px !important;
	height: 10%; 
	text-align: center; 
	margin: auto; 
	opacity: 80%; 
	z-index: 100;">
	Invalid Data! Please Try Again!
</div>

<?php

header("Refresh 0.5; #");



}

}



?>