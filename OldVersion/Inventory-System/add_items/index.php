<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../sessionOut.php");
}
$header="";
$msg="";

$author = $_SESSION["admin"];
include '../connection.php';




$sql = "SELECT id FROM tbl_items";
$result=mysqli_query($con,$sql);
$ItemCount=mysqli_num_rows($result);
$ItemCount++;

$itemCode=date("Ymd-His-") . 0 .$ItemCount;

$sql_sum = "SELECT sum(UnitValue) FROM tbl_items  WHERE is_available='1'";
$sum=mysqli_query($con,$sql_sum);
$row_sum = mysqli_fetch_array($sum);

// $sql_sum = "SELECT sum(UnitValue) FROM tbl_item_temp  WHERE is_available='1'";
// $q = mysql_query($sql);
// $row_sum = mysql_fetch_array($q);


if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
} else {
  $page_no = 1;
}
$total_records_per_page = 10;
$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2"; 

$result_count = mysqli_query($con,"SELECT COUNT(*) As id FROM `tbl_items`");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['id'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
  $second_last = $total_no_of_pages - 1; // total page minus 1

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
   <script type="text/javascript" src="js/script.js"></script>
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
   
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <!-- Latest minified bootstrap js -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- Latest minified bootstrap css -->

   







 </head>
 <body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include '../navbar.php';?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php  include '../Pagefunctions/sidebar.php'; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #3e3e3e;">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <div class="container-fluid">
          <div class="row" style="margin-bottom: -10px;">
           <div class="col-sm-6" style="margin-top: 10px;" >
            <h1 class="m-0" style="color: #afafaf; font-family: Poppins; font-weight: bold;">&nbsp;ADD ITEMS</h1>
            <hr style="width:200%; background: #afafaf; display: block; margin-left: 8px; margin-right: 20px; height: 2px;">
          </div><!-- /.col -->

        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content" style="width:98%; margin-left: 1%; margin-right: 1%; font-family: Poppins; ">

      <div style="display: flex; flex-direction: row; width: 98%; margin-bottom: 20px;">
        <div style="width: 40%;">
          <h5 style="font-family: Poppins; color:#afafaf; margin-bottom: 20px; margin-left:4px;">Total Items Value: &nbsp;<a style="color: #10bc2d; font-size: 30px;">
            <?php echo number_format($row_sum[0]);?></a>
          </h5>

        </div>
        <div style="float: right; width: 58%;">
          <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addItem2" style="border-radius: 7px; width: auto; height: auto; font-size: 16pt; float: right;">
            <i class="fa fa-plus"></i> ADD ITEM</a>

          </div>

        </div>



        <div class="container-fluid">
          <div class="row">
            <div class="col-12">


             <div class="card" style="background-color: #f9f9f9;">
              <!-- /.card-header -->
              <div class="card-body">

                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped" style="background-color: #f9f9f9;">
                    <div class="search-bar" style="float:right; position: relative; margin-bottom: 15px; width: 25%; margin-right: 15px;">
                      <input type="text" id="searchBar" class="" placeholder="Search" style="width: 100%">
                    </div>
                    <thead>
                      <tr style="background-color: #c5c5c5; color: #3e3e3e; text-align: center;">
                        <th>#</th>
                        <th>Code #</th>
                        <th>Item Name</th>
                        <th>Property #</th>
                        <th>Item Value</th>
                        <th>Date Aquired</th>
                        <th>Actions</th>
                      </tr>
                    </thead>


                    <?php 


                    $sql = "SELECT * FROM tbl_items WHERE is_available='1' ORDER BY id DESC LIMIT $offset, $total_records_per_page ";
                    $res_data = $con->query($sql);


                    while($row = mysqli_fetch_array($res_data)){
                      $id = $row['id'];
                      $ItemCode = $row['ItemCode'];
                      $item_name = $row['ItemName'];
                      $property_num = $row['PropertyNumber'];
                      $classification = $row['Classification'];
                      $sof = $row['SourceOfFund'];
                      $unit_value = $row['UnitValue'];
                      $date_acq = $row['DateAcquired'];

                      ?>


                      <tbody style="color:#626867; text-align: center;" id="tableInfo">

                        <tr>

                          <td ><?php echo $id; ?></td>
                          <td><?php echo $ItemCode; ?></td>
                          <td><?php echo $item_name; ?></td>                   
                          <td><?php echo $property_num; ?></td>
                          <td><?php echo  number_format($unit_value); ?></td>
                          <td><?php echo $date_acq; ?></td>
                          <td>

                            <div class="row" style="justify-content: center;">
                              <form action="../transfer" method="GET">
                                <button class="btn btn-info btn-xs" name="itemCode" value="<?php echo $ItemCode;?>" style="width: auto; margin: 5px 5px;">Transfer</button>
                              </form>
                              <form action="../view" method="GET">
                                <button class="btn btn-secondary btn-xs" name="itemCode" value="<?php echo $ItemCode;?>" style="width: auto;margin: 5px 5px;">View</button>
                              </form>
                            </div>

                          </td>
                        </tr>


                        <?php

                      }
                      ?>
                    </tbody>
                  </table>
                  <?php  include 'paging.php' ?>
                </div>

                <!-- add item modal -->
                <div class="modal fade bd-example-modal-lg" id="addItem2" tabindex="-1" role="dialog" aria-hidden="true">

                  <form  method="POST" accept-charset="UTF-8" >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">ADD NEW ITEM</h4>

                        </div>

                        <div class="modal-body">
                         <div class="row">

                           <div class="col-8">

                            <div class="form-group">
                              <label for="static">Item Name</label>
                              <input type="text" class="form-control" id="itemName" name="itemName" placeholder="" style="width: 80%;"required>
                            </div>

                            <div class="form-group">
                              <label for="static">Property Number</label>
                              <input type="text" class="form-control" id="propertyNum" name="propertyNum" style="width: 80%;" required>
                            </div>

                            <div class="form-group">
                              <label for="static">Classifications</label>
                              <input type="text" class="form-control" id="classification" name="classification" style="width: 80%;"required>
                            </div>

                            <div class="form-group">
                              <label for="static">Source of Funds</label>
                              <select class="form-control" placeholder="" name="sofund"  id="sofund" style="width: 80%;" required>
                                <option disabled selected hidden value="">Select</option>
                                <option value="1">Data 1</option>
                                <option value="2">Data 2</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="static">Unit Value</label>
                              <input type="text" class="form-control" id="unitValue" name="unitValue"style="width: 80%;" required>
                            </div>

                            <div class="form-group">
                              <label for="static">Date Aquired</label>
                              <input type="date" class="form-control" id="dateAcq" name="dateAcq" style="width: 80%;" required>
                            </div>

                          </div><!-- col-8 -->




                          <div class="col-4">
                            <div class="form-group">
                             <img src="https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl=<?php echo $itemCode?>&choe=UTF-8" class="form-control" 
                             style=" width:300px; height: 300px; margin-left: -30%;"/>
                             <br>
                             <h5 style="color: #10bc2d; margin-left: -10%; font-size: 18px; "><?php echo $itemCode; ?></h5>
                             <input type="hidden" name="ItemCode" value="<?php echo $itemCode; ?>">
                             <h7 style="color: #000000; margin-left: 7%;">Code Number</h7>
                           </div>
                         </div>   <!-- form-group -->
                       </div><!-- col-4 -->

                     </div>
                     <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" name="btn_add_item" ><i class="fa fa-check"></i> CONFIRM</button>
                    </div>
                  </div>
                </div>
              </form>

            </div><!-- End add item modal -->
            <?php   include 'add_item_functions.php'; ?>
          </div>



        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


    </div>
    <!-- /.col -->


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
    // $(function () {
    //   $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": [""]
    //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //   $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    //   });
    // });

    $(document).ready(function(){
      $("#searchBar").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tableInfo tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
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
    ?>


  </body>
  </html>
