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
	<legend> <h3>Login for Voting </h3></legend> 
		<br>
</center>
			
<center>
	<font size="4" >
		<form action="login_action.php" method="post" id="myform" >
			<div class="form-group col-md-4">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input type="email" name="username"  class="form-control" id="inputEmail3" placeholder="Username">
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
				<br>
				<input type="submit" class="btn btn-primary" name="login" value="login" > 
				<br>
				<br>
				<div class="form-group row">
					<?php global $nam; echo $nam; ?>
					<?php global $error; echo $error; ?>
			    </div>
			<br>
			</div>
		</form>
	</font>
</center>
			
<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>