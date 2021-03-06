<?php
  session_start();
  if($_SESSION['uname']!="admin@admin.com"){
    header("Location: index.php");
  }
?>

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
  <link rel="stylesheet" href="style1.css">
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
        
    </style>
    
    </head>
<body>
  
    <div class="nav-mar">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark nav-color">
        <a class="navbar-brand font-weight-bold font-italic text-white " href="#">AudBud</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="index.php" id="home_btn">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#footer">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="#">About</a>
              </li>
              </ul>
              <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                  <img src="login_image/king.png" alt="Avatar" style="border-radius: 50%;width: 40px;height: 40px;">
                </li>
                <!--<li class="nav-item">
                  <button class="btn rounded btn-sm blue-gradient waves-effect waves-dark" disabled>Admin</button>
                </li>-->
                <li class="nav-item">
                  <button class="btn rounded btn-sm blue-gradient waves-effect waves-dark" id="mySign_out_id">Sign Out</button>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <script>
      $("#mySign_out_id").click(function() {
        url ="logOut.php";
        window.location= url;
      });
    </script>
    
            <div class="container" id="editor">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center"> 
                        <div class="ad-cards">
                        <a href="#" id="editor1"><image class="ad-img" src="add_book.png"/></a>
                        <p>Add Book</p>
                        </div>    
                    </div>
                    <script>
                        
                            $("#editor1").click(function(){
                              $("#editor").fadeOut(1000);
                              $("#add_book").delay(1000).fadeIn();
                            });
                           
                    </script>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                         <div class="ad-cards">
                        <a href="#" id="editor2"><image class="ad-img" class="ad-img" src="delete%20(1).png"/></a>
                        <p>Remove Book</p>
                        </div>    
                    </div>
                    <script>
                      
                             $("#editor2").click(function(){
                              $("#editor").fadeOut(1000);
                              $("#rem_book").delay(1000).fadeIn();
                            });


                    </script>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                        <div class="ad-cards">
                        <a href="#" id="editor3"><image class="ad-img" class="ad-img" class="ad-img" src="edit%20(1).png"/></a>
                        <p>Edit Content</p>
                        </div>    
                    </div>
                     <script>
                      
                             $("#editor3").click(function(){
                              $("#editor").fadeOut(1000);
                              $("#edit_book").delay(1000).fadeIn();
                            });


                    </script>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                         <div class="ad-cards">
                         <a href="#" id="editor4"><image class="ad-img" src="feedback.png"/></a>
                         <p>Feedback</p>
                        </div>    
                    </div>
                </div>
            </div>
             <script>
                      
                            $("#editor4").click(function(){
                              $("#editor").fadeOut(1000);
                              $("#feed_book").delay(1000).fadeIn();
                            });


            </script>
            <div class="container">
                <div class="add_form">
            <div id="add_book">
                
                <form style="width:100%;" enctype="multipart/form-data" action="add_book1.php" method="Post">
                  <p class="text-center form-text font-weight-bold h1">Add Book</p>
                  <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Category</label>
                        <select name="book_category" class="form-control" id="category_bar">
                          <option value="select">Select Category...</option>
                          <option value="fiction">Fiction</option>
                          <option value="business">Business</option>
                          <option value="loveStory">Love Story</option>
                          <option value="inspirational">Inspirational</option>
                        </select>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Book Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="book_name" placeholder="eg. Think and Grow">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Author</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="author_name" placeholder="eg. Carol Dwick">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Enter Link of Diverting Page</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="link" placeholder="eg. http://xyz.com">
                    </div>
                   <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Detail of Book</label>
                        <textarea rows="4" class="form-control" id="formGroupExampleInput2" name="detail" placeholder="eg. Carol Dwick"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Cover / Carosel</label>
                        <select name="image_selector" class="form-control" id="image_selector">
                          <option value="select">Select Cover/ Carosel...</option>
                          <option value="cover">Cover</option>
                          <option value="carosel">Carosel</option>
                        </select>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="exampleFormControlFile1">Select Cover Page</label>
                        <input type="file" class="form-control-file form-control" name="coverImage" id="file_select">
                       
                    </div>
                    <button type="submit" class="btn btn-primary" id="add_book2">Add Book</button>
                    <script>
                       $("#add_book2").click(function(){
                              $("#add_book").fadeOut(1000);
                              $("#editor").delay(1000).fadeIn();
                            });
                    </script>
                </form>
            </div>
         </div>
    </div>
    
    <div class="container">
       <div class="add_form">
            <div id="rem_book">
                
                <form style="width:100%;" action="delete.php" method="Post">
                  <p class="text-center form-text font-weight-bold h1">Remove Book</p>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Book Name</label>
                        <input type="text" class="form-control" id="book_name" name="book_name" placeholder="eg. Think and Grow">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">Author</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="author_name" placeholder="eg. Carol Dwick">
                    </div>
                    <button type="submit" class="btn btn-primary" id="rem_book2">Delete</button>
                    <script>
                       $("#rem_book2").click(function(){    
                              if($("#book_name").val()==''){
                                alert("Enter Valid Book Name to be Deleted.");
                              }
                              else{
                                alert("Are you surely want to delete " + $("#book_name").val() + "?");
                                $("#rem_book").fadeOut(1000);
                                $("#editor").delay(1000).fadeIn();
                              }
                              });
                    </script>
                </form>
            </div>
         </div>
    </div>          


 <div class="container">
       <div class="add_form">
            <div id="edit_book">
                
                <form style="width:100%;">
                  <p class="text-center form-text font-weight-bold h1">Edit Book</p>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Book Name</label>
                        <input type="text" class="form-control" id="book_name" placeholder="eg. Think and Grow">
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput2">What you want to Edit?</label><br>
                        <input type="radio" name="Category" value="name">Name<br>
                        <input type="radio" name="Category" value="Author">Author<br>
                        <input type="radio" name="Category" value="Description">Description<br>
                        <input type="radio" name="Category" value="Cover_Page">Cover Page<br>
                    </div>
                </form>
            </div>
         </div>
    </div>     

    <script>
        $("input[name=Category]:radio").click(function () {
        if ($('input[name=Category]:checked').val() == "name") {
            $("#edit_book").fadeOut(1000);
            $("#rd_name").delay(1000).fadeIn();

        } else if ($('input[name=Category]:checked').val() == "Author") {
            $("#edit_book").fadeOut(1000);
            $("#rd_author").delay(1000).fadeIn();

        }else if ($('input[name=Category]:checked').val() == "Description") {
            $("#edit_book").fadeOut(1000);
            $("#rd_des").delay(1000).fadeIn();

        }else if ($('input[name=Category]:checked').val() == "Cover_Page") {
            $("#edit_book").fadeOut(1000);
            $("#rd_cover").delay(1000).fadeIn();

        }
    });
 </script>     
    
     <div class="container">
       <div class="add_form">
            <div id="rd_name">
                
                <form style="width:100%;">
                  <p class="text-center form-text font-weight-bold h1">Edit Name</p>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Current Book Name</label>
                        <input type="text" class="form-control" id="c_book_name" placeholder="eg. Think and Grow" disabled>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Updated Name</label>
                        <input type="text" class="form-control" id="c_book_name1" placeholder="eg. Think and Grow">
                    </div>
                    <button type="submit" class="btn btn-primary" id="n_edit_update_btn">Update</button>
                    <script>
                    $("#n_edit_update_btn").click(function(){
                              $("#rd_name").fadeOut(1000);
                              $("#editor").delay(1000).fadeIn();
                            });
                    </script>
                </form>
            </div>
         </div>
    </div>     

    <div class="container">
       <div class="add_form">
            <div id="rd_author">
                
                <form style="width:100%;">
                  <p class="text-center form-text font-weight-bold h1">Edit Author</p>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Current Author Name</label>
                        <input type="text" class="form-control" id="c_author_name" placeholder="eg. Think and Grow" disabled>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Updated Author Name</label>
                        <input type="text" class="form-control" id="c_author_name1" placeholder="eg. Think and Grow">
                    </div>
                    <button type="submit" class="btn btn-primary" id="a_edit_update_btn">Update</button>
                    <script>
                    $("#a_edit_update_btn").click(function(){
                              $("#rd_author").fadeOut(1000);
                              $("#editor").delay(1000).fadeIn();
                            });
                    </script>
                </form>
            </div>
         </div>
    </div>     

    <div class="container">
       <div class="add_form">
            <div id="rd_des">
                
                <form style="width:100%;">
                  <p class="text-center form-text font-weight-bold h1">Edit Description</p>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Current Description</label>
                        <input type="text" class="form-control" id="c_des" placeholder="eg. Think and Grow" disabled>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Enter Updated Description</label>
                        <input type="text" class="form-control" id="c_des1" placeholder="eg. Think and Grow">
                    </div>
                    <button type="submit" class="btn btn-primary" id="des_edit_update_btn">Update</button>
                    <script>
                    $("#des_edit_update_btn").click(function(){
                              $("#rd_des").fadeOut(1000);
                              $("#editor").delay(1000).fadeIn();
                            });
                    </script>
                </form>
            </div>
         </div>
    </div>     

    <div id="rd_cover">
      <div class="container">
         <p class="text-center form-text font-weight-bold h1" style="margin: 5%;">Edit Cover Page</p>
        <div class="row">
        <div class="col-lg-6 text-center">

        
         <div class="form-group font-weight-bold">
                        <label for="formGroupExampleInput">Current Cover Page</label><br>
                        <img src="book.png" width="150px" height="250px" style="margin: 5%;">
                    </div>
                    </div>
                    <div class="col-lg-6 text-center">
                    <div class="form-group font-weight-bold">
                      <div>
                        <label for="formGroupExampleInput">Select New Cover Page</label>
                         <input type="file" class="form-control-file" id="cPage_edit_update_cover">
                         <img src="#" id="cover_image" alt="your image" width="150px" height="250px" style="margin: 5%;"/>
                         </div>
                         </div>
                         </div>
                         <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                  var reader = new FileReader();
            
                                   reader.onload = function (e) {
                                    $('#cover_image').attr('src', e.target.result);
                                   }
            
                                   reader.readAsDataURL(input.files[0]);
                                 }
                                }
    
                               $("#cPage_edit_update_cover").change(function(){
                                 readURL(this);
                              });
                         </script>
                    </div>
                    <button type="submit" class="btn btn-primary col-lg-12 text-center" id="cPage_edit_update_btn">Update</button>
                    <script>
                    $("#cPage_edit_update_btn").click(function(){
                              $("#rd_cover").fadeOut(1000);
                              $("#editor").delay(1000).fadeIn();
                            });
                    </script>
      </div>
    </div>
    
          <footer id="footer">
    <i class="fab social-icon fa-facebook-f"></i>
    <i class="fab social-icon fa-twitter"></i>
    <i class="fab social-icon fa-instagram"></i>
    <i class="fas social-icon fa-envelope"></i>
    <p><a>Feedback</a></p>
    <p>© Copyright 2018 TinDog</p>

  </footer>
    
<script type="text/javascript" src="includes/mdb/js/mdb.min.js"></script>
</body>  
</html>
