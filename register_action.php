<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {
	// if (isset($_POST['g-recaptcha-response'])){
    //       $captcha=$_POST['g-recaptcha-response'];
    //     }
    //     if(!$captcha){
	// 	  $error = "Please check captcha too";
	// 	  include ('register.php');
	// 	  exit();
    //     }
    //     $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
    //     $ip = $_SERVER['REMOTE_ADDR'];
    //     $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    //     $responseKeys = json_decode($response,true);
    //     if(intval($responseKeys["success"]) !== 1) {
	// 	  $error = "You are spammer !";
    //     }
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$dateOfBirth = mysqli_real_escape_string($con,$_POST['dateOfBirth']);
$idnumber = mysqli_real_escape_string($con,$_POST['idnumber']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);

$wing = mysqli_real_escape_string($con,$_POST['wing']);
$ward = mysqli_real_escape_string($con,$_POST['ward']);
$cell = mysqli_real_escape_string($con,$_POST['cell']);
$contactnumber = mysqli_real_escape_string($con, $_POST['contactnumber']);
$website = mysqli_real_escape_string($con,$_POST['website']);
$username = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$province = mysqli_real_escape_string($con,$_POST['province']);
$zip = mysqli_real_escape_string($con,$_POST['zip']);
$rank = "youth";
$pin = 4912;



$sq = mysqli_query($con, 'SELECT * FROM `tblmembers` WHERE `idnumber`="'.$_POST['idnumber'].'"');
$exist = mysqli_num_rows($sq);
	
	
		if($exist>=1){
			$nam="<center><h5><font color='#DAAF37'>The applicant already exist, create another one.</h5></center></font>";
			unset($username);
			include('register.php');
			exit();
		}
		//create user
			$sql = mysqli_query($con, 'INSERT INTO `tblusers`( `username`, `password`) 
													VALUES ("'.$_POST['email'].'","'.$_POST['password'].'")');
			if (!$sql)
			{ 
					
					die (mysqli_error($con));
			}
			//create member
			$sql2 = mysqli_query($con, 'INSERT INTO `tblmembers`(`firstname`, `lastname`, `dateofbirth`, `idnumber`, `gender`, `wing`, `address`, `province`, `ward`, `cell`, `contactnumber`,`username`)
												 VALUES ("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['dateOfBirth'].'","'.$_POST['idnumber'].'",
												 "'.$_POST['gender'].'","'.$_POST['wing'].'","'.$_POST['address'].'","'.$_POST['province'].'","'.$_POST['ward'].'",
												 "'.$_POST['cell'].'","'.$_POST['contactnumber'].'","'.$_POST['email'].'")'); 
			if (!$sql2) 
			{ 
				die (mysqli_error($con));
			}
			//select memberid
			$sqid = mysqli_query($con, 'SELECT * FROM `tblmembers` WHERE `idnumber`="'.$_POST['idnumber'].'"');
			if (mysqli_num_rows($sqid)!= 0 ) {
				while($mb2=mysqli_fetch_object($sqid))
							{	
								$memberid=$mb2->id;
							}
			//submit request
			$sql1 = mysqli_query($con, 'INSERT INTO `tblrequest`(`dateofrequest`, `memberid`) 
														VALUES (CURDATE(),'.$memberid.')');
			if (!$sql1)
			{ 
					die (mysqli_error($con));
			}
			else 
			{
				echo '<div class="form-group col-md-16">
						<div class="alert alert-danger" role="alert">
							Successfully placed a requesition for membership card! <a href= "login.php">Click here to Login </a>.
						</div>
					</div>';//"Successfully placed a requesition for membership card! <a href= 'login.php'>Click here to Login </a>";
			}
		}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}
?>
