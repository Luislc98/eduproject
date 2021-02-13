$('#student-signup-btn').on('click',function() {
  setTimeout(function(){
    $("#teacher-signup-form").collapse("hide");
  }, 350);
      $("#student-signup-form").collapse("show");
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
    setTimeout(function(){
     $("#teacher-signup-form").collapse("show");
    }, 350);
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
        setTimeout(function(){
          $(".sixthPage").collapse("show");
        }, 350);
        break
      
      case $('.sixthPage').hasClass("show") && $("#student-signup-form").hasClass("show"):
      // This restores the forwards arrow since we are going back in the form
        $(".front-arrow").collapse("show");
        
      case $('.sixthPage').hasClass("show"):
        $(".sixthPage").collapse("hide");
        setTimeout(function(){
          $(".fifthPage").collapse("show");
        }, 350);
        break;

      case $('.fifthPage').hasClass("show"):
        $(".fifthPage").collapse("hide");
        setTimeout(function(){
          $(".fourthPage").collapse("show");
        }, 350);
        break;

      case $('.fourthPage').hasClass("show"):
        $(".fourthPage").collapse("hide");
        setTimeout(function(){
          $(".thirdPage").collapse("show");
        }, 350);
        break;

      case $('.thirdPage').hasClass("show"):
        $(".thirdPage").collapse("hide");
        setTimeout(function(){
          $(".secondPage").collapse("show");
        }, 350);
        break;

      case $('.secondPage').hasClass("show"):
        $(".secondPage").collapse("hide");
        setTimeout(function(){
          $(".firstPage").collapse("show");
        }, 350);
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
        setTimeout(function(){
          $(".seventhPage").collapse("show");
        }, 350);
        break;
      
      case $('.fifthPage').hasClass("show") &&  $("#student-signup-form").hasClass("show"):
        //forwards arrow will disappear since this is the last page
        $(".front-arrow").collapse("hide");
      
      case $('.fifthPage').hasClass("show"):
        $(".fifthPage").collapse("hide");
        setTimeout(function(){
          $(".sixthPage").collapse("show");
        }, 350);
        break;

      case $('.fourthPage').hasClass("show"):
        
        $(".fourthPage").collapse("hide");
        setTimeout(function(){
          $(".fifthPage").collapse("show");
        }, 350);
        break;

      case $('.thirdPage').hasClass("show"):
        $(".thirdPage").collapse("hide");
        setTimeout(function(){
          $(".fourthPage").collapse("show");
        }, 350);
        break;

      case $('.secondPage').hasClass("show"):
        $(".secondPage").collapse("hide");
        setTimeout(function(){
          $(".thirdPage").collapse("show");
        }, 350);
        break;
  
        
      case $('.firstPage').hasClass("show"):
        $(".firstPage").collapse("hide");
        setTimeout(function(){
          $(".secondPage").collapse("show");
        }, 350)
// backwards arrow will disappear on first page of form 
        $(".back-arrow").collapse("show");
        break;
    }
  });

//This is to ensure that the user cannot move forward in the form unless they have typed an input. 
//This is done by disabling the front arrow button completely!

function validateInputs(){
  var disableButton = false;
  var val1 = $("#firstName").val();
  var val2 = $("#lastName").val();
  var val3 = $("#inputEmail").val();
  var val4 = $("#inputUserName").val();
  var val5 = $("#inputPassword").val();
  var val6 = $("#inputAddress").val();
  var val7 = $("#inputAddress2").val();
  var val8 = $("#inputCity").val();
  var val9 = $("#inputState").val();
  var val10 = $("#inputZip").val();
  var val11 = $("#DOB").val();
  var val12 = $("#education").val();
  var val13 = $("#inputSubject").val();
  var val14 = $("#inputInstitution").val();
  var val15 = $("#inputExperience").val();
  
  switch(true){
    case $('.firstPage').hasClass("show"):
      if(val1.length == 0 || val2.length == 0|| val3.length == 0)
      disableButton = true;
      $('.front-arrow').attr('disabled', disableButton);
      break; 
    case $('.secondPage').hasClass("show"):
      if(val4.length == 0 || val5.length == 0)
      disableButton = true;
      $('.front-arrow').attr('disabled', disableButton);
      break;
    case $('.thirdPage').hasClass("show"):
      if(val6.length == 0 || val7.length == 0 || val8.length == 0 || val9.length == 0 || val10.length == 0)
      disableButton = true;
      $('.front-arrow').attr('disabled', disableButton);
      break;
    case $('.fourthPage').hasClass("show"):
      if(val11.length == 0 || val12.length == 0)
      disableButton = true;
      $('.front-arrow').attr('disabled', disableButton);
      break;
      
    case $('.thirdPage').hasClass("show"): 

      break;
    case $('.fourthPage').hasClass("show"):
      
      break;
    case $('.fifthPage').hasClass("show"):
      
      break;
  }


}

$("#val1").keyup(function(event){
  validateInputs();
});

$("#val2").keyup(function(event) {
  validateInputs();
});


