<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">

    
    <link rel="stylesheet" href="signinstyle.css">
    
</head>
<body>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" />
                            </div>
                            
                        </div>
								<label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
									<label for="country">Pin code</label>   
									<input type="text" class="form-input p-4" name="pincode" id="pincode"/>
								<div class="form-group">	
									<label>Feedback</label>   
									<textarea type="text" class="form-controls" rows="7" cols="75" name="feedback" id="feedback"/></textarea>
                                </div>
                           
                        <div class="form-group">
                          <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>