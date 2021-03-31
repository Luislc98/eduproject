<?php include("includes/userbackend.php"); ?>
<nav class="sidebarButton">
      <!-- Bootstrap navbar modification to have a toggle button to hide or show the sidebar-->
        <button type="button" id="sidebarCollapse" class = "btn shadow-none active">
          <span class="d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right icon-default"></i></span>
        </button>
          <!-- End of Bootstrap navbar modification--> 
</nav>

<div id="filter-navbar-container" class="navbar-expand-lg fixed-top">
    <!--Bootstrap navbar -->
  <nav class="navbar navbar-expand-lg">
      
        <a href="#" class="title"> visualum </a>
        <button id="nav-button" class="container-fluid navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span id="nav-icon" class="fa fa-bars"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-fill">
                <li class="nav-item flex-fill">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item flex-fill">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item flex-fill">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item flex-fill">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item flex-fill">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <div class="d-flex justify-content-end signout-btn">
                  <button id="signout-btn" class="btn btn-outline-light btn-lg justify-content-end">

                    <?php if(is_user_logged_in()) { ?>

                    <span>Sign out</span>
                    <?php } else { ?>

              

                    <span>Sign In</span>
                    <?php } ?>

                  </button>
                </div>
                <form id="search-box" class="form-inline d-flex justify-content-center">
                  <input id="search-bar" class="form-control mr-sm-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
                  <button id = "search-btn" class="btn shadow-none" type="button">
                    <span id="search-icon" class= "fa fa-search"></span>
                  </button>
                </form>
              </ul> 
        </div>
  </nav>
  <div id="filter-container" class="flex-fill">
    <!-- Carousel code for filtering -->
    <?php include("includes/filter-carousel.php"); ?>
  </div>
</div>
