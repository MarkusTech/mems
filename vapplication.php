<?php include 'server/server.php' ?>
<?php 
	error_reporting(0);
    $query = "SELECT * FROM tblreg";
    $result = $conn->query($query);

    $cnfm = array();
    while($row = $result->fetch_assoc()){
        $cnfm[] = $row; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Volunteer Application -  Disaster Risk Reduction and Management</title>
</head>
<body>
	<?php include 'templates/loading_screen.php' ?>

	<div class="wrapper">
		<!-- Main Header -->
		<?php include 'templates/main-header.php' ?>
		<!-- End Main Header -->

		<!-- Sidebar -->
		<?php include 'templates/sidebar.php' ?>
		<!-- End Sidebar -->
 
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold">Volunteers</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<?php if(isset($_SESSION['message'])): ?>
							<div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
								<?php echo $_SESSION['message']; ?>
							</div>
						<?php unset($_SESSION['message']); ?>
						<?php endif ?>
						<?php if($sort_confirmation == 'Apopong' && isset($_SESSION['role'])=='staff' && isset($_SESSION['role'])=='administrator'):?>
                    
                    	<?php endif ?>
					<div class="row mt--2">
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-wrap pb-2 justify-content-between">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="100">
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<h2 class="fw-bold mt-3"><?= ucwords($brgy) ?></h2>
											<h4 class="fw-bold mt-3"><i><?= ucwords($town) ?></i></h4>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<img src="assets/img/brgy-logo.png" class="img-fluid" width="100" style="visibility:hidden;">
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
								<div class="card-header">
									<div class="card-head-row">

										<form action="" method="GET">
											<div class="card-head-col">
											<h3>List of Volunteer:</h3>
											<div class="card-head-row">
											<select class="form-control" name="sort_confirmation">
                                        		<option disabled selected>Select Confirmation</option>
                                        		<option value="all" <?php if(isset($_GET['sort_confirmation']) && $_GET['sort_confirmation'] == "all") {
                                        			echo "selected";
                                        		} ?> >All</option>
                                        		<option value="confirmed" <?php if(isset($_GET['sort_confirmation']) && $_GET['sort_confirmation'] == "confirmed") {
                                        			echo "selected";
                                        		} ?> >Confirmed</option>
                                        		<option value="notconfirmed" <?php if(isset($_GET['sort_confirmation']) && $_GET['sort_confirmation'] == "notconfirmed") {
                                        			echo "selected";
                                        		} ?>>Not Confirmed</option>
                                    		</select>
                                    		<button type="submit" class="btn btn-link btn-primary" href="" id="basic-addon2">
                                    			<i class="fa fa-check"></i>
                                    		</button>
                                    	</div>
										</form>

									</div>
								</div>
								<?php endif ?>
							</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th scope="col">Fullname</th>
													<th scope="col">Address</th>
													<th scope="col">Age</th>
													<th scope="col">Contact</th>
													<th scope="col">Barangay</th>
													<th scope="col">Confirmation</th>
													<th scope="col">Action</th>
												</tr>
											</thead>

											<tbody>
												<?php if(!empty($cnfm)): ?>
													<?php foreach($cnfm as $row): ?>
														<tr>
															<td class="text-uppercase"><?= $row['fullname'] ?></td>
															<td><?= $row['address'] ?></td>
															<td><?= $row['age'] ?></td>
															<td><?= $row['contact'] ?></td>
															<td><?= $row['barangay'] ?></td>
															<?php if(isset($_SESSION['username'])):?>
																<?php if($_SESSION['role']=='administrator' || $_SESSION['role']=='staff'):?>
																	<td><?= $row['confirmation']=='Not Confirmed' ? '<span class="badge badge-danger">Not Confirmed</span>' :'<span class="badge badge-success">Confirmed</span>'?>
																		
																	</td>
																<?php endif ?>
																<td>
																	<?php if($_SESSION['role']=='administrator' || $_SESSION['role']=='staff'):?>
																	<a type="button" data-toggle="tooltip" href="model/confirm_volunteer.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to Confirm this Volunteer?');" class="btn btn-link btn-primary" data-original-title="Confirm">
																		<i class="fa fa-check"></i>
																	</a>
																	<?php endif ?>
																	<?php if($_SESSION['role']=='administrator' || $_SESSION['role']=='staff'):?>
																	<a type="button" data-toggle="tooltip" href="model/deny_volunteer.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to Deny this Volunteer?');" class="btn btn-link btn-danger" data-original-title="Deny">
																		<i class="fa fa-times"></i>
																	</a>
																	<?php endif ?>
																</td>
															<?php endif?>
														</tr>
													<?php endforeach ?>
												<?php else: ?>
													<tr>
														<td colspan="3" class="text-center">No Available Data</td>
													</tr>
												<?php endif ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			 <!-- Modal -->
			

			<!-- Modal -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Volunteer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/edit_official.php" >
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Fullname" name="name" required>
                                </div>
								<div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                                </div>
								<div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age" required>
                                </div>
								<div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" required>
                                </div>
								<div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" id="status" required name="status">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>	
                                    </select>
                                </div>

                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>