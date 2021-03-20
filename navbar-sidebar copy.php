
  <div class="sidebar-center">
    <div id="dark-background" class="dark-background">
    </div>  
    <nav id = "sidebar" class = "active">
      <div class="sidebar-header">
        <h3> Logo <h3>
      </div>
      <ul class = "list-unstyled sidebar-components">
        <li class="sidebar-dropdown">
          <a href = "#homeSubmenu" data-toggle="collapse" aria-expanded="false" class = "dropdown-toggle"> Home </a>
            <ul class = "collapse list-unstyled" id="homeSubmenu">
              <li> 
                <a href = "#"> Home 1 </a>
              </li>
              <li> 
                <a href = "#"> Home 2 </a>
              </li>
              <li> 
                <a href = "#"> Home 3</a>
              </li>
              <li> 
                <a href = "#"> Home 4 </a>
              </li>
              <li> 
                <a href = "#"> Home 5 </a>
              </li>
            </ul>
            <li class="sidebar-dropdown">
              <a href = "#pageSubmenu" data-toggle="collapse" aria-expanded="false" class = "dropdown-toggle"> Courses </a>
                  <ul class = "collapse list-unstyled" id="pageSubmenu">
                    <li> 
                      <a href = "#"> Page 1 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 2 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 3 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 4 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 5</a>
                    </li>
                  </ul>
              </li>
        <li>
          <a href="#"> About </a>
        </li>
        <li>
          <a href="#"> Scholars </a>
        </li>
        <li>
          <a href="#"> Educators </a>
        </li>
        <li>
          <a href="#"> Contact </a>
        </li>
      </ul>
    </nav>
  </div>
  <div>
    <nav class="sidebarButton">
      <!-- Bootstrap navbar modification to have a toggle button to hide or show the sidebar-->
        <button type="button" id="sidebarCollapse" class = "btn shadow-none active">
            <span><i class="fas fa-chevron-right icon-default"></i></span>
          </button>
          <!-- End of Bootstrap navbar modification--> 
    </nav>
    <!--Bootstrap navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a href="#" class="title"> visualum </a>
      <button id="nav-button" class="container-fluid navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                  <span>Sign out</span>
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
  </div>


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="script/navbar_sidebar.js"></script>

