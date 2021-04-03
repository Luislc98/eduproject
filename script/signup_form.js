
$("#student-signup-btn").on('click', function(){
  if($("#teacher-signup-form").hasClass("show")){
    $("#teacher-signup-form").removeClass("show");
  }

  if($("#student-signup-form").hasClass("show")){
    $("#student-signup-form").removeClass("show");
  }

  if($("#signup-options-Teacher").hasClass("show")){
    $("#signup-options-Teacher").removeClass("show");
  }

  //changes the background color of teacher and the color of the student button
  $("#student-signup-btn").addClass("student-btn-css");
  $("#student-signup-btn").removeClass("student-default");
  $("#teacher-signup-btn").addClass("teacher-default");
  $("#teacher-signup-btn").removeClass("teacher-btn-css");
  $("#signup-forms").removeClass("teacher-css");
  $("#signup-forms").addClass("student-css");
})

$("#teacher-signup-btn").on('click', function(){
  if($("#student-signup-form").hasClass("show")){
    $("#student-signup-form").removeClass("show");
  }
  if($("#teacher-signup-form").hasClass("show")){
    $("#teacher-signup-form").removeClass("show");
  }

  if($("#signup-options-Student").hasClass("show")){
    $("#signup-options-Student").removeClass("show");
  }
  //changes the background color of teacher form and the color of the teacher button
  $("#student-signup-btn").removeClass("student-btn-css");
  $("#student-signup-btn").addClass("student-default");
  $("#teacher-signup-btn").removeClass("teacher-default");
  $("#teacher-signup-btn").addClass("teacher-btn-css");
  $("#signup-forms").addClass("teacher-css");
  $("#signup-forms").removeClass("student-css");
  
})

//Hide and show the signup form when user clicks the signup button 
$("#signup-btn").on("click", function(){
  $("#fixed-container-forms").toggleClass("hidden");
  $("#signup-dark-background").toggleClass("active");
  $("body").css("overflow", "hidden")

  if($("#signup-dark-background").hasClass("active")){
    $('#navbarSupportedContent').removeClass("show");
    $('#nav-icon').addClass("fa-bars");
    $('#nav-icon').removeClass("turn-arrow-up");
}

  //Collapses sidebar since signing up is the main focus
  $('#sidebar').addClass('active');
  $('.icon-default').removeClass('active');
  $('#sidebarCollapse').removeClass("move-right");
  $('.navbar').removeClass('move-navbar-right');
  $('#filter-container').removeClass('move-search-carousel-right')
  $('#filter-container').addClass('hidden')
});

$('#signup-dark-background').on('click', function(){
  $("#fixed-container-forms").toggleClass("hidden");
  $("#signup-dark-background").toggleClass("active");
  $("body").css("overflow", "auto")
  if (window.pageYOffset < 50){
    $('#filter-container').removeClass('hidden')
  }
});


//this is for google sign up button
var googleUser = {};
var startApp = function() {
  gapi.load('auth2', function(){
    // Retrieve the singleton for the GoogleAuth library and set up the client.
    auth2 = gapi.auth2.init({
      client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
      cookiepolicy: 'single_host_origin',
      // Request scopes in addition to 'profile' and 'email'
      //scope: 'additional_scope'
    });
    attachSignin(document.getElementById('customBtnStudent'));
    attachSignin(document.getElementById('customBtnTeacher'));
  });
};

function attachSignin(element) {
  console.log(element.id);
  auth2.attachClickHandler(element, {},
      function(googleUser) {
        document.getElementById('name').innerText = "Signed in: " +
            googleUser.getBasicProfile().getName();
      }, function(error) {
        alert(JSON.stringify(error, undefined, 2));
      });
}