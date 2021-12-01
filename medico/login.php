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

   
    <link rel="stylesheet" href="loginstyle.css">
    
</head>
<body>
<div class="hero-image">
	<h1><center>Login</center></h1>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-row">
                           <div class="form-group">
							<label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
									</div>
									</div>
									<div class="form-row">
									<div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password"/>
                            </div>
                </div>
				 <div class="form-group">
                          <a  href="main.php"><input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/></a>
                        </div>
				</form>
            </div>
			</div>
        </section>

    
	</div>
	</div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>							