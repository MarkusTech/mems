<?php include 'server/server.php' ?>
<?php
	error_reporting(0);
    $query1 = "SELECT * FROM tblbarangay ORDER BY `name`";
    $result1 = $conn->query($query1);

    $br = array();
    while($row = $result1->fetch_assoc()){
        $br[] = $row; 
    }
	
    $query2 = "SELECT * FROM tblreg";
    $result2 = $conn->query($query2);
    
    $brg = array();
    while($row = $result2->fetch_assoc()){
        $brg[] = $row; 
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
								<?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
								<div class="card-header">
									<div class="card-head-row">

										<form action="" method="GET">
											<div class="card-head-col">
											<h3>Choose Barangay Volunteer:</h3>
											<div class="card-head-row">
											<select class="form-control" name="sort_barangay">
                                        		<option disabled selected>Select Barangay</option>
                                        		<option value="all" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "all") {
                                        			echo "selected";
                                        		} ?> >All</option>
                                        		<option value="apopong" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "apopong") {
                                        			echo "selected";
                                        		} ?> >Apopong</option>
                                        		<option value="baluan" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "baluan") {
                                        			echo "selected";
                                        		} ?>>Baluan</option>
                                        		<option value="batomelong" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "batomelong") {
                                        			echo "selected";
                                        		} ?>>Batomelong</option>
                                        		<option value="buayan" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "buayan") {
                                        			echo "selected";
                                        		} ?>>Buayan</option>
                                        		<option value="bula" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "bula") {
                                        			echo "selected";
                                        		} ?>>Bula</option>
                                        		<option value="calumpang" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "calumpang") {
                                        			echo "selected";
                                        		} ?>>Calumpang</option>
                                        		<option value="cityheights" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "cityheights") {
                                        			echo "selected";
                                        		} ?> >City Heights</option>
                                        		<option value="conel" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "conel") {
                                        			echo "selected";
                                        		} ?> >Conel</option>
                                        		<option value="dadeast" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "dadeast") {
                                        			echo "selected";
                                        		} ?> >Dadiangas East</option>
                                        		<option value="dadnorth" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "dadnorth") {
                                        			echo "selected";
                                        		} ?> >Dadiangas North</option>
                                        		<option value="dadsouth" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "dadsouth") {
                                        			echo "selected";
                                        		} ?> >Dadiangas South</option>
                                        		<option value="dadwest" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "dadwest") {
                                        			echo "selected";
                                        		} ?> >Dadiangas West</option>
                                        		<option value="fatima" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "fatima") {
                                        			echo "selected";
                                        		} ?> >Fatima</option>
                                        		<option value="katangawan" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "katangawan") {
                                        			echo "selected";
                                        		} ?> >Katangawan</option>
                                        		<option value="labangal" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "labangal") {
                                        			echo "selected";
                                        		} ?> >Labangal</option>
                                        		<option value="lagao" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "lagao") {
                                        			echo "selected";
                                        		} ?> >Lagao</option>
                                        		<option value="ligaya" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "ligaya") {
                                        			echo "selected";
                                        		} ?> >Ligaya</option>
                                        		<option value="mabuhay" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "mabuhay") {
                                        			echo "selected";
                                        		} ?> >Mabuhay</option>
                                        		<option value="olympog" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "olympog") {
                                        			echo "selected";
                                        		} ?> >Olympog</option>
                                        		<option value="sanisidro" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "sanisidro") {
                                        			echo "selected";
                                        		} ?> >San Isidro</option>
                                        		<option value="sanjose" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "sanjose") {
                                        			echo "selected";
                                        		} ?> >San Jose</option>
                                        		<option value="siguel" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "siguel") {
                                        			echo "selected";
                                        		} ?> >Siguel</option>
                                        		<option value="sinawal" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "sinawal") {
                                        			echo "selected";
                                        		} ?> >Sinawal</option>
                                        		<option value="tambler" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "tambler") {
                                        			echo "selected";
                                        		} ?> >Tambler</option>
                                        		<option value="tinagacan" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "tinagacan") {
                                        			echo "selected";
                                        		} ?> >Tinagacan</option>
                                        		<option value="upperlabay" <?php if(isset($_GET['sort_barangay']) && $_GET['sort_barangay'] == "upperlabay") {
                                        			echo "selected";
                                        		} ?> >Upper Labay</option>
                                    		</select>
                                    		<button type="submit" class="btn btn-link btn-primary" href="" id="basic-addon2">
                                    			<i class="fa fa-check"></i>
                                    		</button>
                                    	</div>
										</form>

									</div>
								</div>
								<?php endif ?>
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
													<?php if(isset($_SESSION['username'])):?>
														<?php if($_SESSION['role']=='administrator'):?>
															<th>Status</th>
														<?php endif ?>
														<th>Action</th>
													<?php endif?>
												</tr>
											</thead>
											<tbody>
												<?php if(!empty($brg)): ?>
													<?php foreach($brg as $row): ?>
														<tr>
															<td class="text-uppercase"><?= $row['fullname'] ?></td>
															<td><?= $row['address'] ?></td>
															<td><?= $row['age'] ?></td>
															<td><?= $row['contact'] ?></td>
															<td><?= $row['barangay'] ?></td>
															<?php if(isset($_SESSION['username'])):?>
																<?php if($_SESSION['role']=='administrator'):?>
																	<td><?= $row['status']=='Active' ? '<span class="badge badge-primary">Active</span>' :'<span class="badge badge-danger">Inactive</span>' ?></td>
																<?php endif ?>
																<td>
																	<a type="button" href="#edit" data-toggle="modal" class="btn btn-link btn-primary" 
																		title="Edit Position" onclick="editOfficial(this)" data-id="<?= $row['id'] ?>" data-status="<?= $row['status'] ?>" >
																		<i class="fa fa-edit"></i>
																	</a>
																	<?php if($_SESSION['role']=='administrator'):?>
																	<a type="button" data-toggle="tooltip" href="model/remove_official.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this official?');" class="btn btn-link btn-danger" data-original-title="Remove">
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
                            <h5 class="modal-title" id="exampleModalLabel">Edit Volunteer status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/edit_official.php" >
								<div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" id="status" required name="status">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>

                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="off_id" name="id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
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