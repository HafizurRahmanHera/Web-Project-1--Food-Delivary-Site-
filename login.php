<?php 
    if ( isset($_POST['login_email']) && isset($_POST['login_password']) ){
        $email = htmlspecialchars($_POST['login_email']);
        $password = htmlspecialchars($_POST['login_password']);
        
        if (!empty($email) && !empty($password)){
                echo "Thank you for submitting your info";
			exit();
        }else{
            echo "Fill in all feild";
        }
        
    }
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/loginstyle.css">
	

</head>
<body>
	<div class="container">
		<div class="login">
			
			<h3 class="center-text">Login</h3>
			<form  name="login-form" action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
				    <div class="col-sm-10">
				    	<label for="email"></label>
				      	<input type="email" class="form-control"
						name="login_email" id="email" placeholder="Enter email">
						
				      	<label for="password"></label>
				      	<input type="password" class="form-control" name="login_password" id="password" placeholder="Enter password">
				  
				    </div>
				</div>
		  		

			  	<div class="form-group"> 
			    	<div class="col-sm-10">
			      		<div class="checkbox">
			        		<label><input type="checkbox">Remember me</label>
			      		</div>
			    	</div>
			  	</div>

				<div class="form-group"> 
			    	<div class="col-sm-10">
			      		<button type="submit" class="btn btn-default">Login</button>
			   		 </div>
			  	</div>

			  	<div class="form-group"> 
			    	<div class="col-sm-10">
			      		<div class="utilities">
    						<a href="#">Forgot Password?</a>
    						<a href="register.php">Sign Up &rarr;</a>
  						</div>
  					</div>
			   		 
			  	</div>
			</form>
		</div>
	</div>


</body>
</html>