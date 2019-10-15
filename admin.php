<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php"; 
?>
<BR>
<center>
    <BR>
    <?php 
		include("connection.php");
		$rs = mysqli_query($con,"SELECT COUNT(*) AS winners FROM `tblrequest`");
                	while ($row = mysqli_fetch_object($rs)){
                        $max=$row->winners;
                        ?>
                        
    <div class="form-group row">
        <div class="col-sm-3">
            <div class="card border-primary text-primary mb-3" style="max-width: 18rem;">
                <div class="card-header bg-primary text-white">REQUESTS</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$max.' '.' requesitions' ?></h5>
                    <?php } ?>
                    <p class="card-text">Requesition is still under way. System checks are still recommended</p>
                </div>
            </div>
        </div>
        <?php 
		include("connection.php");
		$rsm = mysqli_query($con,"SELECT COUNT(*) AS NotApplied FROM `tblrequest` WHERE `status`='Pending'");
                	while ($rowm = mysqli_fetch_object($rsm)){
                        $min=$rowm->NotApplied;
                        ?>
                        
        <div class="col-sm-3">
            <div class="card border-warning text-warning mb-3" style="max-width: 18rem;">
                <div class="card-header bg-warning text-white">PENDING</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$min.' '.'pending approval' ?></h5>
                    <?php } ?>
                    <p class="card-text">Requesitions that haven't been waiting to be processed. Requested but waiting to approval</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-danger text-danger mb-3" style="max-width: 18rem;">
                <div class="card-header bg-danger text-white">REJECTED</div>
                <div class="card-body">
                    <h5 class="card-title">0 rejected requesitions</h5>
                    <p class="card-text">Failed attempts may be due to cyberattacking and system intrusions.</p>
                </div>
            </div>
        </div>
        <?php
        include("connection.php");
		$rsa = mysqli_query($con,"SELECT COUNT(*) AS NotApplieda FROM `tblrequest` WHERE `status`='Approved'");
                	while ($rowa = mysqli_fetch_object($rsa)){
                        $mina=$rowa->NotApplieda;
                        ?>
        <div class="col-sm-3">
            <div class="card border-success text-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-success text-white">APPROVED</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$mina.' '.'have been approved' ?></h5>
                    <?php } ?>
                    <p class="card-text">Members that have successfully applied and cards been processed waiting collection.</p>
                </div>
            </div>
        </div>
        
    </div>
</center>