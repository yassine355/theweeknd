<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>THE WEEKND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <script type="text/javascript" src="js/main.js"></script>
      
  </head>
  
  <body  >
  <!------------------------alert js------------------------------>
    <?php  
echo '<script type="text/JavaScript ">  
     alert("Welcome  '. strtoupper($_SESSION['name']).'") 
     </script>' 
; 
?> 

    <?php
    if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>You need to login to access this page.</h4>
        <p><a href='login.html'>Login Here!</a></p></div>";
        exit;
    }
    // checking the time now when check-login.php page starts
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <h4>Your session has expire!</h4>
        <p><a href='login.html'>Login Here</a></p></div>";
        exit;
        }
    ?>
  
<!----------------------------------------nav-bar-------------------------------------------->    
    <nav class="navbar navbar-expand-lg navbar-light  bg-secondary" id="home">
  <div class="container-fluid ">
    <a class="text-dark navbar-brand" href="#">THE WEEKND</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
        <a class="nav-link text-white" href="#about">About</a>
        <a class="nav-link text-white" href="#album"  >Album</a>
        <a class="nav-link text-white" href="#social-icons"  >Social Media</a>
        <a class="nav-link text-white " style="" href="logout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
<!-------------------------------------------slider--------------------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="images/wallpaper.jpg" class="d-block w-100" alt="The WEEKND">
      <div class= "carousel-caption d-none d-md-block">
        <h3>Welcome</h3>
         <p>Website designed for educational purposes by student from EST-SB</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Weeknd.jpg" class="d-block w-100" alt="the Weeknd">
      <div class="carousel-caption d-none d-md-block">
        <h5>Enjoy Scrolling</h5>
        <p>Website designed for educational purposes by student from EST-SB</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/image.jpg" class="d-block w-100" alt="the Weeknd">
      <div class="carousel-caption d-none d-md-block">
        <h5>Be Happy</h5>
        <p>Website designed for educational purposes by student from EST-SB</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<!-------------------------------------------about---------------------------------------------->
<div class="jumbotron jumbotron-fluid bg-light text-center" id="about">
  <div class="container">
    <h1 class="display-4">The Weeknd</h1>
    <p class="lead">The Weeknd is a Toronto-based R&B singer named Abel Tesfaye. Songs recorded under The Weeknd name first leaked in late 2010, though the identity of the individual behind the project was initially unknown. The Weeknd released a nine-song album, House of Balloons,
             on 21 March 2011. The album is a part of a trilogy which includes Thursday and Echoes of Silence, to be released in the summer and autumn respectively.</p>
  </div>
</div>
<!-------------------------------------------album---------------------------------------------->
    <div class="jumbotron transparent" id="album"> 
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/wicked games.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Wicked Games</h5>
      
              <span>  <a href="https://www.youtube.com/watch?v=O1OTWCd40bc" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/Can't Feel My Face.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Can't Feel My Face</h5>
     
              <span>  <a href="https://www.youtube.com/watch?v=KEI4qSrkPAs" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/The Weeknd - Starboy.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Starboy</h5>
       
              <span>  <a href="https://www.youtube.com/watch?v=34Na4j8AVgA" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/in your eyes.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">In Your Eyes</h5>
       
              <span>  <a href="https://www.youtube.com/watch?v=fHI8X4OXluQ" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/The Weeknd - Starboy.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Starboy</h5>
      
              <span>  <a href="https://www.youtube.com/watch?v=u6lihZAcy4s" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/wicked games.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Wicked Games</h5>
       
              <span>  <a href="https://www.youtube.com/watch?v=O1OTWCd40bc" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/in your eyes.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">In Your Eyes</h5>
        
              <span>  <a href="https://www.youtube.com/watch?v=E3QiD99jPAg" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-primary bg-light">
      <img src="images/heartless.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-secondary">Heartless</h5>
        
              <span>  <a href="https://www.youtube.com/watch?v=1DpH-icPpl0" class="btn  btn-primary ">Show More</a></span>

      </div>
    </div>
  </div>
</div>

<!------------------------------------------------social-media------------------------------------------->

  <div class="container h-100" id="social-icons">
 
    <a href="https://www.facebook.com/theweeknd/"><i class="fa fa-facebook-official facebook  "   ></i></a>
         <a href="https://www.instagram.com/theweeknd/?hl=fr"><i class="fa fa-instagram instagram"></i></a>
         <a href="https://open.spotify.com/artist/1Xyo4u8uXC1ZmMpatF05PJ"><i class="fa fa-spotify spotify"></i></a>
         <a href="https://www.youtube.com/channel/UC0WP5P-ufpRfjbNrmOWwLBQ"><i class="fa fa-youtube youtube "></i></a>
   
</div>
</div>

   
<!------------------------------------------footer---------------------------------------------->

    <footer class="bg-secondary text-white text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Thank You For Visiting Us! </h5>
        <p>
          Website designed for educational purposes by student from EST-SB
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Social Media</h5>
        <ul class="list-unstyled mb-0">
          <li>
            <a href="https://www.facebook.com/theweeknd/" class="text-white">FaceBook</a>
          </li>
          <li>
            <a href="https://twitter.com/theweeknd?lang=fr" class="text-white">Twitter</a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UC0WP5P-ufpRfjbNrmOWwLBQ" class="text-white">Youtube</a>
          </li>
          <li>
            <a href="https://open.spotify.com/artist/1Xyo4u8uXC1ZmMpatF05PJ" class="text-white">Spotify</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Content</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#home" class="text-white">Home</a>
          </li>
          <li>
            <a href="#about" class="text-white">About</a>
          </li>
          <li>
            <a href="#album" class="text-white">Album</a>
          </li>
          <li>
            <a href="#social-icons" class="text-white">Social Media</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

<!----------------------------------------------------Copyright--------------------------------------->
  <div class="bg-secondary text-center p-3" ">
    © 2021 Copyright:
    <a class="text-white" href="http://www.estsb.ucd.ac.ma/">EST-SB</a>
  </div>
</footer>
<!----------------------------------------------------scripts------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/204f33c312.js" crossorigin="anonymous"></script>

	</body>
</html>