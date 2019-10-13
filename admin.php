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
		$rs = mysqli_query($con,"SELECT COUNT(*) AS winners FROM `tblapplications`");
                	while ($row = mysqli_fetch_object($rs)){
                        $max=$row->winners;
                        ?>
                        
    <div class="form-group row">
        <div class="col-sm-3">
            <div class="card border-success text-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-success text-white">APPLIED</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$max.' '.'applied tenders' ?></h5>
                    <?php } ?>
                    <p class="card-text">Tender application is still under way. System monitoring is still recommended</p>
                </div>
            </div>
        </div>
        <?php 
		include("connection.php");
		$rsm = mysqli_query($con,"SELECT COUNT(*) AS NotApplied FROM `tblapplications` WHERE `winner`=0 AND `published` =0");
                	while ($rowm = mysqli_fetch_object($rsm)){
                        $min=$rowm->NotApplied;
                        ?>
                        
        <div class="col-sm-3">
            <div class="card border-warning text-warning mb-3" style="max-width: 18rem;">
                <div class="card-header bg-warning text-white">NOT APPLIED</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo ''.$min.' '.'have not applied yet' ?></h5>
                    <?php } ?>
                    <p class="card-text">Registrations that haven't applied their tenders. Registered but still waiting to apply</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-danger text-danger mb-3" style="max-width: 18rem;">
                <div class="card-header bg-danger text-white">FAILED APPLICATIONS</div>
                <div class="card-body">
                    <h5 class="card-title">0 Failed attempts</h5>
                    <p class="card-text">Failed attempts may be due to cyberattacking.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-primary text-primary mb-3" style="max-width: 18rem;">
                <div class="card-header bg-primary text-white">LOGGED IN</div>
                <div class="card-body">
                    <h5 class="card-title">1 Logged in now</h5>
                    <p class="card-text">Logged in users, administration inclusive.</p>
                </div>
            </div>
        </div>
        
    </div>
</center>