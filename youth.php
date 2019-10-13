<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<center>
		<legend> <h3 class="text-success"> Request view </h3></legend> 
</center>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
    <center>
        <BR>
    <div class="form-group col-md-4">
					            <div class="form-group row">
                                    <label for="inputTenderName3" class="col-sm-4 col-form-label">Tender name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="tendername" min="6" value="" class="form-control" id="inputTenderName3" placeholder="Tender name" required >
                                    </div>
					            </div>
							<br>
                                <div class="form-group row">
                                            <label for="inputTendernumber3" class="col-sm-4 col-form-label">Tender number</label>
                                            <div class="col-sm-8">
                                                <input type="tendernumber" name="tendernumber" value="" class="form-control" id="inputTendernumber3" placeholder="Tender number" required >
                                            </div>
                                </div>
							<br>
                                <!--Add Application Date --> 
                                <div class="form-group row">
                                    <label for="applicationDate" class="col-sm-4 col-form-label">Application date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="appDate" max="2019-10-16" min="2019-10-14" class="form-control" id="applicationDate" required>
                                    </div>
                                </div>
							<br>
							<!--PIN-->
                                <div class="form-group row">
                                    <label for="budget1" class="col-sm-4 col-form-label">Budget estimate</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="estimateBudget" max="999 999" min="111 111" class="form-control" placeholder="Estimated budget e.g 200 000"id="budget1" required>
                                    </div>
                                </div>
							<br>

					<div class="form-group row">
								<label for="inputRefnumber3" class="col-sm-4 col-form-label">Reference number</label>
								<div class="col-sm-8">
									<input type="Refnumber" name="refNumber" value="" class="form-control" id="inputRefnumber3" placeholder="Reference number e.g REF18999" required>
								</div>
					</div>
							<br>
					<div class="form-group row">
								<label for="inputNumberOfProjects3" class="col-sm-4 col-form-label">Similar Projects</label>
								<div class="col-sm-8">
									<input type="number" name="numberOfProjects" value="" class="form-control" id="inputNumberOfProjects3" placeholder="Number of similar projects e.g 1">
								</div>
                    </div>
                    <br>
                    <div class="form-group row">
								<label for="inputTraceableReferences3" class="col-sm-4 col-form-label">Traceable References</label>
								<div class="col-sm-8">
									<input type="number" name="traceableReferences" value="" class="form-control" id="inputTraceableReferences3" placeholder="Number of traceable references e.g 2">
								</div>
					</div>
                        <div class="form-group row">
								<label for="inputTimetoComplete3" class="col-sm-4 col-form-label">Time to complete</label>
								<div class="col-sm-8">
									<input type="number" name="timetoComplete" value="" class="form-control" id="inputTimetoComplete3" placeholder="Time to complete in months e.g 2">
								</div>
					</div>
						<input type="submit" class="btn btn-primary" name="submit" value="Submit" />
				</div>
			
					
					</div>
			</div>	

    </center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center>
    <!-- <button type="submit" class="btn btn-primary" value="" name="submit">SUBMIT VOTE</button> -->
</center>
</form>
