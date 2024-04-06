<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid text-center">
				<h5>Are sure you want to delete</h5>
				<h2>Name: <b><?php echo $row['firstname'].' '.$row['lastname']; ?></b></h2> 
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="crudTransaction.php?delete&id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crudTransaction.php?id=<?php echo $row['id']; ?>">
			
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Firstname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">middlename:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="middlename" class="form-control" value="<?php echo $row['middlename']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Lastname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Address:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
					</div>
				</div>

				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">suffix:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="suffix" class="form-control" value="<?php echo $row['suffix']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">job_status:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="job_status" class="form-control" value="<?php echo $row['job_status']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">block:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="block" class="form-control" value="<?php echo $row['block']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">lot:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="lot" class="form-control" value="<?php echo $row['lot']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">street:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="street" class="form-control" value="<?php echo $row['street']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">subd_purok:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="subd_purok" class="form-control" value="<?php echo $row['subd_purok']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">birthplace:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="birthplace" class="form-control" value="<?php echo $row['birthplace']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">	birthday:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="birthday" class="form-control" value="<?php echo $row['birthday']; ?>">
					</div>
				</div>



				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Age:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>">
					</div>
				</div>

				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Gender:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>



				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">civil_status:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="civil_status" class="form-control" value="<?php echo $row['civil_status']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">citizenship:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="citizenship" class="form-control" value="<?php echo $row['citizenship']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">email:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">religion:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="religion" class="form-control" value="<?php echo $row['religion']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">height:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="height" class="form-control" value="<?php echo $row['height']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">weight:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="weight" class="form-control" value="<?php echo $row['weight']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">blood_type:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="blood_type" class="form-control" value="<?php echo $row['blood_type']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">voters_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="voters_id" class="form-control" value="<?php echo $row['voters_id']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">presinct_no:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="presinct_no" class="form-control" value="<?php echo $row['presinct_no']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">contact_number:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="contact_number" class="form-control" value="<?php echo $row['contact_number']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">bussiness_name:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="bussiness_name" class="form-control" value="<?php echo $row['bussiness_name']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">bussiness_permit:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="bussiness_permit" class="form-control" value="<?php echo $row['bussiness_permit']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">purok_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="purok_id" class="form-control" value="<?php echo $row['purok_id']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">household_id:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="household_id" class="form-control" value="<?php echo $row['household_id']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">monthly_income:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="monthly_income" class="form-control" value="<?php echo $row['monthly_income']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">city:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">province:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="province" class="form-control" value="<?php echo $row['province']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">occupation:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">disabilities:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="disabilities" class="form-control" value="<?php echo $row['disabilities']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">emergency_contacts:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="emergency_contacts" class="form-control" value="<?php echo $row['emergency_contacts']; ?>">
					</div>
				</div>


				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="edit" class="btn btn-warning">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
<!-- /.modal -->