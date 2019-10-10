<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header_all.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
	<center>
		<legend> <h3> Register </h3></legend> 
	</center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
	<center>
		<form action= "reg_action.php" method= "post" id="myform" >
			<div class="form-group col-sm-6">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputFirstname4">Firstname</label>
								<input type="firstname" class="form-control" id="inputFirstname4" placeholder="Firstname">
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">Lastname</label>
								<input type="lastname" class="form-control" id="inputLastname4" placeholder="Lastname">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputEmail4">Email</label>
								<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
							</div>
							<div class="form-group col-md-6">
								<label for="inputPassword4">Password</label>
								<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
						<label for="inputCity">City</label>
						<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-4">
						<label for="inputState">State</label>
						<select id="inputState" class="form-control">
							<option selected>Choose...</option>
							<option>...</option>
						</select>
						</div>
						<div class="form-group col-md-2">
						<label for="inputZip">Zip</label>
						<input type="text" class="form-control" id="inputZip">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck">
							Check me out
						</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
			</div>	
			 <!-- <div class="form-group col-md-4">
					<div class="form-group row">
								<label for="inputFirstname3" class="col-sm-2 col-form-label">Firstname</label>
								<div class="col-sm-10">
									<input type="text" name="firstname" value="" class="form-control" id="inputFirstname3" placeholder="Firstname" required >
								</div>
					</div>
							<br>
					<div class="form-group row">
								<label for="inputLastname3" class="col-sm-2 col-form-label">Lastname</label>
								<div class="col-sm-10">
									<input type="text" name="lastname" value="" class="form-control" id="inputLastname3" placeholder="Lastname" required >
								</div>
					</div>
							<br>
							<!--Add DOB 
							<div class="form-group row">
								<label for="dateOfBirth" class="col-sm-2 col-form-label">DOB</label>
								<div class="col-sm-10">
									<input type="date" name="bday" max="2001-01-01" min="1000-01-01" class="form-control" id="dateOfBirth" required>
								</div>
							</div>
							<br>
							<!--PIN
							 <div class="form-group row">
								<label for="pin1" class="col-sm-2 col-form-label">ID number</label>
								<div class="col-sm-10">
									<input type="text" name="pin" maxlength="14" minlength="12" class="form-control" placeholder="00-000000X00" id="pin1" required>
								</div>
							</div>
							<br> 

						<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="email" name="username" value="" class="form-control" id="inputEmail3" placeholder="Username" required>
								</div>
						</div>
							<br>
						<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" value="" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
						</div>
								<br>
									<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
								<br>
							<br>
							<input type="submit" class="btn btn-primary" name="submit" value="Next" />
				</div> -->
		</form>
	</center>
	<script type= "text/javascript" >
	var frmvalidator = new Validator("myform"); 
	frmvalidator.addValidation("firstname","req","Please enter your firstname"); 
	frmvalidator.addValidation("firstname","maxlen=50");
	frmvalidator.addValidation("lastname","req","Please enter your lastname"); 
	frmvalidator.addValidation("lastname","maxlen=50");
	frmvalidator.addValidation("username","req","Please enter your username"); 
	frmvalidator.addValidation("username","maxlen=50");
	frmvalidator.addValidation("password","req","Please enter your password"); 
	frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>
<?php include "footer.php" ;?>
