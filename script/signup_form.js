
$("#student-signup-btn").on('click', function(){
  if($("#teacher-signup-form").hasClass("show")){
    $("#teacher-signup-form").removeClass("show");
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
  //changes the background color of teacher form and the color of the teacher button
  $("#student-signup-btn").removeClass("student-btn-css");
  $("#student-signup-btn").addClass("student-default");
  $("#teacher-signup-btn").removeClass("teacher-default");
  $("#teacher-signup-btn").addClass("teacher-btn-css");
  $("#signup-forms").addClass("teacher-css");
  $("#signup-forms").removeClass("student-css");
  
})
