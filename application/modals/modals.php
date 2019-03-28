<!-- ADD ENCODING-->

<input type="hidden" name="gen_id" id="gen_id">
<div class="modal fade" id="modal_add_encoding">
  <div class="modal-dialog custom-modal">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Add New</h4>
	  </div>
	  <div class="modal-body">
	  <form class="">
	  <div class="row">

        <div class="col-sm-4">
          <div class="form-group ">
            <label class="control-label">Department </label>
              <select class="form-control" id="dept" >
                <option value="college">College</option>
                <option value="shs">Senior High School</option>
              </select>
          </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
              <label class="control-label">Faculty </label>
              <select class="form-control clear" id="faculty" style="width:auto">
                <option value=''>--Select Faculty--</option>
                <?php
                  require('config/connection.php');

                  $faculty_query = "SELECT employee_id, f_lastname, f_firstname FROM faculty_list";
                  $result = mysqli_query($conn, $faculty_query);
                  if($result){

                    while($frow=mysqli_fetch_array($result)){
                      $fid = $frow['employee_id'];
                      $flastname = $frow['f_lastname'];
                      $ffirstname = $frow['f_firstname'];
                      $name = $flastname .", ".$ffirstname;
                      echo '<option value='.$fid.'>'.$name.'</option>';
                    }
                    mysqli_close($conn);
                  }
                ?>
               </select>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                <label for="inputEmail3" class="control-label">AY/Sem </label>
                  <select class="form-control"  id="ay_sem">
                   <?php
                  require('config/connection.php');

                  $aca_query = "SELECT * FROM academic";
                  $result = mysqli_query($conn, $aca_query);
                  if($result){

                    while($frow=mysqli_fetch_array($result)){
                      $acode = $frow['aca_code'];
                      $ay = $frow['ay'];
                      $sem_code = $frow['sem_code'];
                      $sem = $frow['semester'];
                      
                      echo '<option value='.$acode.'>'.$ay. ' - '. $sem .'</option>';
                    }
                    mysqli_close($conn);
                  }
                ?>
                 </select>
              </div>
          </div>

          <div class="col-sm-8">
              <div class="form-group ">
                 <label class="control-label">Period </label>
                  <div class="checkbox col_check" style="margin-top:-4px !important">
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="1"> Prelim
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="2"> Midterm
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="3"> Final
                    </label>
                  </div>
                  <div class="checkbox shs_check">
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="4"> 1st Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="5"> 2nd Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="6"> 3rd Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="period" value="7"> 4th Quarter
                    </label>
                  </div>
              </div>
            </div>
          <div class="col-sm-6">
              <div class="form-group">
                  <label class="control-label">Subjects </label>
                  <textarea class="form-control clear" placeholder="Input Subjects" id="subjects" > </textarea>
              </div>
          </div>

          <div class="col-sm-6">
              <div class="form-group">
                    <label for="inputEmail3" class="control-label">Remarks</label>
                    <textarea class="form-control clear" id="remarks" placeholder="Remarks"> </textarea>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date From</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" value = "<?php echo date('Y-m-d');?>" placeholder="Date From" class="form-control pull-right" id="df-datepicker">
                  </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date To</label>
                  <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" value = "<?php echo date('Y-m-d');?>" placeholder="Date To" class="form-control pull-right" id="dt-datepicker">
                    </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date Received</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" placeholder="Date Received" value = "<?php echo date('Y-m-d');?>" class="form-control pull-right" id="dr-datepicker">
                </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">ADS Staff</label>
                  <select class="form-control" id="staff">
                     <option value="Kevin Rodriguez">Kevin Rodriguez</option>
                     <option value="Ivy Claire Repollo">Ivy Claire Repollo</option>
                     <option value="John Kenneth Pacific">John Kenneth Pacifico</option>
                  </select>
              </div>
          </div>
    </div>
		</form>
	  </div>
	  
		<div class="modal-footer">
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
			<button type="button" id="btn-save-new-encoding" class="btn  btn-primary"><i class="fas fa-save"></i> SAVE</button>
		</div>
			
	</div>
	<!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--END ADD ENCODING-->


<!-- EDIT ENCODING-->

<div class="modal fade" id="modal_edit_encoding">
  <div class="modal-dialog custom-modal">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Update</h4>
    </div>
    <div class="modal-body">
    <form class="">
    <div class="row">

        <div class="col-sm-4">
          <div class="form-group ">
            <label class="control-label">Department </label>
              <select class="form-control" id="f_dept" >
                <option value="college">College</option>
                <option value="shs">Senior High School</option>
              </select>
          </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
              <label class="control-label">Faculty </label>
              <select class="form-control" id="f_faculty" style="width:auto">
                <option value=''>--Select Faculty--</option>
                <?php
                  require('config/connection.php');

                  $faculty_query = "SELECT employee_id, f_lastname, f_firstname FROM faculty_list";
                  $result = mysqli_query($conn, $faculty_query);
                  if($result){

                    while($frow=mysqli_fetch_array($result)){
                      $fid = $frow['employee_id'];
                      $flastname = $frow['f_lastname'];
                      $ffirstname = $frow['f_firstname'];
                      $name = $flastname .", ".$ffirstname;
                      echo '<option value='.$fid.'>'.$name.'</option>';
                    }
                    mysqli_close($conn);
                  }
                ?>
               </select>
            </div>
          </div>
          <div class="col-sm-4">
              <div class="form-group">
                <label for="inputEmail3" class="control-label">AY/Sem </label>
                  <select class="form-control"  id="f_ay_sem">
                    <?php
                  require('config/connection.php');

                  $aca_query = "SELECT * FROM academic";
                  $result = mysqli_query($conn, $aca_query);
                  if($result){

                    while($frow=mysqli_fetch_array($result)){
                      $acode = $frow['aca_code'];
                      $ay = $frow['ay'];
                      $sem_code = $frow['sem_code'];
                      $sem = $frow['semester'];
                      
                      echo '<option value='.$acode.'>'.$ay. ' - '. $sem .'</option>';
                    }
                    mysqli_close($conn);
                  }
                ?>
                 </select>
              </div>
          </div>

          <div class="col-sm-8">
              <div class="form-group ">
                 <label class="control-label">Period </label>
                  <div class="checkbox" style="margin-top:-4px !important">
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="1"> Prelim
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="2"> Midterm
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="3"> Final
                    </label>
                  </div>
                  <div class="checkbox">
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="4"> 1st Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="5"> 2nd Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="6"> 3rd Quarter
                    </label>
                    <label class="control-label cscheck">
                          <input type="checkbox" name="f_period" value="7"> 4th Quarter
                    </label>
                  </div>
              </div>
            </div>
          <div class="col-sm-6">
              <div class="form-group">
                  <label class="control-label">Subjects </label>
                  <textarea class="form-control clear" placeholder="Input Subjects" id="f_subjects" > </textarea>
              </div>
          </div>

          <div class="col-sm-6">
              <div class="form-group">
                    <label for="inputEmail3" class="control-label">Remarks</label>
                    <textarea class="form-control clear" id="f_remarks" placeholder="Remarks"> </textarea>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date From</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" value = "<?php echo date('Y-m-d');?>" placeholder="Date From" class="form-control pull-right" id="f_df-datepicker">
                  </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date To</label>
                  <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" value = "<?php echo date('Y-m-d');?>" placeholder="Date To" class="form-control pull-right" id="f_dt-datepicker">
                    </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">Date Received</label>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" placeholder="Date Received" value = "<?php echo date('Y-m-d');?>" class="form-control pull-right" id="f_dr-datepicker">
                </div>
              </div>
          </div>

          <div class="col-sm-4">
              <div class="form-group">
                 <label for="inputEmail3" class="control-label">ADS Staff</label>
                  <select class="form-control" id="f_staff">
                     <option value="Kevin Rodriguez">Kevin Rodriguez</option>
                     <option value="Ivy Claire Repollo">Ivy Claire Repollo</option>
                     <option value="John Kenneth Pacific">John Kenneth Pacifico</option>
                  </select>
              </div>
          </div>
    </div>
    </form>
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-save-edit-encoding" class="btn  btn-primary"><i class="fas fa-save"></i> SAVE</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--END EDIT ENCODING-->


<!--ADD NEW FACULTY-->
<div class="modal fade" id="modal_add_faculty">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Add New Faculty</h4>
    </div>
    <div class="modal-body">
          <div class="form-group">
            <!--Faculty Id-->
            <label class="control-label">Faculty ID</label>
            <input type="text" class="form-control" id="faculty_id" placeholder="ex: 18-0001">    
         </div>

          <div class="form-group">
            <!--Faculty Lastname-->
            <label class="control-label">Lastname</label>
            <input type="text" class="form-control" id="f_lastname" placeholder="Enter Lastname">   
         </div>
  
          <div class="form-group">
            <!--Faculty Firstname-->
            <label class="control-label">Firstname</label>
            <input type="text" class="form-control" id="f_firstname" placeholder="Enter Lastname">   
         </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-save-new-faculty" class="btn btn-primary"><i class="fas fa-save"></i> SAVE</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--END ADD FACULTY-->





<!--ADD NEW FACULTY-->
<div class="modal fade" id="modal_edit_faculty">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Edit Faculty</h4>
    </div>
    <div class="modal-body">
          <div class="form-group">
            <!--Faculty Id-->
            <label class="control-label">Faculty ID</label>
            <input type="text" class="form-control" id="e_faculty_id" placeholder="ex: 18-0001">    
         </div>

          <div class="form-group">
            <!--Faculty Lastname-->
            <label class="control-label">Lastname</label>
            <input type="text" class="form-control" id="e_f_lastname" placeholder="Enter Lastname">   
         </div>
  
          <div class="form-group">
            <!--Faculty Firstname-->
            <label class="control-label">Firstname</label>
            <input type="text" class="form-control" id="e_f_firstname" placeholder="Enter Lastname">   
         </div>

         <div class="form-group">
            <!--Faculty Status-->
            <label class="control-label">Status</label>
            <select class="form-control" id="f_stat">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

          </div>

    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-save-edit-faculty" class="btn btn-primary"><i class="fas fa-save"></i> SAVE</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--END EDIT FACULTY-->


<!--ADD NEW USER-->
<div class="modal fade" id="modal_user">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Add User Account</h4>
    </div>
    <div class="modal-body">
          <div class="form-group">
            <!--Faculty Lastname-->
            <label class="control-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Input Name">   
         </div>
  
          <div class="form-group">
            <!--Faculty Firstname-->
            <label class="control-label">Username</label>
            <input type="text" class="form-control" id="uname" placeholder="Input Username">   
         </div>

          <div class="form-group">
            <!--Faculty Firstname-->
            <label class="control-label">Password</label>
            <input type="password" class="form-control" id="upass" placeholder="Password">   
         </div>

         <div class="form-group"  id="hide_stat">
            <!--Faculty Firstname-->
            <label class="control-label">Status</label>
            <select id = "ustatus" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>   
         </div>

    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-save-new-user" class="btn btn-primary"><i class="fas fa-save"></i> SAVE</button>
      <button type="button" id="btn-save-edit-user" class="btn btn-primary"><i class="fas fa-save"></i> SAVE CHANGES</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!--END ADD USER-->




<!---///////////////////////CONFIRMATION DIALOGS/////////////////////////////-->
<!--//Delete Encoding//-->
<div class="modal fade" id="modal_del_encoding">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Confirm</h4>
    </div>
    <div class="modal-body">
        <p>Are you sure you want to delete? </p>
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-del-encoding" class="btn  btn-danger"><i class="fas fa-trash"></i> DELETE</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


<!--//Delete Faculty//-->
<div class="modal fade" id="modal_del_faculty">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">Confirm</h4>
    </div>
    <div class="modal-body">
        <p>Are you sure you want to delete? </p>
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" id="btn-del-faculty" class="btn  btn-danger"><i class="fas fa-trash"></i> DELETE</button>
    </div>
      
  </div>
  <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!---///////////////////////END CONFIRMATION DIALOGS/////////////////////////////-->



