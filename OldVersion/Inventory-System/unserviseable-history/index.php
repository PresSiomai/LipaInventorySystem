<?php
session_start();
include '../connection.php';

$author = $_SESSION["admin"];
$msg="";
$header="";


$hstryitemCode = $_GET['itemCode'];

$sql = "SELECT * FROM tbl_archive WHERE ItemCode = '".$hstryitemCode."'";
$res_data = $con->query($sql);
// $row = mysqli_fetch_array($res_data)
$row = $res_data->fetch_assoc();

$id = $row['id'];
$item_name = $row['ItemName'];
$itemCode=$row['ItemCode'];
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
   @font-face{
     src: url(../Poppins-Regular.ttf);
     font-family: Poppins;
   }
   .line1 {width:80%; background: #afafaf;}

 </style>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Inventory System</title>

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

 <link rel="stylesheet" href="../css/style.css">
 <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
 
</head>


<body class="hold-transition sidebar-mini layout-fixed" onload="renderTime();">
  <div class="wrapper">

   <?php include '../navbar.php'; ?>

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
            <a href="#" class="nav-link">
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
          <a href="../unserviseable-items" class="nav-link active" style="background-color: #670001;" >
           <span class="iconify" data-icon="mdi:laptop-off" style=" margin-right: 10px; margin-left: 5px; margin-bottom: 3px;"></span>
           <p>
             UNSERVICEABLE ITEMS
           </p>
         </a>
       </li>

       <li class="nav-item" style="color: #afafaf; font-family: Poppins;">
        <a href="../activity-log" class="nav-link ">
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
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="margin-top: 10px;" >
          <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;UNSERVICEABLE ITEMS</h1>
          <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
        </div><!-- /.col -->
        

        <!--TABLE STARTS -->
        <section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; margin-top: 15px;">
         <div style="margin-bottom: 20px; margin-top: -20px; padding-left:10px; ">
          <a href="../unserviseable-items" type="button" class="btn btn-secondary btn-sm" ><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbspUNSERVICEABLE LIST</a>
          <div class="search-bar" style="float:right; position: relative; margin-bottom: 15px; width: 25%; margin-right: 15px;">
            <input type="text" id="searchBar" class="" placeholder="Search" style="width: 100%">
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12" >
              <div class="card" style="background-color: #f9f9f9;">


               <div class="hstry-header">

                <div class="hstry-content">
                  <div class="badge badge-secondary" style="width: 350px; text-align:center; border-radius:30px;">
                    <h5 style="margin:auto;"><i>UNSERVICEABLE ITEM</i></h5>
                  </div>

                  <div class="hstry-title" style="float:left;">
                    <h2><?php echo $item_name ?>&nbsp
                     <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-item"><i class="fa fa-edit"></i>  &nbsp Edit File</button>
                   </h2>
                 </div>

                 <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Code Number : </h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $hstryitemCode;?></h5>
                  </div>  
                </div>

                <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Property Number : </h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $property_num;?></h5>
                  </div>  
                </div>

                <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Classification :</h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $classification;?></h5>
                  </div>  
                </div>

                <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Source of fund :</h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $sof;?></h5>
                  </div>  
                </div>

                <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Date Acquired :</h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $date_acq;?></h5>
                  </div>  
                </div>

                <div class="hstry-item-info"> 
                  <div class="item-label">
                    <h5>Total Value :</h5>
                  </div>           
                  <div class="item-data">
                    <h5 class="text-success"><?php echo $unit_value;?></h5>
                  </div>  
                </div>

                <hr style="height: 2px;
                width: 90%; 
                margin-left: -30px;" >
                <div class="hstry-btn">

                  <div style="padding-right: 20px;">
                    <button type="button"  data-toggle="modal" data-target="#adminPass" class="btn btn-success btn-sm" style="width:200px">RETRIEVE ITEM</button>
                  </div>

                </div>
              </div>







              <div class="hstry-qr">

                <div class="hstry-qr-img">
                 <img src="https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl=<?php echo $hstryitemCode?>&choe=UTF-8" class="" id="" placeholder="" />
               </div>

              <!-- <div class="hstry-qr-label" >
                  <svg class="barcode"
                  jsbarcode-format="auto"
                  jsbarcode-value="<?php echo $itemCode?>"
                  jsbarcode-textmargin="0"
                  jsbarcode-fontoptions="bold">
                </svg>
              </div> -->

              <div class="btn_print" >
                <button type="button" class="btn btn-info btn-sm btn-block"><i class="fa fa-print" aria-hidden="true"></i> &nbspPRINT</button>
              </div>

            </div>
          </div>


          <div class="card-body" style="padding-top: 0px !important;">

            <table  class="table table-bordered table-striped" style="background-color: #f9f9f9; margin-top: 20px;">

              <thead>
                <tr style="color: #3e3e3e;">
                  <th>#</th>
                  <th>Name</th>
                  <th>Pos.</th>
                  <th>Date Transfer</th>
                  <th>Date Received</th>
                  <th>Remarks</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <?php 


              $sql = "SELECT * FROM tbl_history WHERE ItemCode = '".$hstryitemCode."'";
              $res_data = $con->query($sql);


              while($row = mysqli_fetch_array($res_data)){
                $id = $row['id'];
                $ItemCode = $row['ItemCode'];
                $rcvrName = $row['receiverName'];
                $rcvrPos = $row['receiverPos'];
                $dateTrans = $row['dateTrans'];
                $rcvdDate = $row['dateReceived'];
                $remarks = $row['remarks'];


                ?>
                <tbody style="color:#626867;" id="tableInfo">
                  <tr>
                   <td style="display: none;"><?php echo $id; ?></td>
                   <td><?php echo $id; ?></td>                   
                   <td><?php echo $rcvrName; ?></td>
                   <td><?php echo $rcvrPos; ?></td>
                   <td><?php echo $dateTrans; ?></td>
                   <td><?php echo $rcvdDate; ?></td>
                   <td><?php echo $remarks; ?></td>
                   <td><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit-file<?php echo $itemCode; ?>"><i class="fa fa-edit"></i>  Edit</button></td>
                 </tr>

                 <?php  
                 include 'modals.php';
               }
               ?>
             </tbody>
           </table>
           <center>

           <i class="text-center" style="color:#6c757d;">****** NO DATA AS FOLLOW. ******</i>
         </center>
         </div>
         


       </div>
       <!-- /.card-body -->
     </div>
     <!-- /.card -->
   </div>
   <!-- /.col -->
 </div>
 <!-- /.row -->
</div>

<!-- /.container-fluid -->
</section>




<?php include 'btnFunctions.php'; ?>

<!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
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

   $(document).ready(function(){
  $("#searchBar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableInfo tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

  $(function () {
    bsCustomFileInput.init();
  });
</script>
<?php   
if(!empty($showModal)) {
    // CALL MODAL HERE
  echo '<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal("show");
    });
    </script>';
  } ?>
</body>
</html>
