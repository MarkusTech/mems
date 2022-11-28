
<?php include 'server/server.php' ?>
<?php 
    error_reporting(0);
    $query = "SELECT * FROM tblevacuee";
    $result = $conn->query($query);
    
    $query2 = "SELECT * FROM tblevacuee";
    $result2 = $conn->query($query2);
    
    $brgys = array();
    while($row = $result2->fetch_assoc()){
        $brgys[] = $row; 
    }

    $query3 = "SELECT * FROM tblbarangay ORDER BY `name`";
    $result3 = $conn->query($query3);

    $brgy2 = array();
    while($row = $result3->fetch_assoc()){
        $brgy2[] = $row; 
    }

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'Fire'";
    $result4 = $conn->query($query4);
    $Firetotal = $result4->num_rows;

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'Flood'";
    $result4 = $conn->query($query4);
    $Floodtotal = $result4->num_rows;

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'Landslide'";
    $result4 = $conn->query($query4);
    $Landslidetotal = $result4->num_rows;

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'BigWaves'";
    $result4 = $conn->query($query4);
    $BigWavestotal = $result4->num_rows;

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'Vehicular'";
    $result4 = $conn->query($query4);
    $Vehiculartotal = $result4->num_rows;

    $query4 = "SELECT * FROM tblincidentlist WHERE incident = 'Others'";
    $result4 = $conn->query($query4);
    $Otherstotal = $result4->num_rows;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
    <title>Evacuee Information - Disaster Risk Reduction and Management</title>
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
                                <h2 class="text-white fw-bold">All Evacuee Information</h2>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="card card-stats card-danger card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-fire "></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold text-uppercase">Fire Incident</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($Firetotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_fire.php" class="card-link text-light">All Fire Evacuee Informations </a>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------- -->
                        <div class="col-md-4">
                            <div class="card card-stats card-info card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-cloud"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold text-uppercase">Flood Incident</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($Floodtotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_flood.php" class="card-link text-light">All Flood Evacuee Informations </a>
                                </div>
                            </div>
                        </div>
                        <!-- ------------------------------ -->
                        <div class="col-md-4">
                            <div class="card card-stats card-success card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-cookie-bite"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold text-uppercase">Landslide incident</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($Landslidetotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_landslide.php" class="card-link text-light">All Landslide Evacuee Informations </a>
                                </div>
                            </div>
                        </div>
                        <!-- ----------------------------------------- -->
                        <div class="col-md-4">
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                            <i class='fa fa-car'></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold ">Vehicular Accident</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($Vehiculartotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_vehicular.php" class="card-link text-light">Vehicular Accident </a>
                                </div>
                            </div>
                        </div>


                        <!-- ----------------------- -->
                        <div class="col-md-4">
                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                            <i class="fa-solid fa-water-arrow-up"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold text-uppercase">Big Waves</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($BigWavestotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_bigwaves.php" class="card-link text-light">Big Waves </a>
                                </div>
                            </div>
                        </div>
                        <!-- ------------------- -->
                        <div class="col-md-4">
                            <div class="card card-stats card-primary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                            <i class="fa-solid fa-water-arrow-up"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h2 class="fw-bold text-uppercase">Others</h2>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($Otherstotal) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="incident_others.php" class="card-link text-light">Others </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Barangay Incident</h5>
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
                                            <?php foreach($brgy2 as $row):?>
                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                            <?php endforeach ?>
                                    </select>
								</div>
                                <div class="form-group">
                                    <label>Incident: *</label>
                                        <select class="form-control" name="incident">
                                            <option disabled selected value="">Select Incident</option>
                                            option value="Fire">Fire incident</option>
                                            <option value="Fire">Fire incident</option>
                                            <option value="Flood">Flood incident</option>
                                            <option value="Landslide">Landslide incident</option>
											<option value="Vehicular">Vehicular Accident</option>
											<option value="BigWaves">Big Waves</option>
											<option value="Others">Others</option>

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
            </div>
                <!-- Main Footer -->
            <?php include 'templates/main-footer.php' ?>
            <!-- End Main Footer -->
        
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