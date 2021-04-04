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
  <div id="webpage-resize">
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
    <div>
      <div id="course-carousel" class="carousel slide" data-bs-interval="false" data-bs-touch="true" data-bs-ride="false">
        
        <div class="carousel-inner course-inner">

          <div class="carousel-item course-item active">
              <div class="col-sm-4 col-12">
                <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item course-item">
          <div class="col-sm-4 col-12">
                <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item course-item">
          <div class="col-sm-4 col-12">
                <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item course-item">
          <div class="col-sm-4 col-12">
                <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item course-item">
          <div class="col-sm-4 col-12">
              <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="carousel-item course-item">
              <div class="col-sm-4 col-12">
                <div class="card d-flex align-items-center">
                  <img src="styles/images/Fog.jpg" style="object-fit: cover"  alt="...">
                  <div class="card-body"> 
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#course-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#course-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <?php
      include("includes/footer.php");
      include("includes/signup_form.php");
      include("includes/finallogin.php")
    ?>

  </div>
</div>
<?php
    include("includes/required_scripts.php");
    ?>
<!-- Required javascript for index/homepage-->
<script src="script/index_script.js"></script>

<!-- Signup javascript -->
<script src="script/signup_form.js"></script>

</body>
</html>
