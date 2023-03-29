<?php
session_start();
include '../connection.php';
$author = $_SESSION["admin"];
$msg="";
$header="";

// $sql = "SELECT id FROM tbl_items";
// $result=mysqli_query($con,$sql);
// $ItemCount=mysqli_num_rows($result);
// $ItemCount++;

// $itemCode=date("Ymd-His-") . 0 .$ItemCount;
$hstryitemCode = $_GET['itemCode'];
// $sql = "SELECT * FROM tbl_items LEFT JOIN tbl_history ON tbl_items.ItemCode = tbl_history.ItemCode WHERE tbl_items.is_available='0' AND tbl_items.is_transferred='1'";

$sql = "SELECT * FROM tbl_items WHERE ItemCode = '".$hstryitemCode."'";
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
 
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include '../navbar.php';?>
    <?php  include '../Pagefunctions/sidebar.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #3e3e3e;">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
           <div class="col-sm-6" style="margin-top: 10px;" >
            <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;ITEM HISTORY</h1>
            <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
          </div><!-- /.col -->
          
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; ">
      <div style="margin-bottom: 20px; margin-top: -20px; padding-left:10px; ">
        <a href="../view_items" type="button" class="btn btn-primary btn-sm" ><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbspVIEW ITEMS</a>
        <div class="search-bar" style="float:right; position: relative; margin-bottom: 15px; width: 25%; margin-right: 15px;">
          <input type="text" id="searchBar" class="" placeholder="Search" style="width: 100%">
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #f9f9f9;">
              <div class="hstry-header">

                <div class="hstry-content">

                  <div class="hstry-title">
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
                    <button type="button" adminPass data-toggle="modal" data-target="#adminPass" class="btn btn-danger btn-sm" style="width:200px">MARK AS UNSERVICEABLE</button>
                  </div>
                  <div>
                    <form action="../transfer" method="GET">
                      <button class="btn btn-info btn-sm" name="itemCode" value="<?php echo $hstryitemCode;?>" style="width:200px">TRANSFER ITEM</button>
                    </form>
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






          <div class="card-body" >


           <table id="example1" class="table table-bordered table-striped" style="background-color: #f9f9f9; padding-top: 0px !important;">

            <thead>
              <tr style="color: #3e3e3e;">
                <th>#</th>
                <th>Item Code</th>
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
                 <td><?php echo $id; ?></td>
                 <td><?php echo $ItemCode; ?></td>                   
                 <td><?php echo $rcvrName; ?></td>
                 <td><?php echo $rcvrPos; ?></td>
                 <td><?php echo $dateTrans; ?></td>
                 <td><?php echo $rcvdDate; ?></td>
                 <td><?php echo $remarks; ?></td>
                 <td><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit-file<?php echo $id; ?>"><i class="fa fa-edit"></i>  Edit</button></td>
               </tr>

               <?php  
               include 'EditModal.php';
             }
             ?>
           </tbody>
         </table>


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

<!--MODAL FOR MARK AS UNSERVICEABLE -->
<div class="modal fade" id="adminPass" style="margin-top:5%;">
  <div class="modal-dialog modal-md">
    <form action="" >
     <div class="modal-header" style="background-color: #894141;">
      <h4 class="modal-title" style="margin-left: 33%; font-weight: bold; font-family: Poppins; color: #fff;">CONFIRMATION</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="card card-primary">
      <div class="card-body">
        <div class="row">

          <i><h3 class="card-title" style="font-weight: bold; color: #626867; margin-top: 5px; margin-left: 20px; font-size: 26px;">Aircon-Koppel 2.0 Window Type</h3></i>

          <div style="text-align: left; margin-top: 15px; margin-left: 22%; font-size: 16px; color: #626867;">
           <h7>Code number &nbsp;&nbsp;&nbsp;&nbsp;: <a style="color:  #10bc2d;">2022-876-02-001</a></h7>
           <br>
           <h7 >Property number: <a style="color:  #10bc2d;">10705020-005</a></h7> 
           <br>
           <h7 >Classification  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a style="color:  #10bc2d;">Office Equipment</a> </h7>
         </div>

         <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px;">
         <label style="font-size: 14px; margin-left: 18%; color: #626867;">To confirm this action enter admin password</label>
         <div class="col-9">
          <div class="form-group" >
            <input type="text" class="form-control" id="" placeholder="" style="width: 116%; margin-left:10%;">
          </div>
        </div>

      </div>
    </div>

    <div class="modal-footer justify-content-between">
      <button type="submit" class="btn btn-primary" style="background-color: #29b74f; border-color: #29b74f; width: 50%; margin-left: 25%;"><i class="fa fa-check"></i> Confirm</button>
    </div>

  </div>
</form>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- END OF MODAL -->









</section>


<?php  include 'history_functions.php'; ?>



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
 $(document).ready(function(){
  $("#searchBar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableInfo tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
 JsBarcode(".barcode").init();

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
  } 


  if(!empty($showModal2)) {
    // CALL MODAL HERE
    echo '<script type="text/javascript">
    $(document).ready(function(){
      $("#myModal2").modal("show");
      });
      </script>';
    } 

    ?>


  </body>
  </html>
