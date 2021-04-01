$("#signout-btn").on("click", function(){
    $("#fixed-container-signin").toggleClass("hidden");
    $("#signin-dark-background").toggleClass("active");
    if($("#signin-dark-background").hasClass("active")){
        $("body").css("overflow", "hidden");
        $('#navbarSupportedContent').removeClass("show");
        $('#nav-icon').addClass("fa-bars");
        $('#nav-icon').removeClass("turn-arrow-up");
    }else{
        $("body").css("overflow", "auto");
    }

  
    //Collapses sidebar since signing up is the main focus
    $('#sidebar').addClass('active');
    $('.icon-default').removeClass('active');
    $('#sidebarCollapse').removeClass("move-right");
    $('.navbar').removeClass('move-navbar-right');
    $('#filter-container').removeClass('move-search-carousel-right')
    $("#fixed-container-forms").addClass("hidden");
    $('#filter-container').addClass('hidden')
    $("#signup-dark-background").removeClass("active");
  });
  
  $('#signin-dark-background').on('click', function(){
    $("#fixed-container-signin").toggleClass("hidden");
    $("#signin-dark-background").toggleClass("active");
    $("body").css("overflow", "auto")
    if (window.pageYOffset < 50){
        $('#filter-container').removeClass('hidden')
      }
  });

  $("#student-login-btn").on('click', function(){
    if($("#teacher-login-form").hasClass("show")){
      $("#teacher-login-form").removeClass("show");
    }
  
    if($("#student-login-form").hasClass("show")){
      $("#student-login-form").removeClass("show");
    }
  
    if($("#login-options-Teacher").hasClass("show")){
      $("#login-options-Teacher").removeClass("show");
    } 

    if($("#teacher-login-form").hasClass("show")){
      $("#teacher-login-form").removeClass("show");
    }
  
    if($("#student-login-form").hasClass("show")){
      $("#student-login-form").removeClass("show");
    }
  });
  
  $("#teacher-login-btn").on('click', function(){
    if($("#student-login-form").hasClass("show")){
      $("#student-login-form").removeClass("show");
    }
    
    if($("#teacher-login-form").hasClass("show")){
      $("#teacher-login-form").removeClass("show");
    }
  
    if($("#login-options-Student").hasClass("show")){
      $("#login-options-Student").removeClass("show");
    }

    if($("#student-login-form").hasClass("show")){
      $("#student-login-form").removeClass("show");
    }
  
    if($("#teacher-login-form").hasClass("show")){
      $("#student-login-form").removeClass("show");
    }
  });

  function myFunction() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function myFunctionteacher() {
    var x = document.getElementById("inputTeacherPassword");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }