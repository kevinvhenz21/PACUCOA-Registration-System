<?php require ('../config/connection.php');?>

<section class="content-header">
      <h1>
        Registration
        <small></small>
	  </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Walkin</a></li>
        <li class="active">Add Walkin Registration</li>
      </ol>
 </section>

    <section class="content">
	  <div class="box box-default">
		<div class="box-header with-border">
              <h3 class="box-title">Registration Form</h3>
    </div>
			<div class="box-body">
				<form>	
					<div class="alert alert-success alert-dismissible" id="alert-reg-success" style="display:none;">
						<button type="button" class="close" aria-hidden="true">×</button>
						<i class="icon fa fa-check"></i> Registered Succesfully!
					</div>

					<div class="alert alert-danger alert-dismissible" id="alert-reg-danger" style="display:none;">
               			 <button type="button" class="close" aria-hidden="true">×</button>
               			 <i class="icon fa fa-check"></i> Registered Succesfully!
            		</div>

						<!-- Salutation -->

						<div class="form-group">
								<label> Salutation </label>
								<div class="radio">
									<label>
										<input type="radio" name="salutation" class="salutclass" value="Mr" checked="checked">
										Mr.
									</label>
									<label>
										<input type="radio" name="salutation" class="salutclass" value="Ms">
										Ms.
									</label>
									<label>
										<input type="radio" name="salutation" class="salutclass" value="Mrs." >
										Mrs.
									</label>
									<label>
										<input type="radio" name="salutation" id="othersalutation" style="margin-top:7px" value="othersalutation" >
										<input type="text" name="salutation_text" placeholder="Others" id="saluttextbox">	
									</label>
								</div>
								
           				 </div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="formGroupExampleInput2">Lastname</label>
								<input type="text" class="form-control" placeholder="Lastname">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="formGroupExampleInput2">Firstname</label>
								<input type="text" class="form-control" placeholder="Firstname">
							</div>
						</div>

						<!-- Affixes -->
						<div class="col-sm-4">
								<label> Affixes </label>
								<div class="radio">
									<label>
										<input type="radio" name="affixes" class="affixclass" value="jr">
										Jr.
									</label>
									<label>
										<input type="radio" name="affixes" class="affixclass" value="sr" >
										Sr.
									</label>
									<label>
										<input type="radio" name="affixes" id="otheraffixrb" style="margin-top:7px" >
										<input type="text" name="otheraffix" id="affixestbox" placeholder="Others">			
									</label>
								</div>
           				 </div>
					</div>	

					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label> PACUCOA Accreditor </label>
								<div class="radio">
									<label>
										<input type="radio" name="accreditor"  value=1 checked="">
										Yes
									</label>
									<label>
										<input type="radio" name="accreditor"  value=0 checked="">
										No
									</label>	
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
									<label> Source of Payment </label>
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											School
										</label>
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											Personal
										</label>	
									</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label> Name of Institution </label>
								<select class="form-control">
									<option></option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label> Name of Institution </label>
								<select class="form-control">
									<option></option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label> Type of School </label>
								<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											Sectarian
										</label>
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											Non Sectarian
										</label>
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
											State Universities/Colleges
										</label>		
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label> Region </label>
								<select class="form-control">
									<option></option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label> Email Address </label>
								<select class="form-control">
									<option></option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label> Contact Number </label>
								<select class="form-control">
									<option></option>
								</select>
							</div>
						</div>
					</div>

					   <button type="button" name="submit" id="btn-save-walkin" class="btn btn-primary"> Submit</button> 
					  
				</form>
			</div>
	  </div>
</section>

<?php

echo $_SERVER['PHP_SELF'];
ECHO '<BR>';
echo basename(dirname(__FILE__)) . PHP_EOL;

?>



         


        


