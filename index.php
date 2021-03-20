<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://kit.fontawesome.com/e960caa943.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Required stylesheets -->
    <link rel="stylesheet" href="styles/navbar_sidebar_styles.css"> 
    <link rel="stylesheet" href="styles/index_styles.css">
    <link rel="stylesheet" href="styles/signup_form.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
  </head>
<body>
<div class= "wrapper" id="homepage-background">
  <div class="sidebar-center">
    <div id="dark-background" class="dark-background">
    </div>  
    <nav id = "sidebar" class = "active">
      <div class="sidebar-header">
        <h3> Logo <h3>
      </div>
      <ul class = "list-unstyled sidebar-components">
        <li class="sidebar-dropdown">
          <a href = "#homeSubmenu" data-toggle="collapse" aria-expanded="false" class = "dropdown-toggle"> Home </a>
            <ul class = "collapse list-unstyled" id="homeSubmenu">
              <li> 
                <a href = "#"> Home 1 </a>
              </li>
              <li> 
                <a href = "#"> Home 2 </a>
              </li>
              <li> 
                <a href = "#"> Home 3</a>
              </li>
              <li> 
                <a href = "#"> Home 4 </a>
              </li>
              <li> 
                <a href = "#"> Home 5 </a>
              </li>
            </ul>
            <li class="sidebar-dropdown">
              <a href = "#pageSubmenu" data-toggle="collapse" aria-expanded="false" class = "dropdown-toggle"> Courses </a>
                  <ul class = "collapse list-unstyled" id="pageSubmenu">
                    <li> 
                      <a href = "#"> Page 1 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 2 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 3 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 4 </a>
                    </li>
                    <li> 
                      <a href = "#"> Page 5</a>
                    </li>
                  </ul>
              </li>
        <li>
          <a href="#"> About </a>
        </li>
        <li>
          <a href="#"> Scholars </a>
        </li>
        <li>
          <a href="#"> Educators </a>
        </li>
        <li>
          <a href="#"> Contact </a>
        </li>
      </ul>
    </nav>
  </div>
  <div>
    <nav class="sidebarButton">
      <!-- Bootstrap navbar modification to have a toggle button to hide or show the sidebar-->
        <button type="button" id="sidebarCollapse" class = "btn shadow-none active">
            <span><i class="fas fa-chevron-right icon-default"></i></span>
          </button>
          <!-- End of Bootstrap navbar modification--> 
    </nav>
    <!--Bootstrap navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a href="#" class="title"> visualum </a>
      <button id="nav-button" class="container-fluid navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span id="nav-icon" class="fa fa-bars"></span>
      </button>
          
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-fill">
              <li class="nav-item flex-fill">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item flex-fill">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item flex-fill">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item flex-fill">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item flex-fill">
                <a class="nav-link" href="#">Link</a>
              </li>
              <div class="d-flex justify-content-end signout-btn">
                <button id="signout-btn" class="btn btn-outline-light btn-lg justify-content-end">
                  <span>Sign out</span>
                </button>
              </div>
              <form id="search-box" class="form-inline d-flex justify-content-center">
                <input id="search-bar" class="form-control mr-sm-2 shadow-none" type="search" placeholder="Search" aria-label="Search">
                <button id = "search-btn" class="btn shadow-none" type="button">
                  <span id="search-icon" class= "fa fa-search"></span>
                </button>
              </form>
            </ul> 
      </div>
    </nav>

    <div id ="content">
            <div id="top-spacing">
            </div>
            <div class="login-container text">
                <h2>A world class education for anyone, anywhere.</h2>
                <p class="text">Join Eureka to explore your educational journey</p>
                <p class="text"> Learning never ends. </p> <br>
                <button id="signup-btn" class="btn btn-outline-light btn-lg">  Sign Up  <span class="fa fa-caret-right"></span></button>
            </div>
          <br>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
      <!-- Bootstrap (carousel) slide show html code-->
    <div id="slideshow">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="styles/images/Mountain.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="styles/images/Rock.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="styles/images/Fog.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </div>
    <div id="fixed-container-forms" class="hidden">
      <div id="signup-dark-background"></div>  
      <div id="signup-forms" class="student-css">
        <h2 style="text-align: center;">Sign up as a...</h2>
        <br>
        <!-- These buttons toggle between the student sign-up and the teacher sign-up -->
        <div class="signup-btns d-flex">
          <button id="student-signup-btn" type="button" class="btn flex-fill col-6 student-default" data-toggle= "collapse" data-target="#signup-options-Student" aria-expanded="false">
            <span>Student</span>
          </button>

          <button id="teacher-signup-btn" type="button" class="btn flex-fill col-6 teacher-default" data-toggle= "collapse" data-target="#signup-options-Teacher" aria-expanded="false">
            <span>Teacher</span>
          </button>
        </div>
        <!-- Google, Facebook, and email signup option -->
        <div id="signup-options-Student" class= "collapse signup-options justify-content-center">
          
          <button id="customBtnStudent" class="customBtn customGPlusSignIn d-flex justify-content-center">
            <span class="signup-google-icon"></span>
            <span class="signup-google-text">Join using Google</span>
          </button>
 
          <button id ="fb-btn-Student" class="fb-btn d-flex justify-content-center">
            <span class="signup-facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            <span class="signup-facebook-text">Join using Facebook</span>
          </button>
          <button id="email-btn-Student" class="email-btn d-flex justify-content-center" type="button" data-toggle= "collapse" data-target="#student-signup-form" aria-expanded="false">
            <span class="signup-email-text">Join using email</span>
          </button>
        </div>
        <div id="signup-options-Teacher" class= "signup-options collapse justify-content-center">
          
          <button id="customBtnTeacher" class="customBtn customGPlusSignIn d-flex justify-content-center">
            <span class="signup-google-icon"></span>
            <span class="signup-google-text">Join using Google</span>
          </button>
 
          <button id ="fb-btn-Teacher" class="fb-btn d-flex justify-content-center">
            <span class="signup-facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            <span class="signup-facebook-text">Join using Facebook</span>
          </button>
          <button id="email-btn-Teacher" class="email-btn d-flex justify-content-center" type="button" data-toggle= "collapse" data-target="#teacher-signup-form" aria-expanded="false">
            <span class="signup-email-text">Join using email</span>
          </button>
        </div>
        <!-- Student signup form-->
        <form id="student-signup-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
          <div class="form-col">
            <label for="studentName">Name</label> 
            <div class="form-row" id="studentName">
              <div class="form-group col-6">
                <input type="text" class="form-control" id="studentFirstName" name="first_name"  required>
                <label for="studentFirstName" style="font-size: 0.9em"> First <label>
              </div>
          
              <div class="form-group col-6">
                <input type="text" class="form-control" id="studentLastName" name="last_name"  required>
                <label for="studentLastName" style="font-size: 0.9em"> Last <label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="studentInputEmail">Email</label>
            <input type="email" onchange="checkStudentEmail()" name='email' class="form-control" id="studentInputEmail" placeholder="Ex: johnDoe@gmail.com, etc." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            <span id="student_Email_Message" class="invalid_inputs"></span>
          </div>
          
          <div class="form-row">
            <div class="form-group col-12">
              <label for="studentInputUserName">Username</label>
              <input type="text" name='username' class="form-control" id="studentInputUserName" required>
            </div>
                
            <div class="form-group col-12">
              <label for="studentInputPassword">Password</label>
              <input type="password" name='password' class="form-control" id="studentInputPassword" required>
            </div>
          </div>

          <div class="form-group">
            <label for="studentInputAddress">Address</label>
            <input type="text" name='homeaddress' class="form-control" id="studentInputAddress" required>
          </div>
              
          <div class="form-group">
            <label for="studentInputAddress2">Address 2</label>
            <input type="text" name='homeaddress2' class="form-control" id="studentInputAddress2">
          </div>

          <div class="form-col">
            <div class="form-group">
              <label for="studentInputCity">City</label>
              <input type="text" name='addresscity'  class="form-control" id="studentInputCity" required>
            </div>

            <div class="form-row">
              <div class="form-group col-6">
                <label for="studentInputState">State</label>
                <select id="studentInputState" name='addressstate' class="form-control" required>
                  <option value="" selected="selected">Choose...</option>
                  <option value="AL">Alabama (AL)</option>
                  <option value="AK">Alaska (AK)</option>
                  <option value="AZ">Arizona (AZ)</option>
                  <option value="AR">Arkansas (AR)</option>
                  <option value="CA">California (CA)</option>
                  <option value="CO">Colorado (CO)</option>
                  <option value="CT">Connecticut (CT)</option>
                  <option value="DE">Delaware (DE)</option>
                  <option value="DC">District Of Columbia (DC)</option>
                  <option value="FL">Florida (FL)</option>
                  <option value="GA">Georgia (GA)</option>
                  <option value="HI">Hawaii (HI)</option>
                  <option value="ID">Idaho (ID)</option>
                  <option value="IL">Illinois (IL)</option>
                  <option value="IN">Indiana (IN)</option>
                  <option value="IA">Iowa (IA)</option>
                  <option value="KS">Kansas (KS)</option>
                  <option value="KY">Kentucky (KY)</option>
                  <option value="LA">Louisiana (LA)</option>
                  <option value="ME">Maine (ME)</option>
                  <option value="MD">Maryland (MD)</option>
                  <option value="MA">Massachusetts (MA)</option>
                  <option value="MI">Michigan (MI)</option>
                  <option value="MN">Minnesota (MN)</option>
                  <option value="MS">Mississippi (MS)</option>
                  <option value="MO">Missouri (MO)</option>
                  <option value="MT">Montana (MT)</option>
                  <option value="NE">Nebraska (NE)</option>
                  <option value="NV">Nevada (NV)</option>
                  <option value="NH">New Hampshire (NH)</option>
                  <option value="NJ">New Jersey (NJ)</option>
                  <option value="NM">New Mexico (NM)</option>
                  <option value="NY">New York (NY)</option>
                  <option value="NC">North Carolina (NC)</option>
                  <option value="ND">North Dakota (ND)</option>
                  <option value="OH">Ohio (OH)</option>
                  <option value="OK">Oklahoma (OK)</option>
                  <option value="OR">Oregon (OR)</option>
                  <option value="PA">Pennsylvania (PA)</option>
                  <option value="RI">Rhode Island (RI)</option>
                  <option value="SC">South Carolina (SC)</option>
                  <option value="SD">South Dakota (SD)</option>
                  <option value="TN">Tennessee (TN)</option>
                  <option value="TX">Texas (TX)</option>
                  <option value="UT">Utah (UT)</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                  <option value="AS">American Samoa (AS)</option>
                  <option value="GU">Guam (GU)</option>
                  <option value="MP">Northern Mariana Islands (MP)</option>
                  <option value="PR">Puerto Rico (PR)</option>
                  <option value="UM">United States Minor Outlying Islands (UM)</option>
                  <option value="VI">Virgin Islands (VI)</option>
                  <option value="AA">Armed Forces Americas (AA)</option>
                  <option value="AP">Armed Forces Pacific (AP)</option>
                  <option value="AE">Armed Forces Others (AE)</option>
                </select>
              </div>
              <div class="form-group col-6">
                <label for="studentInputZip">Zip</label>
                <input type="number" name='addresszip' class="form-control" id="studentInputZip" required>
              </div>
            </div>
          </div>

          
            <div class="d-flex flex-column">  
              <div class="form-group flex-fill">
                <label for="studentDOB">Date of Birth</label>
                <input type="date" onchange="checkStudentDate()" min="<?php echo date("1900-11-11"); ?>" max="<?php echo date("Y-m-d"); ?>" id="studentDOB" name="DOB" class= "form-control" required>
                <span id="student_DOB_Invalid" class="invalid_inputs"><span>
              </div>
                
              <div class="form-group flex-fill">
                <label for="studentEducation">Highest Education Level</label>
                <select id="studentEducation" name="education_level" class= "form-control" required>
                    <option value="" selected="selected" disabled="disabled">-- Select one --</option>
                    <option value="No formal education">No formal education</option>
                    <option value="Primary education">Primary education</option>
                    <option value="Secondary education">Secondary education or high school</option>
                    <option value="GED">GED</option>
                    <option value="Vocational qualification">Vocational qualification</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate or higher">Doctorate or higher</option> 
                </select>
                
              </div>
            </div>


          <div class="form-group contact">
          <p>Would you like to receive updates about your progress?</p>
            <input name ="progressUpdates" value='text' type="radio" checked>
            <label>Yes, text message</label><br>
            <input name ="progressUpdates" value='email' type="radio">
            <label>Yes, e-mail</label><br>
            <input name ="progressUpdates" value='text and email' type="radio">
            <label>Yes, text and email</label><br>
            <input name ="progressUpdates" value='no' type="radio">
            <label>No</label><br>
          </div>

          <div class="form-group contact">
          <p>Would you like to receive updates about newletters on new features or new ways of earning?</p>
              <input name="newsletterUpdates" value='text' type="radio" checked>
              <label>Yes, text message</label><br>
              <input name="newsletterUpdates" value='email' type="radio" >
              <label>Yes, e-mail</label><br>
              <input name="newsletterUpdates" value='text and email' type="radio" >
              <label>Yes, text and email</label><br>
              <input name="newsletterUpdates" value='no' type="radio" >
              <label>No</label><br>
          </div>
          <!-- These buttons allow you to navigate the form-->
          <div class="form-nav-btns d-flex justify-content-end"> 
            <button id="student-back-arrow-btn" type="button" class="btn back-arrow" data-bs-toggle= "collapse" aria-expanded="false">
              <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            </button>
            <button id="student-front-arrow-btn"type="button" class="btn front-arrow" data-bs-toggle= "collapse" aria-expanded="false" disabled = "disabled">
              <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </button>
          </div>
          

          <!-- This button is to submit the form to the datebase-->
          <div class="d-flex justify-content-center">        
            <button type="submit" name='student_signup' class="btn btn-primary">Sign up</button>
          </div>

        </form>
        <!-- Teacher signup form-->
        <form id="teacher-signup-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" enctype="multipart/form-data">
          <div class="form-col">
            <label for="teacherName">Name</label>
              <div class="form-row" id="teacherName">
                <div class="form-group col-6">
                  <input type="text" class="form-control" id="teacherFirstName" name="teacher_first_name" required>
                  <label for="teacherFirstName" style="font-size: 0.9em"> First <label>
                </div>
          
                <div class="form-group col-6">
                  <input type="text" class="form-control" id="teacherLastName" name="teacher_last_name" required>
                  <label for="teacherLastName" style="font-size: 0.9em"> Last <label>
                </div>
              </div>
          </div>

          <div class="form-group">
            <label for="teacherInputEmail">Email</label>
            <input type="email" onchange="checkTeacherEmail()" class="form-control" name='teacher_email' id="teacherInputEmail" placeholder= "Ex: johnDoe@gmail.com, etc." required>
            <span id="teacher_Email_Message" class="invalid_inputs"></span>
          </div>

          <div class="form-row">

            <div class="form-group col-12">
              <label for="teacherInputUserName">Username</label>
              <input type="text" name='teacher_username' class="form-control" id="teacherInputUserName" required>
            </div>
                
            <div class="form-group col-12">
              <label for="teacherInputPassword">Password</label>
              <input type="password" name='teacher_password' class="form-control" id="teacherInputPassword" required>
            </div>
          
          </div>

          <div class="form-group">
            <label for="teacherInputAddress">Address</label>
            <input type="text" name='teacher_homeaddress' class="form-control" id="teacherInputAddress" required>
          </div>

          <div class="form-group">
            <label for="teacherInputAddress2">Address 2</label>
            <input type="text" name='teacher_homeaddress2' class="form-control" id="teacherInputAddress2">
          </div>

          <div class="form-col">
          
            <div class="form-group">
              <label for="teacherInputCity">City</label>
              <input type="text" name='teacher_addresscity' class="form-control" id="teacherInputCity" required>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <label for="teacherInputState">State</label>
                  <select id="teacherInputState" name='teacher_addressstate' class="form-control" required>
                    <option value="" selected>Choose...</option>
                    <option value="AL">Alabama (AL)</option>
                    <option value="AK">Alaska (AK)</option>
                    <option value="AZ">Arizona (AZ)</option>
                    <option value="AR">Arkansas (AR)</option>
                    <option value="CA">California (CA)</option>
                    <option value="CO">Colorado (CO)</option>
                    <option value="CT">Connecticut (CT)</option>
                    <option value="DE">Delaware (DE)</option>
                    <option value="DC">District Of Columbia (DC)</option>
                    <option value="FL">Florida (FL)</option>
                    <option value="GA">Georgia (GA)</option>
                    <option value="HI">Hawaii (HI)</option>
                    <option value="ID">Idaho (ID)</option>
                    <option value="IL">Illinois (IL)</option>
                    <option value="IN">Indiana (IN)</option>
                    <option value="IA">Iowa (IA)</option>
                    <option value="KS">Kansas (KS)</option>
                    <option value="KY">Kentucky (KY)</option>
                    <option value="LA">Louisiana (LA)</option>
                    <option value="ME">Maine (ME)</option>
                    <option value="MD">Maryland (MD)</option>
                    <option value="MA">Massachusetts (MA)</option>
                    <option value="MI">Michigan (MI)</option>
                    <option value="MN">Minnesota (MN)</option>
                    <option value="MS">Mississippi (MS)</option>
                    <option value="MO">Missouri (MO)</option>
                    <option value="MT">Montana (MT)</option>
                    <option value="NE">Nebraska (NE)</option>
                    <option value="NV">Nevada (NV)</option>
                    <option value="NH">New Hampshire (NH)</option>
                    <option value="NJ">New Jersey (NJ)</option>
                    <option value="NM">New Mexico (NM)</option>
                    <option value="NY">New York (NY)</option>
                    <option value="NC">North Carolina (NC)</option>
                    <option value="ND">North Dakota (ND)</option>
                    <option value="OH">Ohio (OH)</option>
                    <option value="OK">Oklahoma (OK)</option>
                    <option value="OR">Oregon (OR)</option>
                    <option value="PA">Pennsylvania (PA)</option>
                    <option value="RI">Rhode Island (RI)</option>
                    <option value="SC">South Carolina (SC)</option>
                    <option value="SD">South Dakota (SD)</option>
                    <option value="TN">Tennessee (TN)</option>
                    <option value="TX">Texas (TX)</option>
                    <option value="UT">Utah (UT)</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                    <option value="AS">American Samoa (AS)</option>
                    <option value="GU">Guam (GU)</option>
                    <option value="MP">Northern Mariana Islands (MP)</option>
                    <option value="PR">Puerto Rico (PR)</option>
                    <option value="UM">United States Minor Outlying Islands (UM)</option>
                    <option value="VI">Virgin Islands (VI)</option>
                    <option value="AA">Armed Forces Americas (AA)</option>
                    <option value="AP">Armed Forces Pacific (AP)</option>
                    <option value="AE">Armed Forces Others (AE)</option>
                  </select>
              </div>
              <div class="form-group col-6">
                <label for="teacherInputZip">Zip</label>
                <input type="number" name='teacher_addresszip' class="form-control" id="teacherInputZip" required>
              </div>
            </div>
          </div>
        

          <div class="d-flex flex-column">          
            <div class="form-group flex-fill">
              <label for="teacherDOB">Date of Birth</label>
              <input type="date"  id="teacherDOB" name="teacher_DOB" class= "form-control" required>
              <span id="teacher_DOB_Invalid" class="invalid_inputs"><span>
            </div>

            <div class="form-group flex-fill">
              <label for="teacherEducation">Highest Education Level</label>
                <select id="teacherEducation" name="teacher_education_level" class= "form-control" required>
                  <option value="" selected="selected" disabled="disabled">-- Select one --</option>
                  <option value="No formal education">No formal education</option>
                  <option value="Primary education">Primary education</option>
                  <option value="Secondary education">Secondary education or high school</option>
                  <option value="GED">GED</option>
                  <option value="Vocational qualification">Vocational qualification</option>
                  <option value="Bachelor's degree">Bachelor's degree</option>
                  <option value="Master's degree">Master's degree</option>
                  <option value="Doctorate or higher">Doctorate or higher</option>    
                </select>
            </div>
          </div>

        
          <div class="form-group">
            <label for="Resume">Upload an your Resume</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
            <input type="file" name='teacher_resume' class="form-control-file" id="Resume">
          </div>

          <div class="form-group">
            <label for="teacherInputSubject">What subject do you primarily want to teach?</label>
            <input type="text" name='subject_area' class="form-control" id="teacherInputSubject" required>
          </div>

          <div class="form-group">
            <label for="teacherInputInstitution">What institution do you teach at?</label>
            <input type="text" name='institution_name' class="form-control" id="teacherInputInstitution" required>
          </div>

          <div class="form-group">
            <label for="teacherInputExperience">How many years of teaching experience do you have?</label>
            <input type="number" name='teaching_exp'  class="form-control" id="teacherInputExperience" required>
          </div>

          <div class="form-group contact">
            <p>Would you like to receive updates about your progress?</p>
              <input name ="progressUpdates" type="radio" checked>
              <label>Yes, text message</label><br>
              <input name ="progressUpdates" type="radio">
              <label>Yes, e-mail</label><br>
              <input name ="progressUpdates" type="radio">
              <label>Yes, text and email</label><br>
              <input name ="progressUpdates" type="radio">
              <label>No</label><br>
            </div>

            <div class="form-group contact">
            <p>Would you like to receive updates about newletters on new features or new ways of earning?</p>
                <input name="newsletterUpdates" type="radio" checked>
                <label>Yes, text message</label><br>
                <input name="newsletterUpdates" type="radio" >
                <label>Yes, e-mail</label><br>
                <input name="newsletterUpdates" type="radio" >
                <label>Yes, text and email</label><br>
                <input name="newsletterUpdates" type="radio" >
                <label>No</label><br>
            </div>
          <!-- These buttons allow you to navigate the form-->
          <div class="form-nav-btns d-flex justify-content-end "> 
            <button id="teacher-back-arrow-btn" type="button" class="btn back-arrow" data-bs-toggle= "collapse" aria-expanded="false">
              <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
            </button>
            <button id="teacher-front-arrow-btn" type="button" class="btn front-arrow" data-bs-toggle= "collapse" aria-expanded="false" disabled = "disabled">
              <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </button>
          </div>
          <!-- This button is to submit the form to the datebase--> 
          <div class="d-flex justify-content-center">        
            <button type="submit" name='teacher_signup' class="btn btn-primary">Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="script/index_script.js"></script>
<script src="script/navbar_sidebar.js"></script>
<script src="script/signup_form.js"></script>
<script>startApp();</script>
</body>
</html>
