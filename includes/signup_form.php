<div id="fixed-container-forms" class="hidden">
      <div id="signup-dark-background"></div>  
      <div id="signup-forms" class="student-css">
        <h2 style="text-align: center;">Sign up as a...</h2>
        <br>
        <!-- These buttons toggle between the student sign-up and the teacher sign-up -->
        <div class="signup-btns d-flex">
          <button id="student-signup-btn" type="button" class="btn flex-fill col-6 student-default" data-bs-toggle= "collapse" data-bs-target="#signup-options-Student" aria-expanded="false">
            <span>Student</span>
          </button>

          <button id="teacher-signup-btn" type="button" class="btn flex-fill col-6 teacher-default" data-bs-toggle= "collapse" data-bs-target="#signup-options-Teacher" aria-expanded="false">
            <span>Teacher</span>
          </button>
          
        </div>
        <!-- Google, Facebook, and email signup option -->
        <div id="signup-options-Student" class= "collapse signup-options">
          
          <button id="customBtnStudent" class="customBtn customGPlusSignIn d-flex justify-content-center">
            <span class="google-icon"></span>
            <span class="google-text">Join using Google</span>
          </button>
 
          <button id ="fb-btn-Student" class="fb-btn d-flex justify-content-center">
            <span class="facebook-icon" style="font-size: 1.1rem"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            <span class="facebook-text">Join using Facebook</span>
          </button>

          <button id="email-btn-Student" class="email-btn d-flex justify-content-center" type="button" data-bs-toggle= "collapse" data-bs-target="#student-signup-form" aria-expanded="false">
            <span class="email-text">Join using email</span>
          </button>
        </div>

        <div id="signup-options-Teacher" class= "collapse signup-options ">
          
          <button id="customBtnTeacher" class="customBtn customGPlusSignIn d-flex justify-content-center">
            <span class="google-icon"></span>
            <span class="google-text">Join using Google</span>
          </button>
 
          <button id ="fb-btn-Teacher" class="fb-btn d-flex justify-content-center">
            <span class="facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
            <span class="facebook-text">Join using Facebook</span>
          </button>
          <button id="email-btn-Teacher" class="email-btn d-flex justify-content-center" type="button" data-bs-toggle= "collapse" data-bs-target="#teacher-signup-form" aria-expanded="false">
            <span class="email-text">Join using email</span>
          </button>
        </div>
        <!-- Student signup form-->
        <form id="student-signup-form" class="collapse" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
          <div class="form-col">
            <label for="studentName">Name</label> 
            <div class="row" id="studentName">
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
          
          <div class="row">
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

            <div class="row">
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
              <div class="row" id="teacherName">
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

          <div class="row">

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
            <div class="row">
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