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

  <section id="title">
    <div class="container-fluid particles-fluid">
     
      <nav class="navbar navbar-expand-lg navbar-dark nav-css">
        <a class="navbar-brand" href="">
          <img src="coder'shub.png" alt="" style="display:inline-block; width:10rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="languages.html">Languages</a>
            </li>
              
        <?php 
           session_start();
         if (isset($_SESSION['username']))
         {
           echo '<li class="nav-item">
           <a class="nav-link" href="http://localhost/login/login.php">Hello '.$_SESSION['username'].'!</a>
         </li>';
         }
         else{
           echo ' <li class="nav-item">
           <a class="nav-link" href="http://localhost/login/login.php">Login</a>
         </li>';
         }
           
        ?>
           
    
            
          </ul>
        </div>
      </nav>

      <div class="Title-block">
        <h1>Do You Want To Become a Coding Guru?</h1>
        <br>
        <h6>We will take you from <span class="begin">BEGINNER</span> to <span class="end">BEYOND</span></h6>
        <br>

        <?php 
         
         if(!isset($_SESSION['username'])){
           echo ' <a href="login.php"><button type="button" class="btn-lg btn-outline-light hello">Join Us!</button>
           </div></a>';
         }
         
         
         ?>
          
      </div>
      
      <script src="particles.js"></script>
        <script src="app.js"></script>
      
    </div>
    
  </section>
  
    <!-- what-we-do -->

        <section id="what-we-do">
            <div class="what-we-do-title">
                <h2>What does this website provide?</h2>
            </div>

            <div class="row all-cards align-content-center" style="margin:auto;">
                <div class="card col-lg-3 my-3 mr-2">
                  <img src="docu.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-title" style="color:black;">New to Programming?</h4>
                  <p class="card-text">We have it sorted for you, just select the language you want to start learning, you will get numerous good quality FREE video-resources to get started. You can also post your doubts on the forum for others to help you out!</p>
                  </div>
                </div>
                
                <div class="card col-lg-3 my-3 mr-2" >
                  <img src="codingbegin.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-title" style="color:black;">Know Programming?</h4>
                  <p class="card-text">You can always learn a new language, just peep into the documentations section of that language, you will find all you need to get going with the language at one place. Feel free to post any doubts on the forum. </p>
                  </div>
                </div>

                <div class="card col-lg-3 my-3 " >
                  <img src="forumpic.png" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-title" style="color:black;">Willing to help?</h4>
                  <p class="card-text">If you know a lot about programming and are willing to help others get started with coding, please have a look at the forums page. Helping others will prove beneficial to you as well, some good questions can help you revisit or learn new concepts!</p>
                  </div>
                </div>
            </div>
        </section>


  <!-- Features -->
  <section id="features">
    <div class="about-us">
      <h2>About Us</h2>
      <h4>The 4 of us - Gaurish, Alan, Attreyee and Mohit, creators of this website, are in the First year of college. We have seen some of our batchmates face difficulties in learning programming, much because they didn't choose Computer Science elective course in their high school. So, we came up with this idea to not only help these kinds of people, but also to serve all of them who want to begin with programming and don't know where to start from. We decided to put all known good free resources, and create a forum for doubts too, reducing the barrier-to-entry for learning programming.</h4>
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
  <!-- <script src="hexagon.js"></script> -->
      

</body>


</html>