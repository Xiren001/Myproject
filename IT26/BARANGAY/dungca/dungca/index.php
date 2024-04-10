<?php
	//start session
	session_start();

	//crud with database connection
	include_once('Crud.php');

	$crud = new Crud();

	//fetch data
	$sql = "SELECT * FROM tbl_residence";
	$result = $crud->read($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP CRUD using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="">
	<h1 class="page-header">PHP CRUD using OOP Approach</h1>
	<div class="">
		<div class="">
			<?php
				if(isset($_SESSION['message'])){
					?>
						<div class="alert alert-info text-center">
							<?php echo $_SESSION['message']; ?>
						</div>
					<?php

					unset($_SESSION['message']);
				}
			
			?>
			<a href="#add" data-toggle="modal" class="btn btn-primary">Add New</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Firstname</th>
						<th>middlename</th>
						<th>Lastname</th>
						<th>Address</th>

						<th>Suffix</th>
						<th>Job Status</th>
						<th>Block</th>
						<th>Lot</th>
						<th>Street</th>
						<th>Purok</th>
						<th>Birthplace</th>
						<th>Birthday</th>

						<th>Age</th>
						<th>civil_status</th>
						<th>citizenship</th>
						<th>email</th>
						<th>religion</th>
						<th>height</th>
						<th>weight</th>
						<th>blood_type</th>
						<th>voters_id</th>
						<th>presinct_no</th>
						<th>contact_number</th>
						<th>bussiness_name</th>
						<th>bussiness_permit</th>
						<th>purok_id</th>
						<th>household_id</th>
						<th>monthly_income</th>
						<th>city</th>
						<th>province</th>
						<th>occupation</th>
						<th>disabilities</th>
						<th>emergency_contacts</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($result as $key => $row) {
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['firstname']; ?></td>
								<td><?php echo $row['middlename']; ?></td>
								<td><?php echo $row['lastname']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['suffix']; ?></td>
								<td><?php echo $row['job_status']; ?></td>
								<td><?php echo $row['block']; ?></td>
								<td><?php echo $row['lot']; ?></td>
								<td><?php echo $row['street']; ?></td>
								<td><?php echo $row['subd_purok']; ?></td>
								<td><?php echo $row['birthplace']; ?></td>
								<td><?php echo $row['birthday']; ?></td>

								<td><?php echo $row['age']; ?></td>
								<td><?php echo $row['gender']; ?></td>

								<td><?php echo $row['civil_status']; ?></td>
								<td><?php echo $row['citizenship']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['religion']; ?></td>
								<td><?php echo $row['height']; ?></td>
								<td><?php echo $row['weight']; ?></td>
								<td><?php echo $row['blood_type']; ?></td>
								<td><?php echo $row['voters_id']; ?></td>
								<td><?php echo $row['presinct_no']; ?></td>
								<td><?php echo $row['contact_number']; ?></td>
								<td><?php echo $row['bussiness_name']; ?></td>
								<td><?php echo $row['bussiness_permit']; ?></td>
								<td><?php echo $row['purok_id']; ?></td>
								<td><?php echo $row['household_id']; ?></td>
								<td><?php echo $row['monthly_income']; ?></td>
								<td><?php echo $row['city']; ?></td>
								<td><?php echo $row['province']; ?></td>
								<td><?php echo $row['occupation']; ?></td>
								<td><?php echo $row['disabilities']; ?></td>
								<td><?php echo $row['emergency_contacts']; ?></td>


								<td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">Edit</a> | 
									<a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
								</td>
								<?php include('action_modal.php'); ?>
							</tr>
							<?php     
					    }
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('add_modal.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"></script>
</body>
</html>