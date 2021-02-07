$('#student-signup-btn').on('click',function() {
    $("#student-signup-form").addClass("collapse.show");
    $("#student-signup-form").removeClass("collapse");
    $("#teacher-signup-form").removeClass("collapse.show");
    $("#teacher-signup-form").addClass("collapse");
//resets the form to the first page!
    $('.firstPage').addClass("collapse.show");
    $('.firstPage').removeClass("collapse");
    $(".secondPage").removeClass("collapse.show");
    $(".secondPage").addClass("collapse");
    $(".thirdPage").removeClass("collapse.show");
    $(".thirdPage").addClass("collapse");
    $(".fourthPage").removeClass("collapse.show");
    $(".fourthPage").addClass("collapse");
    $(".fifthPage").removeClass("collapse.show");
    $(".fifthPage").addClass("collapse");
    $(".sixthPage").removeClass("collapse.show");
    $(".sixthPage").addClass("collapse");
    $(".seventhPage").removeClass("collapse.show");
    $(".seventhPage").addClass("collapse");
  //restores the front arrow
    $(".front-arrow").addClass("collapse.show");
    $(".front-arrow").removeClass("collapse");
  // backwards arrow will disappear on first page of form 
    $(".back-arrow").addClass("collapse");
    $(".back-arrow").removeClass("collapse.show");

//changes the background color, to the color of the student button
    $('#student-signup-form').css('background-color', 'rgba(2,104,237,0.9)')
    $("#form-header").removeClass("teacher-background");
    $("#form-header").addClass("student-background");
//changes the color of navigation arrow buttons
    $('#student-back-arrow-btn').addClass('teacher-background');
    $('#student-front-arrow-btn').addClass('teacher-background');
//Changes the background-color of the button
    $("#student-signup-btn").addClass("on-student-btn-click");
    $("#teacher-signup-btn").removeClass("on-teacher-btn-click");
    $("#student-signup-btn").removeClass("default-color");
    $("#teacher-signup-btn").addClass("default-color");
  });

// teacher signup button actions
  $('#teacher-signup-btn').on('click',function() {
    $("#teacher-signup-form").addClass("collapse.show");
    $("#teacher-signup-form").removeClass("collapse");
    $("#student-signup-form").removeClass("collapse.show");
    $("#student-signup-form").addClass("collapse");
//resets the form to the first page!
    $('.firstPage').addClass("collapse.show");
    $('.firstPage').removeClass("collapse");
    $(".secondPage").removeClass("collapse.show");
    $(".secondPage").addClass("collapse");
    $(".thirdPage").removeClass("collapse.show");
    $(".thirdPage").addClass("collapse");
    $(".fourthPage").removeClass("collapse.show");
    $(".fourthPage").addClass("collapse");
    $(".fifthPage").removeClass("collapse.show");
    $(".fifthPage").addClass("collapse");
    $(".sixthPage").removeClass("collapse.show");
    $(".sixthPage").addClass("collapse");
    $(".seventhPage").removeClass("collapse.show");
    $(".seventhPage").addClass("collapse");
  //restores the front arrow
    $(".front-arrow").addClass("collapse.show");
    $(".front-arrow").removeClass("collapse");
  // backwards arrow will disappear on first page of form 
    $(".back-arrow").addClass("collapse");
    $(".back-arrow").removeClass("collapse.show");
  
//turns background color purple
    $('#teacher-signup-form').css('background-color', 'rgba(39, 27, 83, 0.9)');
    $("#form-header").removeClass("student-background");
    $("#form-header").addClass("teacher-background");
  
//changes the color of navigation arrow buttons
    $('#teacher-back-arrow-btn').addClass("student-background");
    $('#teacher-front-arrow-btn').addClass("student-background");

    //Changes the background-color of the sign up button
    $("#student-signup-btn").removeClass("on-student-btn-click");
    $("#student-signup-btn").addClass("default-color");
    $("#teacher-signup-btn").removeClass("default-color");
    $("#teacher-signup-btn").addClass("on-teacher-btn-click");
// This goes through the 3 different pages of the form, in a backwards direction
  });
  
  $('.back-arrow').on('click', function(){
    switch(true){
      case $('.seventhPage').hasClass("collapse.show") && $("#teacher-signup-form").hasClass("collapse.show"):
// This restores the forwards arrow since we are going back in the form
        $(".front-arrow").addClass("collapse.show");
        $(".front-arrow").removeClass("collapse");
      
      case $('.seventhPage').hasClass("collapse.show"):
        $(".seventhPage").removeClass("collapse.show");
        $(".seventhPage").addClass("collapse");
        $(".sixthPage").addClass("collapse.show");
        $(".sixthPage").removeClass("collapse");
        break;
      
      case $('.sixthPage').hasClass("collapse.show") && $("#student-signup-form").hasClass("collapse.show"):
        // This restores the forwards arrow since we are going back in the form
        $(".front-arrow").addClass("collapse.show");
        $(".front-arrow").removeClass("collapse");
        
      case $('.sixthPage').hasClass("collapse.show") :
        $(".sixthPage").removeClass("collapse.show");
        $(".sixthPage").addClass("collapse");
        $(".fifthPage").addClass("collapse.show");
        $(".fifthPage").removeClass("collapse");
        break;

      case $('.fifthPage').hasClass("collapse.show"):
        $(".fifthPage").removeClass("collapse.show");
        $(".fifthPage").addClass("collapse");
        $(".fourthPage").addClass("collapse.show");
        $(".fourthPage").removeClass("collapse");
        break;

      case $('.fourthPage').hasClass("collapse.show"):
        $(".fourthPage").removeClass("collapse.show");
        $(".fourthPage").addClass("collapse");
        $(".thirdPage").addClass("collapse.show");
        $(".thirdPage").removeClass("collapse");
        break;

      case $('.thirdPage').hasClass("collapse.show"):
        
        $(".thirdPage").removeClass("collapse.show");
        $(".thirdPage").addClass("collapse");
        $(".secondPage").addClass("collapse.show");
        $(".secondPage").removeClass("collapse");

      case $('.secondPage').hasClass("collapse.show"):
        $('.secondPage').addClass("collapse");
        $('.secondPage').removeClass("collapse.show");
        $(".firstPage").addClass("collapse.show");
        $(".firstPage").removeClass("collapse");
// backwards arrow will disappear on first page of form 
        $(".back-arrow").addClass("collapse");
        $(".back-arrow").collapseClass("collapse.show");
        break;

    }
  });
