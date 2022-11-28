<?php include 'server/server.php' ?>
<?php
	error_reporting(0);
    $query1 = "SELECT * FROM tblbarangay ORDER BY `name`";
    $result1 = $conn->query($query1);

    $br = array();
    while($row = $result1->fetch_assoc()){
        $br[] = $row; 
    }
	
    $query2 = "SELECT * FROM tblincidentlist WHERE incident = 'landslide'";
    $result2 = $conn->query($query2);
    
    $incidentlist = array();
    while($row = $result2->fetch_assoc()){
        $incidentlist[] = $row; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Volunteer - Disaster Risk Reduction And Management</title>
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
								<h2 class="text-white fw-bold">Current Volunteers</h2>
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
                    <?php if($sort_barangay == 'voters' && isset($_SESSION['role']) && isset($_SESSION['role']) =='administrator'):?>
                    
                    <?php endif ?>
						
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
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">INCIDENT LIST</div>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                            <!-- <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a> -->
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
							<div class="card">
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th scope="col">ID</th>
													<th scope="col">Date</th>
													<th scope="col">Barangay</th>
													<th scope="col">Incident</th>
													<th scope="col">Location</th>
													<?php if(isset($_SESSION['username'])):?>
														<th>Action</th>
													<?php endif?>
												</tr>
											</thead>
											<tbody>
												<?php if(!empty($incidentlist)): ?>
													<?php foreach($incidentlist as $row): ?>
														<tr>
															<td><?= $row['id'] ?></td>
															<td><?= $row['date'] ?></td>
															<td><?= $row['barangay'] ?></td>
															<td><?= $row['incident'] ?></td>
															<td><?= $row['location'] ?></td>
															<?php if(isset($_SESSION['username'])):?>
																<td>
																	<?php if($_SESSION['role']=='administrator'):?>
																	<a type="button" data-toggle="tooltip" href="model/remove_incident.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this incident?');" class="btn btn-link btn-danger" data-original-title="Remove">
																		<i class="fa fa-times"></i>
																	</a>
																	<a type="button" data-toggle="tooltip" href="incident_data_all.php?state=all" class="btn btn-link btn-success">
																		Profiles
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
            <!-- <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Incident</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_incident.php" enctype="multipart/form-data">
							
                                <div class="form-group">
                                    <label>Date: *</label>
                                    <input type="date" class="form-control" name="ddate" required>
                                </div>
                                <div class="form-group">
									<label for="cars">Barangay: *</label>
									<select class="form-control" id="barangay" name="barangay" required>
                                        <option disabled selected>Select Barangay</option>
                                            <?php foreach($br as $row):?>
                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                            <?php endforeach ?>
                                    </select>
								</div>
                                <div class="form-group">
                                    <label>Incident: *</label>
                                        <select class="form-control" name="incident">
                                            <option disabled selected value="">Select Incident</option>
                                            <option value="Fire">Fire incident</option>
                                            <option value="Flood">Flood incident</option>
                                            <option value="Landslide">Landslide incident</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Location: *</label>
                                    <input type="text" class="form-control" placeholder="Enter Location" name="location" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> -->
			
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>