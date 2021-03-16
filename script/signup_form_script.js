
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
  }
});

// Collapsing animation when user click on 
// the back arrow
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
  
// Collapsing animation when user 
//clicks on  the front arrow
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
})

// This function is meant to VALIDATE birth dates
// that are after the 1900s, but before the present day

function checkStudentDate() {
  let selectedText = document.getElementById('studentDOB').value;
  let selectedDate = new Date(selectedText);
  let past = new Date("1900-01-01");
  let now = new Date();
  if (selectedDate < past) {

   $('#student-front-arrow-btn').prop('disabled', true);
   $('#student_DOB_Invalid').text("*Please enter a more recent date")
  
  } else if (selectedDate > now) {
    
    $('#student-front-arrow-btn').prop('disabled', true);
    $('#student_DOB_Invalid').text("*Please enter a past date")
  
  }
  else if ($('#studentDOB').val() == ''){
    
    $('#student-front-arrow-btn').prop('disabled', true);
    $('#student_DOB_Invalid').text("*Please fill out this field"); 
  
  } 
  else if (selectedDate > past && selectedDate < now) {
    $('#student-front-arrow-btn').prop('disabled', false);
    $('#student_DOB_Invalid').hide()
  } else {
    $('#student_DOB_Invalid').text("*Please enter a valid date")
    $('#student-front-arrow-btn').prop('disabled', true);
  }
}

// This is to validate proper email format
// since this needs to be tied to 
// the specific page its found on
function checkStudentEmail(){
  var email = $("#studentInputEmail").val();
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (re.test(email)) {
    $('#student_Email_Message').hide();

  } else {
    $('#student_Email_Message').show();
    $('#student-front-arrow-btn').prop('disabled', true);
    $('#student_Email_Message').text("*Please enter a valid email")
    return true;
  }
}

/* prevents user from moving forward in the form if
 they haven't filled out inputs on STUDENT FORM. Also, allows
 users to move backward */

$(document).ready(function validateStudentInputs() {
  if($('#student-signup-form').hasClass("show")){
  //Student form  function definitions for validations
    function firstPageStudentValidate (){
      let empty = false;
        $('#studentFirstName, #studentLastName, #studentInputEmail').each(function (){
            if($(this).val() == '') {
              empty = true;
            } 

            if (empty){
              $('#student-front-arrow-btn').prop('disabled', true);
            }
        });

        $('#studentInputEmail').keyup(function(){
          checkStudentEmail();
        });

        if(empty || checkStudentEmail()){
          $('#student-front-arrow-btn').prop('disabled', true)
        } else {
          $('#student-front-arrow-btn').prop('disabled', false)
        }
    }

      function secondPageStudentValidate (){
        let empty = false;
        $('#studentInputUserName, #studentInputPassword').each(function() {
            if ($(this).val().length == '0') {
              empty = true;
            } else {
              
            }
        });

        if (empty) {
            $('#student-front-arrow-btn').prop('disabled', true);
        } else {
            $('#student-front-arrow-btn').prop('disabled', false);
        }  
      }
        
      function thirdPageStudentValidate (){

        function verifyDropdown() {
          if ($('#studentInputState').val() != '') { 
            return false;
        
          } else {
            return true;
          }
        }
          let empty = false;
            $('#studentInputAddress, #studentInputAddress2, #studentInputCity, #studentInputZip').each(function() {
              if($(this).val()== ''){
                empty = true;
              } else{
              }
            });

            if (verifyDropdown() || empty) {
              $('#student-front-arrow-btn').prop('disabled', true);
            } else {
              $('#student-front-arrow-btn').prop('disabled', false);
            }

        $('#studentInputState').change(function() {
          let empty = false;
            $('#studentInputAddress, #studentInputAddress2, #studentInputCity, #studentInputZip').each(function() {
              if($(this).val() == ''){
                empty = true;
              } else{
              }
            });
          
            if (verifyDropdown() || empty) {
                $('#student-front-arrow-btn').prop('disabled', true);
            } else {
                $('#student-front-arrow-btn').prop('disabled', false);
            }
        });


      }
        
      function fourthPageStudentValidate (){
        let empty = false;
        if ($('#studentDOB').val() == '') {
              empty = true;
            } else {
              
            }

        if (empty) {
            $('#student-front-arrow-btn').prop('disabled', true);
        } else {
          checkStudentDate();
        }
      }      

    /*These are the validation functions 
    being called given the page condition */
        switch (true){
          case $('.firstPage').hasClass("show"):
            if ($('#studentFirstName, #studentLastName, #studentInputEmail').val().length == '0'){
              $('#student-front-arrow-btn').prop('disabled', true);
            } else {
              firstPageStudentValidate(); 
              $('#studentInputEmail').keyup(function(){
                checkStudentEmail();
              });
            }
            
            firstPageStudentValidate(); 

          break;
    
          case $('.secondPage').hasClass("show"):

              if ($('#studentInputUserName, #studentInputPassword').val().length == '0'){
                $('#student-front-arrow-btn').prop('disabled', true);
              } else {
                secondPageStudentValidate(); 
              }

            $('#student-signup-form').keyup(function() {
              secondPageStudentValidate();
            });
          break;
            
          case $('.thirdPage').hasClass("show"):
    
            if ($('#studentInputAddress, #studentInputAddress2, #studentInputCity, #studentInputState, #studentInputZip').val() == ''){
              $('#student-front-arrow-btn').prop('disabled', true);
            } else{
              thirdPageStudentValidate();
            }
            $('#student-signup-form').keyup(function(){
            thirdPageStudentValidate();
            });
          break;
    
          case $('.fourthPage').hasClass("show"):

            if ($('#studentDOB').val() == ''){
              $('#student-front-arrow-btn').prop('disabled', true);
            } else{
              fourthPageStudentValidate();
            }

            $('#student-signup-form').keyup(function() {
            fourthPageStudentValidate();
          });
          break;
        } 
      } 
    setTimeout(validateStudentInputs, 340);
  });

