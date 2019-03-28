<?php require ('config/connection.php');?>

<section class="content-header">
      <h1>
        User Accounts
        <small></small>
	  </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> List</a></li>
        <li class="active">User List</li>
      </ol>
 </section>

    <section class="content">
	  <div class="box box-default">
			<div class="box-body">

				<div class="box-top-div">
					<button class="btn btn-primary btn-md" accesskey="n" id="btn_add_user"><i class="fas fa-plus"></i> Add User </button>
				</div>

				<div class="table-responsive">
					<table id="user_list" class="table-responsive table-striped table table-hover" style=width:100%; >
						<thead>
							<tr>	
								<th style="width:2%">No.</th>			
								<th style="width:50%">NAME</th>	
								<th style="width:18%">ACCOUNT STATUS</th>			
								<th style="width:30%;" align="center"></th>					
							</tr> 
						</thead>	
					</table>				
				</div>
			</div>
		</div>
</section>