<?php
$flag = 0;
session_start();
if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
  $flag=1;
  if ($_SESSION['uname']=="admin@admin.com") {
    $ImageName = "king";
  }
  else{
    $ImageName = $_SESSION['uname'][0];
  }
}/*
if(isset($_POST['user'])){

  else {
   // $flag=3;
    echo '<script>alert("Please Sign up first..");</script>';
    //echo 'Plzz SignUp...';
}
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AudBud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="includes/css/bootstrap.css">
  <link href="includes/mdb/css/mdb.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="includes/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="includes/js/popper.min.js"></script>
  <script type="text/javascript" src="includes/js/bootstrap.min.js"></script>

  <style>
      
     .navbar {
        background-color: transparent;
    }

    .nav-color{
        background-color: #00A2A2;
      }
      .container{
      }
      .no-shadow
      {
        box-shadow: none;
      }
      .img-wh
      {
        width:50%;
        height: 50%;
        margin-left: 25%;
      }
      .dropdown-menu
      {
        padding: 0;
        margin:0 0 0 9.5%;
        background-color:#00A2A2;
        opacity: 0.8;
        width: 10%;
      }
      .trans:hover
      {
        transition: all .5s ease;
      }
      .trans:hover .drop1
      {
        transform: translateY(0);
      }
      .effect:hover
      {
        color: #000 !important;
      }
  </style>
</head>
<body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark nav-color">
        <a class="navbar-brand font-weight-bold font-italic text-white " href="#">AudBud</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown trans" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu drop1" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item rounded text-white effect cl" href="">Fiction</a>
                  <a class="dropdown-item rounded text-white effect cl" href="">Business</a>
                  <a class="dropdown-item rounded text-white effect cl" href="">Love Story</a>
                  <a class="dropdown-item rounded text-white effect cl" href="">Inspiratioal</a>
                </div> 
                <script>
                      $('.cl').click(function(e) {
                      e.preventDefault();
                      var t = $(this).text();
                      $('#book_cat').html(t);
                      $("#trig_btn").trigger('click');

                      $("#carouselExampleControls").fadeOut(1000);
                      $(".card").fadeOut(1000);
                      $("#recomend_book").fadeOut(1000);
                      $("#book_page").fadeOut(1000);
                      $("#book_page").delay(1000).fadeIn();
      
                  });
                  
                </script>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">About</a>
              </li>
              </ul>
              <?php 
                if ($flag==1) {
                  echo '<ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <img src="login_image/'.$ImageName.'.png" alt="Avatar" style="border-radius: 50%;width: 40px;height: 40px;">
                </li>
              <li class="nav-item">
                  <button class="btn rounded btn-sm blue-gradient waves-effect waves-dark" id="mySign_out_id">Sign Out</button>
            
                </li>
              </ul>';
                }
                else{
                  echo '<div id="modal_btn_h">
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <button class="btn rounded btn-sm blue-gradient waves-effect waves-dark" data-toggle="modal" data-target="#modalLRForm">Log In/Sign Up</button>
                </li>
              </ul>
            </div>';
                }
              ?>
                  <script>
              $("#mySign_out_id").click(function(){

               
               url = "logOut.php";
               window.location= url;
              });
            </script>
            </div>
          </nav>
          <br>
          <br>
          <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <form method="post" action="login.php">
                <h6 id="reg_msg" style="color: red;visibility: hidden;">Please Register First!!</h6>
              <div class="md-form form-sm mb-5">
                <i class="fa fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" name="user" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div> 
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
               
              </div>
            </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <form method="post" action="signUp.php">
              <div class="md-form form-sm mb-5">
                <i class="fa fa-user prefix"></i>
                <input type="text" id="modalLRInput12" name="name" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your Name</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fa fa-envelope prefix"></i>
                <input type="email" id="modalLRInput13" name="email" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" name="password" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="modalLRInput15" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput15">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
              </div>
              </form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
             <?php
             include 'connection.php';
             $sql = "SELECT image_name FROM carosel";
                  $result = mysqli_query($conn, $sql);
                   $close = 0;

                  if (mysqli_num_rows($result) > 0) {
    // output data of each row
                  while(($row = mysqli_fetch_assoc($result))) {

                      if($close==0)
                      {
                      echo '<div class="carousel-item active">
                <img class="d-block w-100" src="'.$row["image_name"].'" alt="First slide">
              </div>';
              $close=1;
              }
              else{
                 echo '<div class="carousel-item">
                <img class="d-block w-100" src="'.$row["image_name"].'" alt="First slide">
              </div>';
              }
                   }
                  } else {
                      echo "0 results";
                  }

             
                 mysqli_close($conn);


              
             ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="card-deck my-5 mx-5" style="text-align: center;">
            <div class="card no-shadow">
              <i class="fas fa-user fa-5x mx-auto mt-5"></i>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">First, Rigister or login to our site</p>
              </div>
            </div>
            <div class="card no-shadow">
              <i class="fas fa-heart fa-5x mx-auto mt-5"></i>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Select your interest!</p>
              </div>
            </div>
            <div class="card no-shadow">
              <i class="fas fa-download fa-5x mx-auto mt-5"></i>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Download the book you selected!</p>
              </div>
            </div>
          </div>
          <div class="container" id="recomend_book">
            <div class="row">
              <?php
              include ('connection.php');
               
                  $count = 4;
                  $sql = "SELECT book_name, detail, image FROM add_book";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
    // output data of each row
                  while(($row = mysqli_fetch_assoc($result)) /*&& $count > 0*/) {
                    // echo $row["detail"];
                
              // $count--;
                  
                 echo '<div class="col-lg-3 col-md-4 col-sm-6 col-4 tooltip1">
                      <div class="right">
                      <h3>'.$row["book_name"].'</h3>
                      <img src="'.$row["image"].'" style="height: 100px;width: 70px;">
                      <p>'.$row["detail"].'</p>
                      <i></i>
                      </div>
                      
                     
                    <div style="text-align:center;">
                        <img src="'.$row["image"].'" class="book-image" alt="">
                        <h4>'.$row["book_name"].'</h4>                       
                      </div>
                     
                  </div>';
                   }
                  } else {
                      echo "0 results";
                  }

             
                 mysqli_close($conn);
                ?>
                 
            
            </div>
          </div>

          <div id="book_page" style="display: none;">
            <div id="book_cat" style="font-size: 30px;"></div>
            <button id="trig_btn" hidden></button>
           
            <div class="container">
              <div class="row">
                 <?php
              include ('connection.php');
                  $book_category =$_POST["book_category"];                    
                  echo $sql = "SELECT book_name, detail, image FROM add_book where category='".$book_category."'";
                  /*$result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
    // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {

                 echo '<div class="col-lg-3 col-md-4 col-sm-6 col-4 tooltip1">
                      <div class="right">
                      <h3>'.$row["book_name"].'</h3>
                      <img src="'.$row["image"].'" style="height: 100px;width: 70px;">
                      <p>'.$row["detail"].'</p>
                      <i></i>
                      </div>
                      
                    <div style="text-align:center;">
                        <img src="'.$row["image"].'" class="book-image" alt="">
                        <h4>'.$row["book_name"].'</h4>                       
                      </div>
                     
                  </div>';
                   }
                  } else {
                      echo "0 results";
                  }
                 mysqli_close($conn);*/ 
                ?>
              </div>
              
            </div>
            
          </div>
    
             <!--/.Footer-->
    
    <footer id="footer">
    <i class="fab social-icon fa-facebook-f"></i>
    <i class="fab social-icon fa-twitter"></i>
    <i class="fab social-icon fa-instagram"></i>
    <i class="fa social-icon fa-envelope"></i>
  </footer>
    
<script type="text/javascript" src="includes/mdb/js/mdb.min.js"></script>
</body>  
</html>
