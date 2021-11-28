<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>MLH-Hackathon</title>
  <script src="https://kit.fontawesome.com/04e3221170.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link rel="stylesheet" href="styles.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>



<?php include 'partials/_dbconnect.php' ?>
<!-- <?php
$id1 = $_GET['thread_id'];
$method =$_SERVER['REQUEST_METHOD'];
$posty = false;
if($method=='POST'){
  $posty=true;
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $sql =   "INSERT INTO `answer` (`answer_id`, `answer_title`, `answer_desc`, `answer_cat_id`, `timestamp`) VALUES (NULL, '$title', '$desc','$id1' , current_timestamp())";

  $result = mysqli_query($conn, $sql);
 
}
if($posty){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Your Question Has Been Successfully Submitted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}?> -->
  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="">
          <img src="coder'shub.png" alt="" style="display:inline-block; width:10rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="languages.html">Languages</a>
            </li>
            <?php 
         session_start();
         if(!isset($_SESSION['username'])){
           echo ' <a href="login.php"><button type="button" class="btn-lg btn-outline-light hello">Join Us!</button>
           </div></a>';
         }
         
         
         ?>
          </ul>
        </div>
      </nav>

      <img class="selected-language-logo"src="whitequestion.png" alt="">
  
  <?php
  $id = $_GET['thread_id'];
  $sql =   "SELECT * FROM `threads` WHERE threads_id = $id";
  $result = mysqli_query($conn, $sql);
 
  while($row = mysqli_fetch_assoc($result)){
    if($row['threads_id']==$id){
    $name= $row['threads_title'];
    $desc= $row['threads_desc'];
   echo '<h5>'.$name.'</h5>
   <br>
   <br>
   <h3>'.$desc.'</h3>
   <br>
   <br>';

    }
  }

  
  
  ?>
    
    <div class="container">
    



  
  </section>

  <section id="testimonials">
    <div class="forum">
        <br>
        <br>
        <h2 style = "text-align:center">Top Answers</h2>
        <br>
        <br>
       
    
        
        <div style="padding-left:8%; padding-right:8%"class="row">
        <?php
        $id2 = $_GET['thread_id'];
  $sql =   "SELECT * FROM `answer` WHERE answer_cat_id = '$id2' ";
  $result = mysqli_query($conn, $sql);
 $check= true;
  while ($row = mysqli_fetch_assoc($result)){
    $check=false;
    echo '<div class="col-sm-12 my-3">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">'.$row['answer_title'].'</h3>
        <p class="card-text"> '.$row['answer_desc'].'</p>
      </div>
    </div>
  </div>';



  }
if($check){
  echo '<h2>No Questions Yet</h2>';
}
  
  
  ?>
      
    </div>
  
  <!--  -->
    </section>
  <section id="features">
    <div class="about-us">
      <h2>Answer the Doubt</h2>
      <br>
        <br>
        <br>
        <br>
        <form <?php $id3 = $_GET['thread_id']; echo "cppforum.php?catid=1&thread_id='.$id3.'"; ?> method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Answer Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
          <br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Please Write your answer here</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
              </div>
         <br>
         <br>
         <button type="submit" class="btn btn-primary">Submit</button>
             
    </div>
  </section>


  



  <footer class="footer-container">
    <!-- <p class="copy-right">Â© Copyright 2021 KJSCE Comps A-Division</p> -->
           <h2>Connect with us</h2>
           <div>
               <a target="_blank" href="/" class="social-links-container"
                   ><img src="twitter-black.png" alt="Twitter logo" class="small-image-size"
               /></a>
               <a target="_blank" href="/" class="social-links-container"
                   ><img src="linkedin-black.png" alt="Linkedin Logo" class="small-image-size"
               /></a>
               <a target="_blank" href="/" class="social-links-container"
                   ><img src="github-black.png" alt="Github logo" class="small-image-size"
               /></a>
           </div>
   </footer>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>

</html>