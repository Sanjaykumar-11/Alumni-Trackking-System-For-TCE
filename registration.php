<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Alumni Registration</title>

    <!-- Student Registration Form CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="index.php" title="Home">Home</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>Alumni Registration Form</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
   <!-- Start Student Registration Form -->
                      <form class="reg-form">
        
        <div class="field-row">
            <label class="form-label" for="firstName">First name</label>
            <input type="text" id="firstName" class="field text-field first-name-field" >
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label cf" for="lastName">Last name</label>
            <input type="text" id="lastName" class="field text-field last-name-field" >
            <span class="message"></span>
        </div>
                <div class="field-row">
            <label class="form-label" for="initials">Gender</label>
            <select class="field form-dropdown">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
</select>
        </div>
        
                          
        <div class="field-row">
            <label class="form-label" for="dateOfBirth">Date of birth</label>
            <input type="date" id="dateOfBirth" class="field date-field dob-field" min="1900-01-01" max="2015-09-18"  >
            <span class="message"></span>
        </div>
        
        <div class="field-row">
            <label class="form-label" for="tel">College Register Number</label>
            <input type="tel" id="tel" class="field text-field tel-field" >
            <span class="message"></span>
        </div>
                          
           <div class="field-row">
            <label class="form-label" for="hs">Currently Working on</label>
            <input type="text" id="hs" class="field text-field hs-field" >
            <span class="message"></span>
        </div>
                          
       <div class="field-row">
            <label class="form-label" for="tel">Permanent Address</label>
            <input type="tel" id="tel" class="field text-field address-field" >
            <span class="message"></span>
        </div>
                           <div class="field-row">
                                    <label class="form-label">Course</label>
                           <select class="form-dropdown field">
                <option value="1st Year"> BE </option>
                <option value="2nd Year"> B.Tech </option>

              </select>
                          </div>
                          <div class="field-row">
        <label class="form-label" for="password">Upload Your Degree Certificate</label>
            <input type="file" id="certificate" class="field text-field email-field" >
            <span class="message"></span>
        </div>
        <div class="field-row">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="field text-field email-field" >
            <span class="message"></span>
        </div>

        <div class="field-row">
            <label class="form-label" for="password">Create Password</label>
            <input type="password" id="password" class="field text-field email-field" >
            <span class="message"></span>
        </div>
    
        <div class="field-row">
            <label class="form-label"></label>
            <button class="form-button">Register</button>
        </div>
    </form>
   <!-- End Student Registration Form -->
                  
    		
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>