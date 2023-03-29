<?php
session_start();
include '../connection.php';
$author = $_SESSION["admin"];

$msg="";
$header="";

$itemCode = $_GET['itemCode'];

$sql = "SELECT * FROM tbl_items WHERE ItemCode = '".$itemCode."'";
$res_data = $con->query($sql);
// $row = mysqli_fetch_array($res_data)
$row = $res_data->fetch_assoc();

$id = $row['id'];
$item_name = $row['ItemName'];
$property_num = $row['PropertyNumber'];
$classification = $row['Classification'];
$sof = $row['SourceOfFund'];
$unit_value = $row['UnitValue'];
$date_acq = $row['DateAcquired'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
   .line1 {width:80%; background: #afafaf;}

 </style>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Inventory-System-Add-Items</title>

 <!-- Google Font: Source Sans Pro -->
 <script type="text/javascript" src="js/scripts.js"></script>
 <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- JQVMap -->
 <!-- Theme style -->
 <link rel="stylesheet" href="../dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
 <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="../css/style.css">
 <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
 <style type="text/css">

   .back-btn{
    border-radius: 7px;
    width: auto;
    font-size: 14px;
    position: relative;
  }

</style>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

   <?php include '../navbar.php';?>

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #343434;">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #343434;">
      <!-- Sidebar user panel (optional) -->

      <div class="image">
        <img src="../Lipa_City_Seal.svg" width="110" alt="User Image" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 10px;">   </div>
        <div class="info" style="color: #afafaf; font-family: Poppins; text-align: center;">
          <a href="#" class="d-block">INVENTORY SYSTEM</a>
          <hr style="width:80%; background: #afafaf; margin-bottom: 40px; height: 30%;">
          
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2" >
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
            <a href="../dashboard" class="nav-link">
              <span class="iconify" data-icon="ic:round-dashboard" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

              <p>
                DASHBOARD
              </p>
            </a>
          </li>

          <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
            <a href="#" class="nav-link active" style="background-color: #670001;">
             <span class="iconify" data-icon="charm:layout-list" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
             <p>
              ITEMS
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview" style="color: #afafaf; font-family: Poppins;">
            <li class="nav-item">
              <a href="../view_items" class="nav-link">

                <p>View Items</p>
              </a>
            </li>
            <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
              <a href="../add_items" class="nav-link">

                <p>Add Items</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
          <a href="../print-documents" class="nav-link">
            <span class="iconify" data-icon="fa:print" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

            <p>
              PRINT DOCUMENTS
            </p>
          </a>
        </li>

        <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
          <a href="../unserviseable-items" class="nav-link">
           <span class="iconify" data-icon="mdi:laptop-off" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
           <p>
             UNSERVICEABLE ITEMS
           </p>
         </a>
       </li>

       <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
        <a href="../activity-log" class="nav-link">
          <span class="iconify" data-icon="radix-icons:activity-log" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>

          <p>
           ACTIVITY LOG
         </p>
       </a>
     </li>


   </ul>
 </nav>
 <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #3e3e3e;">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
       <div class="col-sm-6" style="margin-top: 10px;" >
        <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;VIEW ITEM</h1>
        <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
      </div><!-- /.col -->

    </div>
  </div><!-- /.container-fluid -->
</section>



<!-- Main content -->
<section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; ">

  <div class="view-body">

    <div class="trans-content">
      <div class="trans-text">

        <div class="transfer-item-name">
          <h2>
            <?php echo $item_name;?>
            &nbsp
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-file" ><i class="fa fa-edit"></i>  &nbsp Edit File</button>

          </h2>

        </div>

        <div class="trans-data">
         <div class="trans-item-info"> 

          <div class="item-label">
            <h5>Code Number : </h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $itemCode;?></h5>
          </div>  
        </div>

        <div class="trans-item-info"> 
          <div class="item-label">
            <h5>Property Number : </h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $property_num;?></h5>
          </div>  
        </div>

        <div class="trans-item-info"> 
          <div class="item-label">
            <h5>Classification :</h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $classification;?></h5>
          </div>  
        </div>

        <div class="trans-item-info"> 
          <div class="item-label">
            <h5>Source of fund :</h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $sof;?></h5>
          </div>  
        </div>

        <div class="trans-item-info"> 
          <div class="item-label">
            <h5>Date Acquired :</h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $date_acq;?></h5>
          </div>  
        </div>

        <div class="trans-item-info"> 
          <div class="item-label">
            <h5>Total Value :</h5>
          </div>           
          <div class="item-data">
            <h5 class="text-success"><?php echo $unit_value;?></h5>
          </div>  
        </div>

        <hr style="
        margin-left:5%;
        margin-top: 20px; 
        height: 2px; width: 98%;" >
      </div><!-- trans-text -->

      <div class="trans-item-info" style=" margin-bottom: 50px; margin-top: 30px;">
        <div style="width:50%">
          <button onclick="history.back()" class="btn btn-danger" ><i class="fa fa-arrow-left"></i>  &nbsp BACK</button>
          

        </div>
        <div style="width:50%;">
          <div style="float: right;">
            <form action="../transfer" method="GET">
              <button class="btn btn-primary" name="itemCode" value="<?php echo $itemCode;?>">
                <i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp TRANSFER ITEM
              </button>
            </form>
            
          </div>
        </div>
      </div>
    </div><!-- trans-data -->





    <div class="trans-qr-content">
      <div class="qrImage">
       <img src="https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl=<?php echo $itemCode?>&choe=UTF-8" class="form-control" id="" placeholder="" />
     </div>
     <div class="qr-label" style="padding: 5px 5px;">
      <svg class="barcode"
      jsbarcode-format="auto"
      jsbarcode-value="<?php echo $itemCode?>"
      jsbarcode-textmargin="0"
      jsbarcode-fontoptions="bold">
    </svg>

  </div>   
</div>

</div><!-- trans-content -->
</div><!-- transfer-body -->




<!-- /.container-fluid -->
<div class="modal fade" id="edit-file" tabindex="-1" role="dialog">
  <form method="POST" accept-charset="UTF-8">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #45cece;">
          <center>

            <h5 class="modal-title" id="exampleModalLabel" style="color:#ffff">Edit File</h5>
          </center>
        </div>
        <div class="modal-body">

          <label>Item Name</label>
          <input type="text" class="form-control" name="newItemName" value="<?php echo $item_name;?>" style="font-size: 16pt;">
          <p class="text-success" style="font-style: italic; font-size: 10pt;"><?php echo $itemCode;?></p>
          <hr>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Property # :</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newPropNumber" value="<?php echo $property_num;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Classification:</label>
            <div class="col-sm">
              <input type="text" class="form-control" name="newClass" value="<?php echo $classification;?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="static" class="col-sm-4 col-form-label">Source of fund:</label>
            <div class="col-sm">
             <select class="form-control" placeholder="" name="newsofund"  id="sofund" required>
              <option value="<?php echo $sof; ?> selected"><?php echo $sof; ?></option>
              <option value="1">Data 1</option>
              <option value="2">Data 2</option>
              <option value="3">Data 3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="static" class="col-sm-4 col-form-label">Date Aquired:</label>
          <div class="col-sm">
            <input type="date" class="form-control" name="newDateAcq" value="<?php echo $date_acq;?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="static" class="col-sm-4 col-form-label">Item Value:</label>
          <div class="col-sm">
            <input type="text" class="form-control" name="newItemValue" onkeypress="return isNumber(event)" value="<?php echo $unit_value;?>">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="btn_update_item">Save changes</button>
        </div>
      </div>
    </div>
  </form>

  
</div>





</section>


<?php  include'view_functions.php'; ?>


<!-- /.content -->
</div>


<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>


  JsBarcode(".barcode").init();

  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
</script>
<?php     
if(!empty($showModal)) {
    // CALL MODAL HERE
  echo '<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal("show");
    });
    </script>';
  } 
  ?>
</body>
</html>