/* prevents user from moving forward in the form, if
 they haven't filled out inputs on the Teacher FORM. 
 Also, allows users to move backward */

 $(document).ready(function validateTeacherInputs() {
  if($('#teacher-signup-form').hasClass("show")){
  //teacher form  function definitions for validations
  function checkTeacherEmail(){
    var email = $("#teacherInputEmail").val();
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (re.test(email)) {
      $('#teacher_Email_Message').hide();
  
    } else {
      $('#teacher_Email_Message').show();
      
      $('#teacher_Email_Message').text("*Please enter a valid email")
      return true;
    }
  }

  function checkTeacherDate() {
    let selectedText = document.getElementById('teacherDOB').value;
    let selectedDate = new Date(selectedText);
    let past = new Date("1900-01-01");
    let now = new Date();
    if (selectedDate < past) {
  
     $('#teacher-front-arrow-btn').prop('disabled', true);
     $('#teacher_DOB_Invalid').text("*Please enter a more recent date");
      return true;
    } else if (selectedDate > now) {
      
      $('#teacher-front-arrow-btn').prop('disabled', true);
      $('#teacher_DOB_Invalid').text("*Please enter a past date");
      return true;
    }
    else if ($('#teacherDOB').val() == ''){
      
      $('#teacher-front-arrow-btn').prop('disabled', true);
      $('#teacher_DOB_Invalid').text("*Please fill out this field"); 
      return true;
    } 
    else if (selectedDate > past && selectedDate < now) {
      $('teacher-front-arrow-btn').prop('disabled', true);
      $('#teacher_DOB_Invalid').hide();
      return false;
      
  
    } else {
      $('#teacher_DOB_Invalid').text("*Please enter a valid date");
      $('#teacher-front-arrow-btn').prop('disabled', true);
      return true;
    }
  }
    function firstPageTeacherValidate (){
      let empty = false;
        $('#teacherFirstName, #teacherLastName, #teacherInputEmail').each(function (){
            if($(this).val() == '') {
              empty = true;
            } 

            if (empty){
              $('#teacher-front-arrow-btn').prop('disabled', true);
            }
        });

        $('#teacherInputEmail').keyup(function(){
          checkTeacherEmail();
        });

        if(empty || checkTeacherEmail()){
          $('#teacher-front-arrow-btn').prop('disabled', true)
        } else {
          $('#teacher-front-arrow-btn').prop('disabled', false)
        }
    }

      function secondPageTeacherValidate (){
        let empty = false;
        $('#teacherInputUserName, #teacherInputPassword').each(function() {
            if ($(this).val().length == '0') {
              empty = true;
            } else {
              
            }
        });

        if (empty) {
            $('#teacher-front-arrow-btn').prop('disabled', true);
        } else {
            $('#teacher-front-arrow-btn').prop('disabled', false);
        }  
      }
        
      function thirdPageTeacherValidate (){

        function verifyDropdown() {
          if ($('#teacherInputState').val() != '') { 
            return false;
        
          } else {
            return true;
          }
        }
          let empty = false;
            $('#teacherInputAddress, #teacherInputAddress2, #teacherInputCity, #teacherInputZip').each(function() {
              if($(this).val()== ''){
                empty = true;
              } else{
              }
            });

            if (verifyDropdown() || empty) {
              $('#teacher-front-arrow-btn').prop('disabled', true);
            } else {
              $('#teacher-front-arrow-btn').prop('disabled', false);
            }

        $('#teacherInputState').change(function() {
          let empty = false;
            $('#teacherInputAddress, #teacherInputAddress2, #teacherInputCity, #teacherInputZip').each(function() {
              if($(this).val() == ''){
                empty = true;
              } else{
              }
            });
          
            if (verifyDropdown() || empty) {
                $('#teacher-front-arrow-btn').prop('disabled', true);
            } else {
                $('#teacher-front-arrow-btn').prop('disabled', false);
            }
        });


      }
        
      function fourthPageTeacherValidate (){
        function verifyEducationDropdown() {
          if ($('#teacherEducation').val() == '' || checkTeacherDate()) { 
            $('#teacher-front-arrow-btn').prop('disabled', true);
            return true;
        
          } else {
    
            return false;
          }
        }
        verifyEducationDropdown();
        
        

      }      

    /*These are the validation functions 
    being called given the page condition */
        switch (true){
          case $('.firstPage').hasClass("show"):
            if ($('#teacherFirstName, #teacherLastName, #teacherInputEmail').val().length == '0'){
              $('#teacher-front-arrow-btn').prop('disabled', true);
            } else {
              firstPageTeacherValidate(); 
              $('#teacherInputEmail').keyup(function(){
                checkTeacherEmail();
              });
            }
            
            firstPageTeacherValidate(); 

          break;
    
          case $('.secondPage').hasClass("show"):

              if ($('#teacherInputUserName, #teacherInputPassword').val().length == '0'){
                $('#teacher-front-arrow-btn').prop('disabled', true);
              } else {
                secondPageTeacherValidate(); 
              }

            $('#teacher-signup-form').keyup(function() {
              secondPageTeacherValidate();
            });
          break;
            
          case $('.thirdPage').hasClass("show"):
    
            if ($('#teacherInputAddress, #teacherInputAddress2, #teacherInputCity, #teacherInputState, #teacherInputZip').val() == ''){
              $('#teacher-front-arrow-btn').prop('disabled', true);
            } else{
              thirdPageTeacherValidate();
            }
            $('#teacher-signup-form').keyup(function(){
            thirdPageTeacherValidate();
            });
          break;
    
          case $('.fourthPage').hasClass("show"):

            if ($('#teacherDOB, #teacherEducation').val() == ''){
              $('#teacher-front-arrow-btn').prop('disabled', true);
            } else{

              fourthPageTeacherValidate();
            }

            $('#teacher-signup-form').keyup(function() {
            fourthPageTeacherValidate();
          });
          break;
          
          
        } 
      } 
    setTimeout(validateTeacherInputs, 340);
  });


