<?php include 'server/server.php' ?>
<?php 

if($state=='Apopong'){
    $query = "SELECT * FROM tblincidentlist WHERE barangay = 'Apopong'";
    $result = $conn->query($query);
}else{
    $query = "SELECT * FROM tblincident WHERE barangay = 'siguel'";
    $result = $conn->query($query);
}

$incident = array();
while($row = $result->fetch_assoc()){
    $incident[] = $row; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Evacuee Information -  Disaster and Risk Reduction Management</title>
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
								<h2 class="text-white fw-bold"><?php if($state == 'voters'){ echo 'Voters Information'; }elseif($state == 'non_voters'){ echo 'Voters Informationsss'; }else{ echo 'Evacuee Information'; }?></h2>
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
                    <?php if($state == 'voters' && isset($_SESSION['role']) && isset($_SESSION['role']) =='administrator'):?>
                    
                    <?php endif ?>
                        <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">BARANGAY DATA LIST</div>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'): ?>
                                            <a href="exportcsv/export_resident_csv_all.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Apopong'): ?>
                                            <a href="exportcsv/export_resident_csv_apopong.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Baluan'): ?>
                                            <a href="exportcsv/export_resident_csv_baluan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Batomelong'): ?>
                                            <a href="exportcsv/export_resident_csv_batomelong.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Buayan'): ?>
                                            <a href="exportcsv/export_resident_csv_buayan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Bula'): ?>
                                            <a href="exportcsv/export_resident_csv_bula.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Calumpang'): ?>
                                            <a href="exportcsv/export_resident_csv_calumpang.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='City Heights'): ?>
                                            <a href="exportcsv/export_resident_csv_cityheights.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Conel'): ?>
                                            <a href="exportcsv/export_resident_csv_conel.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas East'): ?>
                                            <a href="exportcsv/export_resident_csv_dadeast.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas North'): ?>
                                            <a href="exportcsv/export_resident_csv_dadnorth.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas South'): ?>
                                            <a href="exportcsv/export_resident_csv_dadsouth.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas West'): ?>
                                            <a href="exportcsv/export_resident_csv_west.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Fatima'): ?>
                                            <a href="exportcsv/export_resident_csv_fatima.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Katangawan'): ?>
                                            <a href="exportcsv/export_resident_csv_katangawan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Labangal'): ?>
                                            <a href="exportcsv/export_resident_csv_labangal.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Lagao'): ?>
                                            <a href="exportcsv/export_resident_csv_lagao.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Ligaya'): ?>
                                            <a href="exportcsv/export_resident_csv_ligaya.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Mabuhay'): ?>
                                            <a href="exportcsv/export_resident_csv_mabuhay.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Olympog'): ?>
                                            <a href="exportcsv/export_resident_csv_olympog.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Isidro'): ?>
                                            <a href="exportcsv/export_resident_csv_sanisidro.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='San Jose'): ?>
                                            <a href="exportcsv/export_resident_csv_sanjose.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Siguel'): ?>
                                            <a href="exportcsv/export_resident_csv_siguel.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Sinawal'): ?>
                                            <a href="exportcsv/export_resident_csv_sinawal.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tambler'): ?>
                                            <a href="exportcsv/export_resident_csv_tambler.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Tinagacan'): ?>
                                            <a href="exportcsv/export_resident_csv_tinagacan.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                        <?php if(isset($_SESSION['username']) && $_SESSION['role']=='staff' && $_SESSION['barangay']=='Upper Labay'): ?>
                                            <a href="exportcsv/export_resident_csv_upperlabay.php" class="btn btn-danger btn-border btn-round btn-sm">
                                                <i class="fa fa-file"></i>
                                                Export CSV
                                            </a>
                                        </div>
                                        <?php endif ?>
                                            <!--
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        -->
                                </div>
                            </div>
							<div class="card">
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th scope="col">First Name</th>
													<th scope="col">Middle Name</th>
													<th scope="col">Last Name</th>
													<th scope="col">Relationship</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">C. Status</th>
													<th scope="col">Gender</th>
													<th scope="col">Occupation</th>
													<th scope="col">Income</th>
                                                    <th scope="col">Dependents</th>
													<th scope="col">Child</th>
													<th scope="col">Senior</th>
													<th scope="col">H. Condition</th>
                                                    <th scope="col">Contact</th>
													<th scope="col">Amount Damage</th>
													<th scope="col">H. Status</th>
													<th scope="col">Barangay</th>
                                                    <?php if($_SESSION['role']=='administrator'):?>
														<th>Action</th>
													<?php endif?>
												</tr>
											</thead>

                                            <?php if($_SESSION['role']=='administrator'):?>
											<tbody>
												<?php if(!empty($incident)): ?>
													<?php foreach($incident as $row): ?>
														<tr>
															<td><?= $row['firstname'] ?></td>
															<td><?= $row['middlename'] ?></td>
                                                            <td><?= $row['lastname'] ?></td>
															<td><?= $row['relationship'] ?></td>
															<td><?= $row['age'] ?></td>
                                                            <td><?= $row['civilstatus'] ?></td>
															<td><?= $row['gender'] ?></td>
															<td><?= $row['occupation'] ?></td>
															<td><?= $row['income'] ?></td>
                                                            <td><?= $row['dependents'] ?></td>
															<td><?= $row['child'] ?></td>
															<td><?= $row['senior'] ?></td>
															<td><?= $row['housecondition'] ?></td>
                                                            <td><?= $row['contact'] ?></td>
															<td><?= $row['amountdamage'] ?></td>
															<td><?= $row['housingstatus'] ?></td>
															<td><?= $row['barangay'] ?></td>
															<?php if(isset($_SESSION['username'])):?>
																<td>
																	<?php if($_SESSION['role']=='administrator'):?>
																	<a type="button" data-toggle="tooltip" href="model/remove_incident.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this incident?');" class="btn btn-link btn-danger" data-original-title="Remove">
																		<i class="fa fa-times"></i>
																	<?php endif ?>
																</td>
															<?php endif?>
                                                            </a>
														</tr>
													<?php endforeach ?>
												<?php else: ?>
													<tr>
														<td colspan="12" class="text-center">No Available Data</td>
													</tr>
												<?php endif ?>
											</tbody>
                                            <?php endif ?>
                                            
                                            
										</table>
									</div>
								</div>
							</div>
				</div>
			</div>

            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Data Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_evacuee.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>HH-MEMBERS: *</label>
                                                <select class="form-control" required name="members">
                                                    <option disabled selected value="">Select HouseHold/MEMBERS</option>
                                                    <option value="H">H</option>
                                                    <option value="M">M</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Firstname: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Firstname" name="fname" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Middlename: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Middlename" name="mname" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Lastname: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Lastname" name="lname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Relationship to client: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Relationship to client" name="relationship">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Age: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Age" min="1" name="age" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Civil Status: *</label>
                                                <select class="form-control" required name="civilstatus">
                                                    <option disabled selected value="">Select Civil Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Gender: *</label>
                                                <select class="form-control" required name="gender">
                                                    <option disabled selected value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Occupation: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Occupation" name="occupation">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Monthly Income: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Monthly Income" name="income">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>No. Of Dependents: *</label>
                                                <input type="text" class="form-control" placeholder="Enter No. Of Dependents" name="dependents">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>With Child(BELOW 18 YEARS OLD): *</label>
                                                <input type="number" class="form-control" placeholder="Enter How many child below 18" name="child">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>With Senior Citizen: *</label>
                                                <input type="number" class="form-control" placeholder="Enter How many Senior Citizen" name="senior">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Housing Condition: *</label>
                                                <input type="text" class="form-control" placeholder="Enter House Condition" name="housecondition">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Contact No.: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Contact Number" name="contact">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Outside Evacuation: *</label>
                                                    <select class="form-control" required name="outside">
                                                    <option disabled selected value="">Select Yes/No</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Barangay: *</label>
                                                <select class="form-control" required name="barangay">
                                                    <option disabled selected>Select Barangay</option>
                                                        <?php foreach($br as $row):?>
                                                    <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Inside Evacuation: *</label>
                                                    <select class="form-control" required name="inside">
                                                    <option disabled selected value="">Select Yes/No</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Amount of Damage: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Amount of damage" name="amount">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Housing Status: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Housing status" name="housingstatus">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Incident: *</label>
                                                    <select class="form-control" name="incident">
                                                    <option disabled selected value="">Select Incident</option>
                                                    <option value="Fire">Fire incident</option>
                                                    <option value="Flood">Flood incident</option>
                                                    <option value="Landslide">Landslide incident</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
                                            
        </div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datepicker').datepicker();
        })
    </script>
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#residenttable').DataTable();
        });
    </script>
</body>
</html>