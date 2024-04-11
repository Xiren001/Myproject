<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialogs container">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add Resident</h4>
				</center>
			</div>

			<div class="modal-body ">
				<div class="container-fluid">
					<form method="POST" action="crudTransaction.php">

						<div class="row">

					<div class="img-div">
						<div id="preview" class="img-area col-md-4" data-img="">
                 			 <i class='bx bxs-cloud-upload icon-UP'></i>
                 			 <h3>Upload Image</h3>
               			</div>
               			 <div class="select-div">
							<label class="labels">
            			   <input type="file" name="upload_file" class="form-control"  id="upload_file" accept="image/*" onchange="getImagePreview(event)">
						   <span>Select a file</span>
    						  </label>
						</div>
               		</div>
              		

						<div class="con-modal">
							<label class="control-label">Firstname:</label>
							<input type="text" class="form-control" name="firstname">
						</div>
						<div class="con-modal">
							<label class="control-label">middlename:</label>
							<input type="text" class="form-control" name="middlename">
						</div>
						<div class="con-modal">
							<label class="control-label">Lastname:</label>
							<input type="text" class="form-control" name="lastname">
						</div>
						<div class="con-modal">
							<label class="control-label">suffix:</label>
							<select class="form-select" aria-label="Default select example" name="suffix">
								<option value="Jr.">Jr.</option>
								<option value="Sr.">Sr.</option>
								<option value="lll">lll</option>
								<option value="lV">lV</option>
								<option value="V">V</option>
							</select>
						</div>

						</div>


						<div class="row">

						<div class="con-modal">
							<label class="control-label">Address:</label>
							<input type="text" class="form-control" name="address">
						</div>

						<div class="con-modal">
							<label class="control-label">street:</label>
							<input type="text" class="form-control" name="street">
						</div>

						<div class="con-modal">
							<label class="control-label">subd_purok:</label>
							<select class="form-select" aria-label="Default select example" name="subd_purok">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						<div class="con-modal">
							<label class="control-label">block:</label>
							<select class="form-select" aria-label="Default select example" name="block">
								<option	option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						</div>



						<div class="row">

						<div class="con-modal">
							<label class="control-label">birthplace:</label>
							<input type="text" class="form-control" name="birthplace">
						</div>

						<div class="con-modal">
							<label class="control-label">Age:</label>
							<input type="number" class="form-control" name="age">
						</div>

						<div class="con-modal">
							<label class="control-label">Gender:</label>
							<select class="form-select" aria-label="Default select example" name="gender">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						<div class="con-modal">
							<label class="control-label">civil_status:</label>
							<select class="form-select" aria-label="Default select example" name="civil_status">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>	

						</div>



						<div class="row">

						<div class="con-modal">
							<label class="control-label">voters_id:</label>
							<input type="text" class="form-control" name="voters_id">
						</div>

						<div class="con-modal">
							<label class="control-label">citizenship:</label>
							<select class="form-select" aria-label="Default select example" name="citizenship">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						<div class="con-modal">
							<label class="control-label">presinct_no:</label>
							<input type="number" class="form-control" name="presinct_no">
						</div>

						<div class="con-modal">
							<label class="control-label">job_status:</label>
							<select class="form-select" aria-label="Default select example" name="job-status">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						</div>


						<div class="row">

						<div class="con-modal">
							<label class="control-label">religion:</label>
							<select class="form-select" aria-label="Default select example" name="religion">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
							</div>

						<div class="con-modal">
							<label class="control-label">blood_type:</label>
							<select class="form-select" aria-label="Default select example" name="blood_type">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						<div class="con-modal">
							<label class="control-label">email:</label>
							<input type="email" class="form-control" name="email">
						</div>

						<div class="con-modal">
							<label class="control-label">contact_number:</label>
							<input type="number" class="form-control" name="contact_number">
						</div>
						</div>


						<div class="row">

						<div class="con-modal">
							<label class="control-label">household_id:</label>
							<input type="number" class="form-control" name="household_id">
						</div>

						<div class="con-modal">
							<label class="control-label">occupation:</label>
							<select class="form-select" aria-label="Default select example" name="occupation">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								</select>
						</div>

						<div class="con-modal">
							<label class="control-label">disabilities:</label>
							<input type="text" class="form-control" name="disabilities">
						</div>

						<div class="con-modal">
							<label class="control-label">emergency_contacts:</label>
							<input type="number" class="form-control" name="emergency_contacts">
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