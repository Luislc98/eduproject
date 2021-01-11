<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
<div class= "wrapper">
<!-- Code for Sidebar content/components --> 
<div class="sidebar-center">
  <div id="dark-background" class=""></div>  
  <nav id = "sidebar" class = "active">
    <div class="sidebar-header">
      <h3> Logo <h3>
    </div>
    <ul class = "list-unstyled components">
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
      <!-- Bootstrap navbar modification to have a toggle button to hide or show the navigation bar-->
      <button type="button" id="sidebarCollapse" class = "btn shadow-none active">
        <i class="fa fa-chevron-right icon-default" aria-hidden="false"></i>
      </button>
      <!-- End of Bootstrap navbar modification--> 
    </nav>
<!--Bootstrap navbar -->
      <nav class="navbar navbar-expand-lg fixed-top">
      <a href="#" class="title"> EUREKA </a>
      <button id="nav-button" class="container-fluid navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span id="nav-icon" class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-fill">
          <li class="nav-item flex-fill">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        </ul>

        <form id="search-bar" class="form-inline">
          <input id="search-bar-input" class="form-control mr-sm-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
          <button id = "search-btn" class="btn shadow-none" type="button">
            <span id="search-icon" class= "fa fa-search"></span>
          </button>
        
        </form>
      </div>
    </nav>
    <div id ="content" class="text">
      <h2>Empower yourself</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
  </div>
  
</div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script> 
// Sidebar toggle with arrow animation 
$(document).ready(function() {
  $('#sidebarCollapse').on('click',function() {
    $('#sidebar').toggleClass('active');
    $('.icon-default').toggleClass('active');
    $('active').toggleClass('icon-default');;
    $('#sidebarCollapse').toggleClass("move-right");
    //dark background appears when sidebar button is pressed, and navbar hides
    if($(window).width() > 575.98){
    
    $('.navbar').toggleClass('move-navbar-right');
    } else{
      $('.navbar').toggleClass('display-none')
    };
    
    if($(window).width() <= 575.98) {
        $('#dark-background').toggleClass("active");
      };
  });
});
//when dark-background is clicked on, sidebar hides.
$('#dark-background').on('click',function() {
    $('#sidebar').toggleClass('active');
    $('.icon-default').toggleClass('active');
    $('active').toggleClass('icon-default');
    $('#sidebarCollapse').toggleClass("move-right");
    
    if($(window).width() > 575.98){
     
      $('.navbar').toggleClass('move-navbar-right');

    } else{
      $('.navbar').toggleClass('display-none')
    };

    if($(window).width() <= 575.98) {
        $('#dark-background').toggleClass("active");
      };
  });

  $(window).resize(function() {
        if($(window).width() > 575.98 && $('#sidebarCollapse').hasClass('move-right')) {
          $('.navbar').addClass('move-navbar-right');
          $('.navbar').removeClass('display-none')
          $('#dark-background').removeClass("active");
        } else if ($(window).width() <= 575.98 && $('#sidebarCollapse').hasClass('move-right')){
          $('#dark-background').addClass("active");
          $('.navbar').addClass('display-none');
          $('.navbar').removeClass('move-navbar-right')
         

        }
  });
//Change background of navbar with scroll 
$(window).scroll(function() {
var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll >= 50) {
    //console.log('a');
    $('#navbarSupportedContent').removeClass("show");
    $(".navbar").addClass("navbar-scroll");
    $('#nav-icon').addClass("fa-bars");
    $('#nav-icon').removeClass("turn-arrow-up")
    $('.navbar').addClass("padding")
} else {
    //console.log('a');
    $(".navbar").removeClass("navbar-scroll");
    $('.navbar').removeClass("padding")
}
});


//hamburger up and down animation based on hiding the navbar and hover.
$('#navbarSupportedContent').on('hidden.bs.collapse',function() {
      
      $('#nav-icon').removeClass("turn-arrow-up");
      $('#nav-icon').addClass("fa-bars");
      $('#nav-icon').removeClass("fa-arrow-down")
      $('.nav-item').addClass("padding");
      $('#search-bar').addClass("padding");
    });

    $('#navbarSupportedContent').on('shown.bs.collapse',function() {
      $('#nav-icon').removeClass("fa-bars");
      $('#nav-icon').addClass("fa-arrow-down")
      $('#nav-icon').addClass("turn-arrow-up");
      $('.nav-item').removeClass("padding");
      $('#search-bar').removeClass("padding");
     
    });

// ALL conditions for hovering over the hamburger menu 
$('#nav-button').hover(function() {
  if ($('#navbarSupportedContent').hasClass("show") && $("#nav-icon").hasClass("empty-1")){
    $("#nav-icon").removeClass("empty-1");
  }
  else if ($('#navbarSupportedContent').hasClass("show")){
    $("#nav-icon").toggleClass("empty");
  }
 //these two empty classes fix a bug where sometimes, if the user is too fast and the hover doesn't register, the wrong icon will appear.
  else if($('#nav-icon').hasClass("fa-bars") && $('#nav-icon').hasClass("empty")){
    $('#nav-icon').removeClass("empty")
  }

  else if($('#nav-icon').hasClass("fa-bars") && $('#nav-icon').hasClass("empty-1")){
    $('#nav-icon').removeClass("empty-1")
  }

  else if($('#nav-icon').hasClass("fa-bars")) {
    $('#nav-icon').addClass("fa-arrow-down");
    $('#nav-icon').removeClass("fa-bars");
    $('#nav-icon').toggleClass("empty-1");
  } else{
    $('#nav-icon').removeClass("fa-arrow-down");
    $('#nav-icon').addClass("fa-bars");
    $('#nav-icon').toggleClass("empty-1");
    
  }
});
//Hover function for the search bar icon
    $('#search-btn').hover(function() {
    $('#search-icon').toggleClass("hover");
});

// Hide and show the search bar animation based on click
$("#search-btn").on("click", function(){
  $("#search-icon").toggleClass("fa-search");
  $("#search-icon").toggleClass("fa-arrow-left");
  $("#search-bar-input").toggleClass("show");
  $("#search-btn").toggleClass("border")
});

</script>
  </body>
</html>
