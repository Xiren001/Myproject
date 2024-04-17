<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid text-center">
					<h5>Are sure you want to delete</h5>
					<h2>Name: <b><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></b></h2>
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
	<div class="modal-dialogs container">
		<div class="modal-content container">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Edit Member</h4>
				</center>
			</div>

			<div class="modal-body container">
				<div class="container-fluid">
					<form style="display:flex; flex-direction:row;" class="form" method="POST" action="crudTransaction.php?id=<?php echo $row['id']; ?>">

	
						<div class="con-1">


							<div class="row">
								<div class="img-div">
									<div id="preview" class="img-area col-md-4" data-img="">
										<i class='bx bxs-cloud-upload icon-UP'></i>
										<h3>Upload Image</h3>
									</div>
									<div class="select-div">
										<label class="labels">
											<input type="file" name="profile" value="" class="form-control" id="upload_file" accept="image/*" onchange="getImagePreview(event)">
											<span class="img-label">Select a file</span>
										</label>
									</div>
								</div>
							</div>


							<div class="row">

								<div class="con-modal">
									<label class="control-label">blood_type:</label>
									<select class="form-select" aria-label="Default select example" name="blood_type" value="<?php echo $row['blood_type']; ?>">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB-">AB+</option>
										<option value="AB-">AB-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
									</select>
								</div>

								<div class="con-modal">
									<label class="control-label">religion:</label>
									<select class="form-select" aria-label="Default select example" name="religion" value="<?php echo $row['religion']; ?>">
										<option value="roman-catholic">Roman Catholic</option>
										<option value="islam">Islam</option>
										<option value="evangelical">Evangelical</option>
										<option value="iglesia-ni-cristo">Iglesia ni Cristo</option>
										<option value="ang-dating-daan">Ang Dating Daan</option>
										<option value="buddhism">Buddhism</option>
										<option value="hinduism">Hinduism</option>
										<option value="judaism">Judaism</option>
										<option value="atheism">Atheism</option>
										<option value="other">Other</option>
									</select>
								</div>


							</div>
							<div class="row">

								<div class="con-modal">
									<label class="control-label">civil_status:</label>
									<select class="form-select" aria-label="Default select example" name="civil_status" value="<?php echo $row['civil_status']; ?>">
										<option value="single">Single</option>
										<option value="married">Married</option>
										<option value="divorced">Divorced</option>
										<option value="widowed">Widowed</option>
									</select>
								</div>

								<div class="con-modal">
									<label class="control-label">job_status:</label>
									<select class="form-select" aria-label="Default select example" name="job_status" value="<?php echo $row['job_status']; ?>">
										<option value="employed">Employed</option>
										<option value="unemployed">Unemployed</option>
										<option value="self-employed">Self-Employed</option>
										<option value="freelancer">Freelancer</option>
										<option value="student">Student</option>
										<option value="retired">Retired</option>
										<option value="homemaker">Homemaker</option>
									</select>
								</div>
							</div>

						</div>

						<div class="con-2">
							<div class="row">
								<div class="con-modal">
									<label class="control-label">Firstname:</label>
									<input type="text" class="form-control" name="firstname" autocomplete="off" value="<?php echo $row['firstname']; ?>" required>
								</div>
								<div class="con-modal">
									<label class="control-label">middlename:</label>
									<input type="text" class="form-control" name="middlename" autocomplete="off" value="<?php echo $row['middlename']; ?>" required>
								</div>
								<div class="con-modal">
									<label class="control-label">Lastname:</label>
									<input type="text" class="form-control" name="lastname" autocomplete="off" value="<?php echo $row['lastname']; ?>" required>
								</div>
								<div class="con-modal">
									<label class="control-label">suffix:</label>
									<select class="form-select" aria-label="Default select example" name="suffix" value="<?php echo $row['suffix']; ?>">
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
									<input type="text" class="form-control" name="address" autocomplete="off" value="<?php echo $row['address']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">street:</label>
									<input type="text" class="form-control" name="street" autocomplete="off" value="<?php echo $row['street']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">birthday:</label>
									<input type="date" class="form-control" name="birthday" autocomplete="off" value="<?php echo $row['birthday']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">subd_purok:</label>
									<select class="form-select" aria-label="Default select example" name="subd_purok" value="<?php echo $row['subd_purok']; ?>">
										<option value="purok-1">Purok 1</option>
										<option value="purok-2">Purok 2</option>
										<option value="purok-3">Purok 3</option>
										<option value="purok-4">Purok 4</option>
										<option value="purok-5">Purok 5</option>
										<option value="purok-6">Purok 6</option>
										<option value="purok-7">Purok 7</option>
										<option value="purok-8">Purok 8</option>
										<option value="purok-9">Purok 9</option>
										<option value="purok-10">Purok 10</option>
									</select>
								</div>

								<div class="con-modal">
									<label class="control-label">block:</label>
									<select class="form-select" aria-label="Default select example" name="block" value="<?php echo $row['block']; ?>">
										<option value="block-1">Block 1</option>
										<option value="block-2">Block 2</option>
										<option value="block-3">Block 3</option>
										<option value="block-4">Block 4</option>
										<option value="block-5">Block 5</option>
										<option value="block-6">Block 6</option>
										<option value="block-7">Block 7</option>
										<option value="block-8">Block 8</option>
										<option value="block-9">Block 9</option>
										<option value="block-10">Block 10</option>
									</select>
								</div>

							</div>



							<div class="row">

								<div class="con-modal">
									<label class="control-label">birthplace:</label> 
									<input type="text" class="form-control" name="birthplace" autocomplete="off" value="<?php echo $row['birthplace']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">Age:</label>
									<input type="number" class="form-control" name="age" autocomplete="off" value="<?php echo $row['age']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">Gender:</label>
									<select class="form-select" aria-label="Default select example" name="gender" value="<?php echo $row['gender']; ?>">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								</div>

								<div class="con-modal">
									<label class="control-label">occupation:</label>
									<input type="text" class="form-control" name="occupation" autocomplete="off" value="<?php echo $row['occupation']; ?>" required>
								</div>

							</div>



							<div class="row">

								<div class="con-modal">
									<label class="control-label">voters_id:</label>
									<input type="text" class="form-control" name="voters_id" autocomplete="off" value="<?php echo $row['voters_id']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">citizenship:</label>
									<select class="form-select" aria-label="Default select example" name="citizenship" value="<?php echo $row['citizenship']; ?>">
										<option value="filipino">Filipino</option>
										<option value="american">American</option>
										<option value="british">British</option>
										<option value="australian">Australian</option>
									</select>
								</div>

								<div class="con-modal">
									<label class="control-label">presinct_no:</label>
									<input type="number" class="form-control" name="presinct_no" autocomplete="off" value="<?php echo $row['presinct_no']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">emergency_contacts:</label>
									<input type="number" class="form-control" name="emergency_contacts" autocomplete="off" value="<?php echo $row['emergency_contacts']; ?>" required>
								</div>

							</div>


							<div class="row">

								<div class="con-modal">
									<label class="control-label">disabilities:</label>
									<input type="text" class="form-control" name="disabilities" autocomplete="off" value="<?php echo $row['disabilities']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">household_id:</label>
									<input type="number" class="form-control" name="household_id" autocomplete="off" value="<?php echo $row['household_id']; ?>" required>
								</div>


								<div class="con-modal">
									<label class="control-label">email:</label>
									<input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $row['email']; ?>" required>
								</div>

								<div class="con-modal">
									<label class="control-label">contact_number:</label>
									<input type="number" class="form-control" name="contact_number" autocomplete="off" value="<?php echo $row['contact_number']; ?>" required>
								</div>
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