// This goes through the 3 different pages of the form, in a forwards direction
  $('.front-arrow').on('click', function(){
    switch(true){
      case $('.sixthPage').hasClass("collapse.show") && $("#teacher-signup-form").hasClass("collapse.show") :
        //forwards arrow will disappear since this is the last page
        $(".front-arrow").removeClass("collapse.show");
        $(".front-arrow").addClass("collapse");

      case $('.sixthPage').hasClass("collapse.show"):
        $(".sixthPage").removeClass("collapse.show");
        $(".sixthPage").addClass("collapse");
        $(".seventhPage").addClass("collapse.show");
        $(".seventhPage").removeClass("collapse");
        break;
      
      case $('.fifthPage').hasClass("collapse.show") &&  $("#student-signup-form").hasClass("collapse.show"):
        //forwards arrow will disappear since this is the last page
        $(".front-arrow").removeClass("collapse.show");
        $(".front-arrow").addClass("collapse");
      
      case $('.fifthPage').hasClass("collapse.show"):
        $(".fifthPage").removeClass("collapse.show");
        $(".fifthPage").addClass("collapse");
        $(".sixthPage").addClass("collapse.show");
        $(".sixthPage").removeClass("collapse");
        break;

      case $('.fourthPage').hasClass("collapse.show"):
        $(".fourthPage").removeClass("collapse.show");
        $(".fourthPage").addClass("collapse");
        $(".fifthPage").addClass("collapse.show");
        $(".fifthPage").removeClass("collapse");
        break;

      case $('.thirdPage').hasClass("collapse.show"):
        $(".thirdPage").removeClass("collapse.show");
        $(".thirdPage").addClass("collapse");
        $(".fourthPage").addClass("collapse.show");
        $(".fourthPage").removeClass("collapse");
        break;

      case $('.secondPage').hasClass("collapse.show"):
        $('.secondPage').addClass("collapse");
        $('.secondPage').removeClass("collapse.show");

        $(".thirdPage").addClass("collapse.show");
        $(".thirdPage").removeClass("collapse");
        break;
      case $('.firstPage').hasClass("collapse.show") :

        $(".firstPage").removeClass("collapse.show");
        $(".firstPage").addClass("collapse");
        $(".secondPage").addClass("collapse.show");
        $(".secondPage").removeClass("collapse");
// backwards arrow will disappear on first page of form 
        $(".back-arrow").removeClass("collapse");
        $(".back-arrow").addClass("collapse.show");
        break;
    }
  });