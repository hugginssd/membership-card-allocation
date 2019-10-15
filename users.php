<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_admin.php"; 
?>
<div class="wrapper-editor form-group mx-sm-3 mb-2">

  <div class="block my-4">
    <div class="d-flex justify-content-center">
      <!-- <p class="h5 text-success createShowP">0 row selected</p> -->
    </div>
  </div>

  <div class="row d-flex justify-content-center modalWrapper">
    <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new form</h4>
            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="text" id="inputName" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputName">Name</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputPosition" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputPosition">Position</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputOfficeInput" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputOfficeInput">Username</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputAge" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputAge">Age</label>
            </div>

            <div class="md-form mb-5">
              <input type="date" id="inputDate" class="form-control" placeholder="Select Date">
              <label data-error="wrong" data-success="right" for="inputDate"></label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="inputSalary" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputSalary">Salary</label>
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add form
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <!-- <a href="register.php" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
          class="fas fa-plus-square ml-1"></i></a> -->
    </div>

    <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
            <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="text" id="formNameEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formNameEdit">Firstname</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formPositionEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formPositionEdit">Lastname</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formOfficeEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formOfficeEdit">Username</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formAgeEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formAgeEdit">Vote Status</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formDateEdit" class="form-control datepicker">
              <label data-error="wrong" data-success="right" for="formDateEdit">Status</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formSalaryEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formSalaryEdit">Rank</label>
            </div>


          </div>
          <div class="modal-footer d-flex justify-content-center editInsideWrapper">
            <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
              form
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center buttonEditWrapper">
      <!-- <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit"
        >Edit<i class="fas fa-pencil-square-o ml-1"></i></a> -->
    </div>
<br>
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <!-- <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4> -->
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <p class="text-center h4">Are you sure to delete selected row?</p>

          </div>
          <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
            <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal">Yes</button>
            <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <!-- <button type="button" class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal"  data-target="#modalDelete"
        >Delete<i class="fas fa-times ml-1"></i></a> -->
    </div>
  </div>

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Firstname

        </th>
        <th class="th-sm">Lastname

        </th>
        <th class="th-sm">Idnumber

        </th>
        <th class="th-sm">Gender

        </th>
        <th class="th-sm">Address

        </th>
        <th class="th-sm">Contact number

        </th>
        <th class="th-sm">Date registered

        </th>
        <th class="th-sm">Status

        </th>
      </tr>
    </thead>
    <tbody>
    <?php 
		include "connection.php";
		$rs = mysqli_query($con,"SELECT * FROM `tblmembers`");
		while ($row = mysqli_fetch_object($rs)){
            $firstname=$row->firstname;
            $lastname=$row->lastname;
            $idnumber=$row->idnumber;
            $gender=$row->gender;
            $address=$row->address;
            $contactnumber=$row->contactnumber;
            $dateregistered=$row->dateregistered;
    	?>
      <tr>
        <td><?php echo $firstname; ?></td>
        <td><?php echo $lastname; ?></td>
        <td><?php echo $idnumber; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $contactnumber; ?></td>
        <td><?php echo $dateregistered; ?></td>
        <td>Active</td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
<script>
        $('#dtBasicExample').mdbEditor({
        mdbEditor: true
        });
        $('.dataTables_length').addClass('bs-select');
</script>