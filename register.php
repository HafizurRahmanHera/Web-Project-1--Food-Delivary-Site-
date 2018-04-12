<?php 
    if ( isset($_POST['signup_firstname']) && isset($_POST['signup_lastname'])
			&& isset($_POST['signup_username']) && isset($_POST['signup_mobilenumber']) && isset($_POST['useraddress']) 
		&& isset($_POST['signup_email']) && isset($_POST['signup_password'])
		&& isset($_POST['signup_re_password'])){
			
		$first_name = htmlspecialchars($_POST['signup_firstname']);
		$last_name = htmlspecialchars($_POST['signup_lastname']);
		$user_name = htmlspecialchars($_POST['signup_username']);
		
		$mobilenumber = htmlspecialchars($_POST['signup_mobilenumber']);
		$address = htmlspecialchars($_POST['useraddress']);
		
        $email = htmlspecialchars($_POST['signup_email']);
        $password = htmlspecialchars($_POST['signup_password']);
		$re_password = htmlspecialchars($_POST['signup_re_password']);
        
        if (!empty($first_name) && !empty($last_name) && !empty($user_name) 
			&& !empty($mobilenumber) && !empty($address) && !empty($email)
			&& !empty($password) && !empty($re_password) ){
				if($password==$re_password)
				{
					echo "Thank you for submitting your info";
					
				}
				else{
					echo "Password did not match";
				}
                
            
			exit();
        }else{
            echo "Fill in all feild";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/registerstyle.css">
	<script src="asset/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="login">
			
			<h3 class="center-text">Sign Up</h3>
			<form name="signup-form" action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
				    <div class="col-sm-10">
						<h4>Your basic info</h4>

						<label for="firstname"></label>
				      	<input type="text" class="form-control" name="signup_firstname" id="firstname" placeholder="Enter First Name">

				      	<label for="lastname"></label>
				      	<input type="text" class="form-control" name="signup_lastname" id="lastname" placeholder="Enter Last Name">

				      	<label for="username"></label>
				      	<input type="text" class="form-control" name="signup_username" id="username" placeholder="Enter User Name">

				    	<label for="email"></label>
				      	<input type="email" class="form-control" name="signup_email" id="email" placeholder="Enter email">
				      	<label for="password"></label>
				      	<input type="password" class="form-control" name="signup_password" id="password" placeholder="Enter password">

				      	<label for="re_password"></label>
				      	<input type="password" class="form-control" name="signup_re_password" id="re_password" placeholder="Re-Enter password">

				      	<label for="mobilenumber"></label>
				      	<input type="text" class="form-control" name="signup_mobilenumber" id="mobilenumber" placeholder="Enter Mobile Number">
						
						<br>
				      	<h4>Gender</h4>
       
				        <input type="radio" name="gender" value="male" id="gender_male"/>
				        <label for="gender_male">Male</label>
				        <input type="radio" name="gender" value="female" id="gender_female"/>
				        <label for="gender_female">Female</label>
        				
        				<br>
        				<h4>Address</h4>
						<label for="address"></label>
				      	<textarea placeholder="Guabari, Pathantula" id="address" rows="3" name="useraddress" class="form-control"></textarea>
						
						<br>
				      	<h4>Location</h4>
				      	<label for="location"></label>
				        <select id="location" name="user_location">
				          
				            <option value="Bondorbazar">Bondor Bazar</option>
				            <option value="Zindabazar">Zinda Bazar</option>
				            <option value="Amborkhana">Amborkhana</option>
				            <option value="Chouhatta">Chouhatta</option>
				            <option value="Uposhor">Uposhor</option>
				            <option value="Mirermoedan">Mirer Moedan</option>
				            <option value="Shubidbazar">Shubid Bazar</option>
				            <option value="Pathantula">Pathantula</option>
				            <option value="Modinamarket">Modinamarket</option>
				            <option value="Akhali">Akhali</option>
				          
				        </select>
				  		
				    </div>
				</div>
		  		

			  	

				<div class="form-group"> 
			    	<div class="col-sm-10">
			      		<button type="submit" class="btn btn-default">Sign Up</button>
			   		 </div>
			  	</div>

			  	<div class="form-group"> 
			    	<div class="col-sm-10">
			      		<div class="utilities">
    						
    						<a href="login.php">Login &rarr;</a>
  						</div>
  					</div>
			   		 
			  	</div>
			</form>
		</div>
	</div>


</body>
</html>