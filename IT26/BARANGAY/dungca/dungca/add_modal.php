<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crudTransaction.php">
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="firstname">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">middlename:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="middlename">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="lastname">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Address:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="address">
					</div>
				</div>


				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">suffix:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="suffix">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">job_status:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="job_status">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">block:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="block">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">lot:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="lot">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">street:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="street">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">subd_purok:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="subd_purok">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">birthplace:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="birthplace">
					</div>
				</div>

				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Age:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="age">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Gender:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="gender">
					</div>
				</div>
				
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">civil_status:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="civil_status">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">citizenship:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="citizenship">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">email:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">religion:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="religion">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">height:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="height">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">weight:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="weight">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">blood_type:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="blood_type">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">voters_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="voters_id">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">presinct_no:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="presinct_no">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">contact_number:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="contact_number">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">bussiness_name:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="bussiness_name">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">bussiness_permit:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="bussiness_permit">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">purok_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="purok_id">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">household_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="household_id">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">monthly_income:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="monthly_income">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">city:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="city">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">province:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="province">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">occupation:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="occupation">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">disabilities:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="disabilities">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">emergency_contacts:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="emergency_contacts">
					</div>
				</div>
				



				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary">Save</button>
			</form>
            </div>
			
        </div>
    </div>
</div>