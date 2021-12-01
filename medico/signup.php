<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="signinstyle.css">
    
</head>
<body>

<?php include 'connection.php';
		$msg='';
	    $msg1='';
		
		
	if(isset($_POST['submit'])){
		$temp=true;
		$name=$_POST['name'];
		$phoneno=$_POST['phoneno'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$speciality=$_POST['speciality'];
		$city=$_POST['city'];
		$pin=$_POST['pin'];
		$sqli="select * from register where email='$email'";
			$result=mysqli_query($conn,$sqli);
			if(mysqli_num_rows($result)>0){
				$msg= "email already exists";
			}
			else if($pass!=$cpass){
				$temp=false;
				$msg="password not matched";
			}	
			else if($temp==true){
				$sqli="insert into register set name='$name',phoneno='$phoneno',email='$email',password='$pass',speciality='$speciality',city='$city',pincode='$pin'";
				mysqli_query($conn,$sqli);
				$msg1="subbmission successfull";
			}
		}
?>

	<h1><center>Signup</center></h1>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
					
						<div class="row">
			<?php if(!empty($msg)) {?>	
			<div class="alert alert-danger"><?php echo $msg;?></div>
			<?php }
				elseif(!empty($msg1)){?>
				<div class="alert alert-success"><?php echo $msg1; ?></div>
				<?php }?>
				
		</div>
		
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-input" name="name" id="name" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phoneno" id="phoneno" />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="pass" id="pass"/>
                            </div>
                            <div class="form-group">
                                <label for="re_password">Confirm password</label>
                                <input type="password" class="form-input" name="cpass" id="cpass"/>
                            </div>
                        </div>
                        
                                
                            <label for="email">Email</label>
                            <input type="email" class="form-input" name="email" id="email"/>
							<label for="email">Speciality</label>
                            <input type="text" class="form-input" name="speciality" id="speciality"/>
                            <label for="country">City</label>   
							<input type="text" class="form-input" name="city" id="city"/>
							<label for="country">Pin code</label>   
							<input type="number" class="form-input" name="pin" id="pin"/>
                                
                           
                        <div class="form-group">
						<button type="submit" name="submit" id="submit" class="form-submit btn btn-success" value="Submit"/><a href="main.php">SUBMIT</a></button>
                         
						  
                        </div>
                    </form>
					<center><p>Already have an account? <a href="login.php">login here</a></p></center>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>