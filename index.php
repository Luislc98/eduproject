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
<div class= "wrapper" id="page-background">
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
            <div class="signup-container text">
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
              <ol class="carousel-indicators course-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active course-item">
                  <img src="styles/images/Mountain.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item course-item">
                  <img src="styles/images/Rock.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item course-item">
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
    <!-- fixed overflowing footer --> 
    <?php
    include("includes/footer.php");
    include("includes/signup_form.php");
    include("includes/finallogin.php")
    ?>

  </div>
</div>

<!-- Required jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<!--Navbar and sidebar javascript -->
<script src="script/navbar_sidebar.js"></script>
<script>startApp();</script>

<!-- Required javascript for index/homepage-->
<script src="script/index_script.js"></script>

<!-- Signup javascript -->
<script src="script/signup_form.js"></script>
<!-- Login page Javascript -->

<script src="script/login_script.js"> </script>
<!-- mutliple carousel items, as well as moving carousel items 1 by 1-->
<script src="script/search_carousel.js"></script>

</body>
</html>
