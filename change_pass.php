<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php"; 
?>
    <br>
        <br>
            <center>
                <h3 class="text-success">Change password</h3></center>
                <h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
                <?php global $error; echo $error;?>                  
                <br>
                <center>
                    <form action="change_pass_action.php" method="post" id="myform">
                        <div class="form-group col-md-4">
                            <div class="form-group row">
                                    <label for="inputPassword4"  class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="cpassword" value="" class="form-control" id="inputPassword4" placeholder="Current Password">
                               </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                    <label for="inputPassword4" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" name="npassword" value="" class="form-control" id="inputPassword4" placeholder="New Password">
                                </div>
                            </div>     
                            <br>
                            <div class="form-group row">
                                    <label for="inputPassword4" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="cnpassword" value="" class="form-control" id="inputPassword4" placeholder="Confirm New Password">
                                </div>
                            </div>
                                
                            <br>
                            <div class="row">
                                <div class="col">
                                </div>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-primary" name="cpass" value="Change Password" >
                                </div>
                            </div>
                        </div>
                    </form>
                </center>
                <script type="text/javascript">
                    var frmvalidator = new Validator("myform"); 
                    frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
                    frmvalidator.addValidation("cpassword","maxlen=50");
                    frmvalidator.addValidation("npassword","req","Please enter New Password"); 
                    frmvalidator.addValidation("npassword","maxlen=50");
                    frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
                    frmvalidator.addValidation("cnpassword","maxlen=50");
                </script>
        <br>
    <br>
<?php include "footer.php";?>
