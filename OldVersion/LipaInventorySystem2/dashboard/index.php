<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<style type="text/css">
  body{
    background-color: #7f7f7f;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
  }
  #img-logo{
    margin: 25px;
    margin-left: 60px;
    margin-right: auto 0;
  }
  /* Fixed sidenav, full height */
  .sidenav {
    height: 100%;
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #343434;
    color:white;
    overflow-x: hidden;
    padding-top: 20px;
  }

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 20px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  border-left: solid 5px #aa0011;
}

/* Main content */
.main {
  margin-left: 310px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 20px;
  background-color: #7f7f7f ;
}

/* Add an active class to the active dropdown button */
.side-item-active {
 background-color: #640001 !important;
 color: white;
 padding:20px !important;
}

.side-item{
  padding:20px;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #343434;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.navbar{
  background-color: #640001 !important;
  padding-right: 50px;
  padding-top: 10px;
  color: white;
  border-top: solid 10px #7a0108;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.navbar-text{
  color: white;
  right: 0px;
}



/*columns*/

.title{
  font-size: 24px;
  color: white;
  font-weight: bold;
}

hr{
  background-color: white;
  height: 3px;
}

.col-container{
  margin-top: 10px;
  float:left;
  
}

#items-recorded{
 background-color: #640001 !important;
 padding: 30px;
 margin-right: 20px;
 border-radius: 8px;
 color: white;
}

#subtext{
  font-size: 12px;
  color: #f1f1f1!important;
  font-style: italic;
}

.col-4{
  padding-left: 0;
  padding-top: 0;
}

.col{
  padding-left: 0;
}

.card{
  border-radius: 0;
  height: 460px;

}

.card-header{
  background-color: #343434;
  color: white;
  border-radius: 0 !important;
  margin-top: 0 !important;
}

.activity{
  border-bottom: solid 1px;
}

.info{
  font-weight: bold;
  font-size: 14px;
}

.act-desc{
  font-size: 12px;
  font-style: italic;
  color: #bcbcbc;
}

.pagination{
  margin-top: 5px;
}

.page-item a{
  color: black !important;
}

.date{
  text-align: right;
  color: white;
  margin-top: 10px;
  font-size: 12px;
}

.time{
  font-weight: bold;
  font-size: 24px;
}

</style>


<body>

	<!-- Sidebar -->

  <div class="sidenav">
   <img src="logo.png"  id="img-logo">
   <a href="#about" class="side-item-active">DASHBOARD</a>
   <button class="dropdown-btn">ITEMS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">TRANSFER ITEM</a>
    <a href="#">ADD ITEM</a>
  </div>
  <button class="dropdown-btn">PRINTING
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">UNSERVICEABLE ITEMS </a>
  <a href="#contact">ACTIVITY LOG </a>
</div>





<nav class="navbar">
  <form class="d-flex ms-auto order-5">
    <p>Juan Dela Cruz <span>icon</span></p>
  </form>
</nav>

<div class="main">

  <p class="title">Dashboard</p>

  <hr>
<div class="col-container">
  <div class="container" >
    <div class="row">
      <div class="col-md" id="items-recorded">
       <p> One of three columns</p>
       <br>
       <p id="subtext">Total items recorded</p>
     </div>
     <div class="col-sm" id="items-recorded">
       <p> One of three columns</p>
       <br>
       <p id="subtext">Total value items</p>
     </div>
     <div class="col-sm" id="items-recorded">
       <p> One of three columns</p>
       <br>
       <p id="subtext">Total unserviceable items</p>
     </div>
   </div>
 </div>
 <div>

 <div class="container" id="col-container">
  <div class="row">
    <div class="col-4" id="">
     <div class="card">
      <h5 class="card-header">New Item Added &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span>Page <span>1</span> of 4</span></h5>
      <div class="card-body">
       <div >
      <!-- <p class="info">New Item No. 1 - 20230203-112233-000</p>
        <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p> -->
        <table style="width: 100%;">
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
        </table>

      </div> 

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</div>

<div class="col" id="">
 <div class="card">
  <h5 class="card-header">Recent Activity &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span>Page <span>1</span> of 4</span></h5>
  <div class="card-body">
    <div >
      <!-- <p class="info">New Item No. 1 - 20230203-112233-000</p>
        <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p> -->
        <table style="width: 100%;">
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
          <tr><td style="border-bottom: solid 1px;">
            <p class="info">New Item No. 1 - 20230203-112233-000</p>
            <p class="act-desc">Juan Dela Cruz - Transfer New Item - 2023-02-03 13:13:29</p>
          </td></tr>
        </table>

      </div> 

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</div>
</div>
</div>



<div class="date">
  <p>Friday 03, 2023</p>
  <p class="time">11:51 am</p>
</div>


</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
</script>


</body>
</html>