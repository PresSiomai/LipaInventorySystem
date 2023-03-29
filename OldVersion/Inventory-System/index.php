
<?php

session_start();
include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>

   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
   body{
      background-color: #7f7f7f;
   }
</style>

<body>

   <form action="index.php" method="post" accept-charset="utf-8">

      <center>

         <div class="container">

            <div class="row login-row">

               <div class="col-6 logo-part" id="logo-part">
                  <img src="images/Lipa_City_Seal.svg">
                  <h3 class="login-title">LIPA CITY GENERAL SERVICES OFFICE</h3>
                  <hr>
                  <h3>INVENTORY SYSTEM</h3>
               </div>



               <div class="col-6 login-part" >
                  <img src="images/login-icon.svg">

                  <p>Please enter your username and password!</p>



                  <div class="textbox">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="USERNAME" aria-label="Username" aria-describedby="basic-addon1">
                     </div>

                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="PASSWORD" aria-label="password" aria-describedby="basic-addon1">
                     </div>


                     


                     <button type="submit" name="btn_login" class="btn btn-danger">Login</button>
                  </div>
                  <?php
                  if (isset($_POST['btn_login'])) {


                     include 'Pagefunctions/login_query.php';

                  }


                  ?>


               </div>

            </div>
         </center>

      </form>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


   </body>
   </html>



