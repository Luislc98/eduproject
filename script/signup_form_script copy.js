$('#student-signup-btn').on('click',function() {
    $("#student-signup-form").collapse("show");
    $("#teacher-signup-form").collapse("hide");
//resets the form to the first page!
    $('.firstPage').collapse("show");
    $(".secondPage").collapse("hide");
    $(".thirdPage").collapse("hide");
    $(".fourthPage").collapse("hide");
    $(".fifthPage").collapse("hide");;
    $(".sixthPage").collapse("hide");
    $(".seventhPage").collapse("hide");
  //restores the front arrow
    $(".front-arrow").collapse("show");
  // backwards arrow will disappear on first page of form 
    $(".back-arrow").collapse("hide");

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
    $("#teacher-signup-form").collapse("show");
    $("#student-signup-form").collapse("hide");
//resets the form to the first page!
    $('.firstPage').collapse("show");
    $(".secondPage").collapse("hide");
    $(".thirdPage").collapse("hide");
    $(".fourthPage").collapse("hide");
    $(".fifthPage").collapse("hide");;
    $(".sixthPage").collapse("hide");
    $(".seventhPage").collapse("hide");

  //restores the front arrow
    $(".front-arrow").collapse("show");
  // backwards arrow will disappear on first page of form 
    $(".back-arrow").collapse("hide");
  
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
      case $('.seventhPage').hasClass("show") && $("#teacher-signup-form").hasClass("show"):
// This restores the forwards arrow since we are going back in the form
        $(".front-arrow").collapse("show");
      
      case $('.seventhPage').hasClass("show"):
        $(".seventhPage").collapse("hide");
        $(".sixthPage").collapse("show");
        break
      
      case $('.sixthPage').hasClass("show") && $("#student-signup-form").hasClass("show"):
      // This restores the forwards arrow since we are going back in the form
        $(".front-arrow").collapse("show");
        
      case $('.sixthPage').hasClass("show"):
        $(".sixthPage").collapse("hide");
        $(".fifthPage").collapse("show");
        break;

      case $('.fifthPage').hasClass("show"):
        $(".fifthPage").collapse("hide");
        $(".fourthPage").collapse("show");
        break;

      case $('.fourthPage').hasClass("show"):
        $(".fourthPage").collapse("hide");
        $(".thirdPage").collapse("show");
        break;

      case $('.thirdPage').hasClass("show"):
        $(".thirdPage").collapse("hide");
        $(".secondPage").collapse("show");

        break;

      case $('.secondPage').hasClass("show"):
        $(".secondPage").collapse("hide");
        $(".firstPage").collapse("show");
// backwards arrow will disappear on first page of form 
        $(".back-arrow").collapse("hide");
        break;
    }
  });

  // This goes through the 3 different pages of the form, in a forwards direction
  $('.front-arrow').on('click', function(){
    switch(true){
      case $('.sixthPage').hasClass("show") && $("#teacher-signup-form").hasClass("show") :
        //forwards arrow will disappear since this is the last page
        $(".front-arrow").collapse("hide");

      case $('.sixthPage').hasClass("show"):
        $(".sixthPage").collapse("hide");
        $(".seventhPage").collapse("show");
        break;
      
      case $('.fifthPage').hasClass("show") &&  $("#student-signup-form").hasClass("show"):
        //forwards arrow will disappear since this is the last page
        $(".front-arrow").collapse("hide");
      
      case $('.fifthPage').hasClass("show"):
        $(".fifthPage").collapse("hide");
        $(".sixthPage").collapse("show");
        break;

      case $('.fourthPage').hasClass("show"):
        $(".fourthPage").collapse("hide");
        $(".fifthPage").collapse("show");
        break;

      case $('.thirdPage').hasClass("show"):
        $(".thirdPage").collapse("hide");
        $(".fourthPage").collapse("show");
        break;

      case $('.secondPage').hasClass("show"):
        $(".secondPage").collapse("hide");
        $(".thirdPage").collapse("show");
        break;
        
      case $('.firstPage').hasClass("show") :

        $(".firstPage").collapse("hide");
        $(".secondPage").collapse("show");
// backwards arrow will disappear on first page of form 
        $(".back-arrow").collapse("show");
        break;
    }
  });