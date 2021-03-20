

//Hide and show the signup form when user clicks the signup button 
$("#signup-btn").on("click", function(){
  $("#fixed-container-forms").toggleClass("hidden");
  $("#signup-dark-background").toggleClass("active");
  $("body").css("overflow", "hidden")

  //Collapses sidebar since signing up is the main focus
  $('#sidebar').addClass('active');
  $('.icon-default').removeClass('active');
  $('#sidebarCollapse').removeClass("move-right");
  $('.navbar').removeClass('move-navbar-right');
});

$('#signup-dark-background').on('click', function(){
  $("#fixed-container-forms").toggleClass("hidden");
  $("#signup-dark-background").toggleClass("active");
  $("body").css("overflow", "auto")

});




