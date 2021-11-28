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
  <link rel="stylesheet" href="styles.css">
 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
<?php
        include 'partials/_dbconnect.php';
  ?>
     <?php
$method =$_SERVER['REQUEST_METHOD'];
$posty = false;
if($method=='POST'){
  $posty=true;
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $sql =   "INSERT INTO `threads` (`threads_id`,`threads_title`, `threads_desc`, `timestamp`, `threads_user_id`, `threads_cat_id`) VALUES (NULL,'$title', '$desc', current_timestamp(), '0', '3')";     
  $result = mysqli_query($conn, $sql);
}
if($posty){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Your Question Has Been Successfully Submitted
 
</div>';
}?>
  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li> -->
            
          </ul>
        </div>
      </nav>

      <img class="selected-language-logo"src="question.png" alt="">
<h5>C Forum</h5>
<br>
<br>
<h3>Asking Doubts is how we progress, and here at Coder's Hub we encourage you to ask as many doubts as you want on this forum and get them answered by experts from the community in no time!</h3>
<br>
<br>


  
  </section>

  <section id="testimonials">
    <div class="forum">
        <br>
        <br>
        <h2 style = "text-align:center">Top Questions</h2>
        <br>
        <br>
       
       
        <div style="padding-left:8%; padding-right:8%"class="row">
        <?php
  $sql =   "SELECT * FROM `threads` WHERE threads_cat_id = 3";
  $result = mysqli_query($conn, $sql);
 $check= true;
  while ($row = mysqli_fetch_assoc($result)){
    $check=false;
    echo '<div class="col-sm-6 my-3">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">'.$row['threads_title'].'</h3>
        <p class="card-text"> '.$row['threads_desc'].'</p>
        <a href="answers.php?thread_id='.$row['threads_id'].'" class="btn btn-primary">See Answers</a>
      </div>
    </div>
  </div>';



  }
if($check){
  echo '<h2>No Questions Yet</h2>';
}
  
  
  ?>
          </div>
          
        <br>
        <br>
        <br>
        <br>

        
    </div>
  
  <!--  -->
    </section>
  <section id="features">
    <div class="about-us">
      <h2>Ask A Doubt</h2>
      <br>
        <br>
        <br>
        <br>
        <form <?php echo "cppforum.php?catid=3"; ?> method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Question Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
          <br>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Please Describe Your Question</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
              </div>
         <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <br>
        <br>
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
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>