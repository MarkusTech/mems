<?php include 'server/server.php' ?>
<?php

    $sort_barangay = $_GET['sort_barangay'];

    if($sort_barangay=="apopong"){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Apopong' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='baluan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Baluan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='batomelong'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Batomelong' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='buayan'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Buayan' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
    }elseif($sort_barangay=='bula'){
        $query2 = "SELECT * FROM tblreg WHERE barangay='Bula' AND confirmation = 'Confirmed'";
        $result2 = $conn->query($query2);
       
    }else{
        $query2 = "SELECT * FROM tblreg";
        $result2 = $conn->query($query2);
    }
    
    $brg = array();
    while($row = $result2->fetch_assoc()){
        $brg[] = $row; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Volunteer Information -  Monitoring and Evacuation Management System</title>
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
								<h2 class="text-white fw-bold"><?php if($sort_barangay == 'voters'){ echo 'Voters Information'; }elseif($sort_barangay == 'non_voters'){ echo 'Voters Informationsss'; }else{ echo 'Evacuee Information'; }?></h2>
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
                    <div class="row mt--2">
                        <div class="col-md-<?= $sort_barangay != 'voters' ? '9' : '12' ?>">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">
                                            <?php 
                                                if($sort_barangay=='apopong'){
                                                    echo 'All Apopong Volunteer';
                                                }elseif($sort_barangay=='baluan'){
                                                    echo 'All Baluan Volunteer';
                                                }elseif($sort_barangay=='Batomelong'){
                                                    echo 'All PWD Volunteer';
                                                }elseif($sort_barangay=='buayan'){
                                                    echo 'All Buayan Volunteer';
                                                }elseif($sort_barangay=='bula'){
                                                    echo 'All Bula volunteer';
                                                }else{
                                                    echo 'All Volunteer';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="residenttable" class="display table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Barangay</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($brg)): ?>
                                                    <?php $no=1; foreach($brg as $row): ?>
                                                    <tr>
                                                        <td><?= $row['fullname'] ?></td>
                                                        <td><?= $row['address'] ?></td>
                                                        <td><?= $row['age'] ?></td>
                                                        <td><?= $row['contact'] ?></td>
                                                        <td><?= $row['barangay'] ?></td>
                                                        <td><?= $row['status'] ?></td>
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($sort_barangay != 'voters'):?>
                        <div class="col-md-3">
                            <div class="card card-stats card-<?php 
                                                    if($sort_barangay=='apopong'){
                                                        echo 'secondary';
                                                    }elseif($sort_barangay=='baluan'){
                                                        echo 'warning';
                                                    }elseif($sort_barangay=='batomelong'){
                                                        echo 'success';
                                                    }elseif($sort_barangay=='buayan'){
                                                        echo 'info';
                                                    }elseif($sort_barangay=='bula'){
                                                        echo 'info';
                                                    }else{
                                                        echo 'primary';
                                                    }?> card-round">
                                
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
				</div>
			</div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#residenttable').DataTable();
        });
    </script>
</body>
</html>