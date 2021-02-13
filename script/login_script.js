$('#student-login-btn').on('click',function() {
    $("#student-login-form").addClass("collapse.show");
    $("#student-login-form").removeClass("collapse");
    $("#teacher-login-form").removeClass("collapse.show");
    $("#teacher-login-form").addClass("collapse");
});

$('#teacher-login-btn').on('click',function() {
    $("#teacher-login-form").addClass("collapse.show");
    $("#teacher-login-form").removeClass("collapse");
    $("#student-login-form").removeClass("collapse.show");
    $("#student-login-form").addClass("collapse");
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