<?php include 'server/server.php' ?>
<?php 
	if(isset($_SESSION['role'])){
		if($_SESSION['role'] =='staff'){
			$off_q = "SELECT * FROM tblreg WHERE `status`='Active'";
		}else{
			$off_q = "SELECT * FROM tblreg WHERE `status`='Active'";
		}
	}else{
		$off_q = "SELECT * FROM tblreg WHERE `status`='Active'";
	}
	
	$res_o = $conn->query($off_q);

	$official = array();
	while($row = $res_o->fetch_assoc()){
		$official[] = $row; 
	}

	$query1 = "SELECT * FROM tblbarangay ORDER BY `name`";
    $result1 = $conn->query($query1);

    $barangay = array();
    while($row = $result1->fetch_assoc()){
        $barangay[] = $row; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Registration -  Disaster and Risk Reduction Management</title>
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
								<div class="card-header">
									<div class="card-head-row">
										<h3><b>Name: *</b></h3>
                                        <div class="col">
                                        	<form method="POST" action="model/save_official.php" >
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
                                                <label>SEX: *</label>
                                                    <select class="form-control" required name="gender">
                                                    <option disabled selected value="">Select Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
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
                                                <select class="form-control" name="cstatus">
                                                    <option disabled selected>Select Civil Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                    <option value="Separated">Separted</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Present Home Address: *</label>
                                                <textarea class="form-control" name="address" required placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Current Home Address: *</label>
                                                <textarea class="form-control" name="Caddress" required placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Residence Tel. No.: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Contact Number" name="numbers">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Cellphone Number: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact">
                                            </div>
                                        </div>
                                        <div class="col">
                                        	<label>Barangay: *</label>
                                            	<select class="form-control" required name="barangay">
                                                    <option disabled selected>Select Barangay</option>
                                                    <?php foreach($barangay as $row):?>
                                                    <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                            	</select>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Email Address: *</label>
                                                <textarea class="form-control" name="Emailaddress" required placeholder="Enter Email Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Birthdate: *</label>
                                                <input type="date" class="form-control" placeholder="Enter Birthdate" name="bdate" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Place of Birth: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Birthplace" name="bplace" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Religion: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Religion" name="religion">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Blood Type: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Blood Type" name="btype">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Color of the Eyes: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Color of the Eyes" name="eyescolor">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Color of Hair: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Color of Hair" name="haircolor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Complexion: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Complexion" name="complexion">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Identifying Marks: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Blood Type" name="imarks">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Build: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Build" name="build">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Weight: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Weight" name="weight">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Height: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Height" name="height">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Work Description: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Work Description" name="workdesc">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>TIN Number: *</label>
                                                <input type="number" class="form-control" placeholder="Enter TIN Number" name="tinnumber">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Office Designation/Position: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Office Designation/Position" name="odp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Office Address: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Office Address" name="officeAddress">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Office Tel. No.: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Office Tel. No." name="otn">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Cellphone Number: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Cellphone Number" name="cn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>Dialect/Language Spoken: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Dialect/Language Spoken" name="dialect">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                                <label>RESCUE/OTHER SKILL ACQUIRED: *</label>
                                                <input type="text" class="form-control" placeholder="Enter RESCUE/OTHER SKILL ACQUIRED" name="rescue">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Placed Acquired: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Placed Acquired" name="placedAcquired">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Date Acquired: *</label>
                                                <input type="date" class="form-control" placeholder="Enter Date Acquired" name="dateAcquired">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col">
                                            <div class="form-group">
                                            	<b>References: *</b>
                                                <label>Name: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="rName">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Position/Designation: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Position/Designation" name="rPosition">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Contact No.: *</label>
                                                <input type="number" class="form-control" placeholder="Enter Contact No." name="rContact">
                                            </div>
                                        </div>
                                    </div>
                        	</div>
                        <div class="modal-footer">
                            <input type="hidden" id="pos_id" name="id">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>

										
								</div>
							</div>
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
</body>
</html>