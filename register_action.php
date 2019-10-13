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
$website = mysqli_real_escape_string($con,$_POST['website']);
$contactnumber = mysqli_real_escape_string($con, $_POST['contactnumber']);
$referencenumber = mysqli_real_escape_string($con,$_POST['referencenumber']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$province = mysqli_real_escape_string($con, $_POST['province']);
$zip = mysqli_real_escape_string($con,$_POST['zip']);
$rank = "";
$pin = 4912;



$sq = mysqli_query($con, 'SELECT regnumber FROM tblapplicants WHERE regnumber="'.$_POST['regnumber'].'"');
$exist = mysqli_num_rows($sq);
	if($pin==4912)
	{
      $rank = "admin";
	}
	else{
	  $rank = "voter";
	}
	echo 'Done1';
		if($exist>=1){
			$nam="<center><h5><font color='#DAAF37'>The applicant already exist, create another one.</h5></center></font>";
			unset($username);
			include('register.php');
			exit();
		}
		echo 'Done2';
			// $sql = mysqli_query($con, 'INSERT INTO tblapplicants(companyname, regnumber, trade, cr14number, cr7number, taxclearancenumber, dateregistered, contactnumber, `address`, referencenumber) VALUES ("'.$_POST['companyname'].'","'.$_POST['regnumber'].'","'.$_POST['inputBusiness'].'","'.$_POST['cr14number'].'","'.$_POST['cr7number'].'","'.$_POST['taxclearance'].'","'.$_POST['date'].'","'.$_POST['contactnumber'].'","'.$_POST['address'].'","'.$_POST['referencenumber'].'")');
			// if (!$sql)
			// { 
			// 	echo 'Done post';
			// 		die (mysqli_error($con));
			// 	echo 'Done post1';
			// }//start from here
			echo 'Done3';
			$sql2 = mysqli_query($con, 'INSERT INTO `tblapplicants`(`companyname`, `regnumber`, `trade`, `cr14number`, `cr7number`, `taxclearancenumber`, `dateregistered`, `contactnumber`, `address`, `referencenumber`,`password`) 
												VALUES ("'.$_POST['companyname'].'","'.$_POST['regnumber'].'","'.$_POST['inputBusiness'].'","'.$_POST['cr14number'].'","'.$_POST['cr7number'].'",
												"'.$_POST['taxclearance'].'","'.$_POST['date'].'","'.$_POST['contactnumber'].'",
												"'.$_POST['address'].'","'.$_POST['referencenumber'].'","'.$_POST['city'].'")'); 
			if (!$sql2) 
			{ 
				die (mysqli_error($con));
			}
			else 
			{
				echo "Successfully registered! <a href= 'login.php'>Click here to Login </a>";
			}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}
?>
