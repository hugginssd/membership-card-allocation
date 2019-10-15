<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_member.php"; 
?>
<br>
<?php
include "connection.php";
$rs = mysqli_query($con,'SELECT `tblmembers`.`firstname` AS firstname, `tblmembers`.`lastname` AS lastname,
								`tblmembers`.`idnumber` AS idnumber, `tblrequest`.`dateofrequest` AS dateofrequest,
								`tblrequest`.`status` AS Status 
								FROM `tblmembers` 
								INNER JOIN `tblrequest`
								ON `tblrequest`.`memberid` = `tblmembers`.`id`
								WHERE `tblmembers`.`username`="'.$_SESSION['SESS_NAME'].'"');
while ($row = mysqli_fetch_object($rs)){
	$firstname=$row->firstname;
	$lastname=$row->lastname;
	$idnumber=$row->idnumber;
	$dateofrequest=$row->dateofrequest;
	$status=$row->Status;
}
if($status=="Pending"){
	$color = "warning";
}else{
	$color = "success";
}
?>
   <div class="alert alert-<?php echo''.$color.'';?>"> role="alert">
        <h4 class="alert-heading">Welcome <?php echo ''.$firstname.' '.$lastname.'';?></h4>
             <p>Notification on your Online Membership Card Application.</p>
             <p>
				Your request for membership card processing dating <strong><?php echo ''.$dateofrequest.'';?></strong> has a status of <strong> <?php echo ' '.$status.'.';?></strong>
				As a peoples party we are doing our best to process all request from around the nation and the world at large. 
				All you have to do is to go to our nearest offices for collection if the card has been processed. Thank you for your cooperation.
				Your support is greatly appreciated. Add your name and email address, so we can send you your admin link, 
                and then send it off to your guests or participants. You can add their email addresses in the box on the
                poll page or you can simply share the link as you like. In minutes you’ll have your responses and have 
                just used the online membership card allocation system.
             </p>
        <hr>
            <p class="mb-0">In order to make a apply you have to register first and then login for card follow up.</p>
    </div>
    <p>&nbsp;&nbsp;</p>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center>
    <!-- <button type="submit" class="btn btn-primary" value="" name="submit">SUBMIT VOTE</button> -->
</center>
</form>
