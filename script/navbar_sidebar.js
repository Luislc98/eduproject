
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
      $('.navbar').toggleClass('hidden')
    };
    
    if($(window).width() <= 575.98) {
        $('#dark-background').toggleClass("active");
      };
  });
});
//when dark-background is clicked on, sidebar or form hides.
$('#dark-background').on('click',function() {
    $('#sidebar').toggleClass('active');
    $('.icon-default').toggleClass('active');
    $('active').toggleClass('icon-default');
    $('#sidebarCollapse').toggleClass("move-right");

    if($(window).width() > 575.98){
     
      $('.navbar').toggleClass('move-navbar-right');

    } else{
      $('.navbar').toggleClass('hidden')
    };

    if($(window).width() <= 575.98) {
        $('#dark-background').toggleClass("active");
      };
  });

  $(window).resize(function() {
        if($(window).width() > 575.98 && $('#sidebarCollapse').hasClass('move-right')) {
          $('.navbar').addClass('move-navbar-right');
          $('.navbar').removeClass('hidden')
          $('#dark-background').removeClass("active");
        } else if ($(window).width() <= 575.98 && $('#sidebarCollapse').hasClass('move-right')){
          $('#dark-background').addClass("active");
          $('.navbar').addClass('hidden');
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
      $('#search-box').addClass("padding");
    });

    $('#navbarSupportedContent').on('shown.bs.collapse',function() {
      $('#nav-icon').removeClass("fa-bars");
      $('#nav-icon').addClass("fa-arrow-down")
      $('#nav-icon').addClass("turn-arrow-up");
      $('.nav-item').removeClass("padding");
      $('#search-box').removeClass("padding");
     
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
  $("#search-bar").toggleClass("expand");
  $("#search-btn").toggleClass("border")
});
