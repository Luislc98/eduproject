<!DOCTYPE html>

<html lang="en">

  <head>
    <?php  
    include("includes/links.php");
    include("includes/init.php");
    ?>
<!--Homepage stylesheet -->
    <link rel="stylesheet" href="styles/index_styles.css">
    
<!-- Sign up form stylesheet and google api-->
    <link rel="stylesheet" href="styles/signup_form.css">
    <script src="https://apis.google.com/js/api:client.js"></script>
  </head>
<body>
<div class= "wrapper" id="homepage-background">
<?php  
    include("includes/sidebar.php");
    ?>
  <div>
  <?php  
    include("includes/navbar.php");
    ?>

    <div id ="content">
            <div id="top-spacing">
            </div>
            <div class="login-container text">
                <h2>A world class education for anyone, anywhere.</h2>
                <p class="text">Join Eureka to explore your educational journey</p>
                <p class="text"> Learning never ends. </p> <br>
                <button id="signup-btn" class="btn btn-outline-light btn-lg">  Sign Up  <span class="fa fa-caret-right"></span></button>
            </div>
          <br>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
      <!-- Bootstrap (carousel) slide show html code-->
    <div id="slideshow">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="styles/images/Mountain.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="styles/images/Rock.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="styles/images/Fog.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </div>
    <?php  
    include("includes/signup_form.php");
    ?>
  </div>
</div>

<!-- Required jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--Navbar and sidebar javascript -->
<script src="script/navbar_sidebar.js"></script>
<script>startApp();</script>

<!-- Required javascript for index/homepage-->
<script src="script/index_script.js"></script>
<!-- Signup javascript -->
<script src="script/signup_form.js"></script>

</body>
</html>
