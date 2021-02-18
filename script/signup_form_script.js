
$('#student-signup-btn').on('click',function() {
  if($("#student-signup-form").hasClass("show")){

  } else {
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
/*prevents user from moving on in student form unless they have inputs 
on the first page by disabling the front-arrow button*/
    (function () {
      $('#student-signup-form').keyup(function() {
          let empty = false;
          $('#studentFirstName, #studentLastName, #studentInputEmail').each(function() {
              if ($(this).val().length == '0') {
                  empty = true;
              }
          });

          if (empty) {
              $('#student-front-arrow-btn').prop('disabled', true);
          } else {
              $('#student-front-arrow-btn').prop('disabled', false);
          }
      });
    })()
  }
});

// teacher signup button actions
$('#teacher-signup-btn').on('click',function() {
  if($("#teacher-signup-form").hasClass("show")){

  } else {
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
    /* This goes through the 3 different pages 
    of the form, in a backwards direction */
/*prevents user from moving on in student form unless they have inputs 
on the first page by disabling the front-arrow button*/
    (function () {
      $('#teacher-signup-form').keyup(function() {
          let empty = false;
          $('#teacherFirstName, #teacherLastName, #teacherInputEmail').each(function() {
              if ($(this).val().length == '0') {
                  empty = true;
              }
          });

          if (empty) {
              $('#teacher-front-arrow-btn').prop('disabled', true);
          } else {
              $('#teacher-front-arrow-btn').prop('disabled', false);
          }
      });
    })()
  }
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
//re-disables the front-arrow button to validate inputs!
    $('#student-front-arrow-btn').prop('disabled', true);

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

/*disable student front button unless it meets 
certain input requirements */
        $(document).ready(function () {
          let empty = true;
          $('#student-signup-form').keyup(function() {
              $('#studentInputAddress, #studentInputAddress2, #studentInputCity, #studentInputZip').each(function() {
                if($(this).val().length == '0'){
                  empty = true;
                } else{
                  empty = false;
                }
              });

              if (verifyDropdown() || empty) {
                $('#student-front-arrow-btn').prop('disabled', true);
              } else {
                $('#student-front-arrow-btn').prop('disabled', false);
              }
          });

          function verifyDropdown() {
            if ($('#studentInputState').val() == '') { 
              return true;
          
            } else {
              return false;
            }
          }

          $('#studentInputState').change(function() {
              if (verifyDropdown() || empty) {
                  $('#student-front-arrow-btn').prop('disabled', true);
              } else {
                  $('#student-front-arrow-btn').prop('disabled', false);
              }
          });

          
        });
        
        break;
  

      case $('.firstPage').hasClass("show"):
        $(".firstPage").collapse("hide");
        setTimeout(function(){
          $(".secondPage").collapse("show");
        }, 350)
// backwards arrow will disappear on first page of form 
        $(".back-arrow").collapse("show");

/*disable front button unless it meets 
certain input requirements */
        $(document).ready(function () {
          $('#student-signup-form').keyup(function() {
            let empty = false;
            $('#studentInputUserName, #studentInputPassword').each(function() {
                if ($(this).val().length == '0') {
                    empty = true;
                }
            });
  
            if (empty) {
                $('#student-front-arrow-btn').prop('disabled', true);
            } else {
                $('#student-front-arrow-btn').prop('disabled', false);
            }
          });
        });
    break;
  }
})

