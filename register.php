<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header_all.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: member.php");
}
?>
<br>
	<center>
		<legend> <h3 class="text-success"> Register </h3></legend> 
	</center>
	<br>
	<br>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
	<center>
		<form action= "register_action.php" method= "post" id="myform" >
			<div class="form-group col-sm-6">
			
					<div class="form-row ">
						
							<div class="form-group col-md-6">
								<!-- <label for="inputFirstname4">Firstname</label> -->
								<input type="firstname" name="firstname" class="form-control" id="inputFirstname4" placeholder="Firstname" required>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputPassword4">Lastname</label> -->
								<input type="lastname" name="lastname"class="form-control" id="inputLastname4" placeholder="Lastname" required>
							</div>
							
						</div>
						<br>
						<div class="form-row">
							<div class="form-group col-md-6">
								<!-- <label for="inputDate4">DOB</label> -->
								<input type="date" name="dateOfBirth" class="form-control" max="2001-01-01" min="1000-01-01" id="inputDate4" placeholder="Email" required>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputIdNumber4">ID Number</label> -->
								<input type="idnumber" name="idnumber" class="form-control" id="inputIdnumber4" placeholder="00-000000X00" required>
							</div>
						</div>
						<div class="form-row">
								<div class="form-group col-md-6">
									<!-- <label for="inputGender4">Gender</label> -->
									<select id="inputGender" name="gender" class="form-control" required>
										<option selected>Choose...</option>
										<option>Male</option>
										<option>Female</option>
										<option>Other</option>
									</select>
								</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputIdWing4">Wing</label> -->
								<input type="wing" name="wing" class="form-control" id="inputWing4" placeholder="Wing e.g Youth, Women" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<!-- <label for="inputWard4">Ward</label> -->
								<input type="ward" name="ward" class="form-control" id="inputWard4" placeholder="Ward" required>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputCell4">Cell</label> -->
								<input type="cell" name="cell" class="form-control" id="inputCell4" placeholder="Cell" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<!-- <label for="inputContactNumber4">Contact number</label> -->
								<input type="contactnumber" name="contactnumber" class="form-control" id="inputContactNumber4" placeholder="Contact number" required>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputCell4">Cell</label> -->
								<input type="cell" name="website"class="form-control" id="inputCell4" placeholder="Website" required>
							</div>
						</div>
						<!--Username and password-->
						<div class="form-row">
							<div class="form-group col-md-6">
								<!-- <label for="inputContactNumber4">Contact number</label> -->
								<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Username example@gmail.com" required>
							</div>
							<div class="form-group col-md-6">
								<!-- <label for="inputCell4">Cell</label> -->
								<input type="password" min="6" name="password"class="form-control" id="inputpassword4" placeholder="Your new password e.g. sZsaK8as1hvSw" required>
							</div>
						</div>
						<div class="form-group">
							<!-- <label for="inputAddress">Address</label> -->
							<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"  required >
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<!-- <label for="inputCity">City</label> -->
							<input type="text" name="city" class="form-control" id="inputCity" placeholder="City">
							</div>
							<div class="form-group col-md-4">
							<!-- <label for="inputState">Province</label> -->
							<select id="inputState" name="province" class="form-control">
								<option selected>Choose Province...</option>
								<option>Harare</option>
								<option>Mashonaland Central</option>
								<option>Mashonaland East</option>
								<option>Mashonaland West</option>
								<option>Manicaland</option>
								<option>Masvingo</option>
								<option>Matebeleland North</option>
								<option>Matebeleland South</option>
								<option>Midlands</option>
								<option>Bulawayo</option>
							</select>
							</div>
							<div class="form-group col-md-2">
							<!-- <label for="inputZip">Zip</label> -->
							<input type="text" name="zip" class="form-control" id="inputZip" placeholder="Zip code">
							</div>
							
						</div>
						<div class="form-row">
						<div class="form-group col-md-6">
								<!-- <label for="exampleFormControlFile1">Contact number</label> -->
								<label  for="exampleFormControlFile1">Select your passport size photo for upload 32px</label>
							</div>
							<div class="form-group col-md-6">
									<!-- <label for="exampleFormControlFile1">Example file input</label> -->
									<input type="file" name="pic" class="form-control-file" id="exampleFormControlFile1" required>
							</div>
						</div>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</div>
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
