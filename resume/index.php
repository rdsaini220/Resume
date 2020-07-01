
<!DOCTYPE HTML>
<html>
<head>
<title>resume</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--bootstrap-->
<style>
 .scolor{color:green;font-size:20px; }
 .ncolor{color:red;}
 span:hover{
	 color:blue!important;
	cursor: pointer;}
</style>
</head>
<body>
	<div class="containetr">
		<div class="wrap">
			<!-- strat-contact-form -->	
			<div class="contact-form">
			<!-- start-form -->
				<form class="contact_form" action="" method="post" name="contact_form">
					<h1 style="color:#F26400;">Login Into Your Account</h1>
					<ul>
						<li>
							<input type="email" class="textbox1" name="email" placeholder="info@w3layouts.com" required />
							<span class="form_hint">Enter a valid email</span>
							<p><img src="images/contact.png" alt=""></p>
						</li>
						<li>
							<input type="password" name="password" class="textbox2" placeholder="password">
							<p><img src="images/lock.png" alt=""></p>
						</li>
					
						<input type="submit" name="click" value="Sign In"/>
						<?php
							if(isset($_POST["click"])) 
							{
								$email= $_POST["email"];
								$password= $_POST["password"];
								
								include("connection.php");
								$query=mysqli_query($con,"select * from admin where email='$email'and pass='$password'");
								$count= mysqli_num_rows($query);
								  if ($count==1)
								   {
									  $s= mysqli_fetch_row($query);
									  session_start();
									  $_SESSION["adm"]=$s[0];
									  header("location:profile.php");
								   }
								else
								   {
									   echo "<br>";
									   echo "<br><br><br><br><br><br><br><br><br><br> <span class='ncolor'> Please enter correct username and password </span>";
								   }
								
								
							}


			         ?>
					 </ul>
						<div class="clear"></div>	
						<!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label> -->
					<!-- <div class="forgot">
						<a href="#">forgot password?</a>
					</div>	 -->
					<div class="clear"></div>	
				</form>
			<!-- end-form -->
			<!-- start-account -->
			<div class="account">
			<?php
				if(isset($_POST["submit"])) 
				{
					$email= $_POST["email"];
					$frist= $_POST["frist"];
					$last= $_POST["last"];
					$phone= $_POST["phone"];
					$password= $_POST["password"];
					$location= $_POST["location"];

					include("connection.php");
					$query=mysqli_query($con,"select * from admin where  email='$email'");
					$count= mysqli_num_rows($query);
					  if ($count>=1)
					   {
						 echo "Your email already registered";
					   }
					else
					   {
						   if (mysqli_query($con,"insert into admin (`email`, `fist_name`, `last_name`, `phone_number`, `pass`, `location`) VALUES ('$email', '$frist', '$last', '$phone', '$password', '$location')"))
								{
									echo "<span class='scolor'><b> Successful Registration. Login Your Account </b></span> ";
								}
							else
								{
									echo "<span class='ncolor'>Not Successful Registration </span> ";
								}
					   }
			     
					
				}


			?>
			
			<h4>New Account --> &nbsp;<span data-toggle="modal" data-target="#myModal" style="color:#F26400;">
                  SIGNUP
                </span></h4>	
				<div class="span"><a href="#"><img src="images/facebook.png" alt=""/><i>Sign In with Facebook</i><div class="clear"></div></a></div>	
				<div class="span1"><a href="#"><img src="images/twitter.png" alt=""/><i>Sign In with Twitter</i><div class="clear"></div></a></div>
				<div class="span2"><a href="#"><img src="images/gplus.png" alt=""/><i>Sign In with Google+</i><div class="clear"></div></a></div>
			</div>	
			<!-- end-account -->
			<div class="clear"></div>	
			</div>
			<!-- end-contact-form -->
			<div class="footer">
				
			</div>

			<!-- correct -->
				<!-- The Modal -->
			<div class="modal" id="myModal">
					<div class="modal-dialog"> 
					<div class="modal-content">
					
						<!-- Modal Header -->
						<div class="modal-header">
						<h4 class="modal-title"></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
						   <form action="" method="post">			   
								<div class="form-row">
									<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
									</div>

									<div class="form-group col-md-6">
									<label for="signupFirstName">Frist Name</label>
									<input type="text" name="frist" class="form-control" id="" placeholder="Frist Name">
									</div>

									<div class="form-group col-md-6">
									<label for="signupLastName">Last Name</label>
									<input type="text" name="last" class="form-control" id="" placeholder="Last Name">
									</div>

									<div class="form-group col-md-6">
									<label for="">Phone Number</label>
									<input type="text" name="phone" autocomplete="tel-national" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" class="form-control" id="" placeholder="Phone Number">
									</div>

									<div class="form-group col-md-6">
									<label for="inputPassword4">Password</label>
									<input type="password" name="password" class="form-control" id="" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress">Location</label>
									<input type="text" name="location" class="form-control" id="inputAddress" placeholder="Location">
								</div>
								
								<button type="submit" name="submit" class="btn btn-primary">Sign in</button>
							</form>
						</div>
					
						<!-- Modal footer -->
						<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					</div>
					</div>
			</div>
			
			<!-- correct -->
		</div>
     </div>
</body>
</html>