<?php       

// $con=mysqli_connect ("localhost", "root", "", "db_lipa_is") or die ('I cannot connect to the database because: ' . mysql_error());
$con=mysqli_connect ("localhost", "root", "", "db_lipa_temp") or die ('I cannot connect to the database because: ' . mysql_error());
date_default_timezone_set("Asia/Manila");
$filter_Result = mysqli_query($con, 'db_lipa_is');



?>