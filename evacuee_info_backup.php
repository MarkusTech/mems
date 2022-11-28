<?php include 'server/server.php' ?>
<?php 
    error_reporting(0);
    $query1 = "SELECT * FROM tblpurok ORDER BY `name`";
    $result1 = $conn->query($query1);

    $purok = array();
    while($row = $result1->fetch_assoc()){
        $purok[] = $row; 
    }

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
                                <h2 class="text-white fw-bold">All Barangay Evacuee Informations</h2>
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
                <div class="page-inner">
                    <div class="row mt--2">
                        <div class="col-md-12">

                            <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>
                            <?php if($sort_barangays == 'voters' && isset($_SESSION['role']) && isset($_SESSION['role']) =='administrator'):?>
                    
                            <?php endif ?>

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Evacuee Information</div>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Evacuee
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
                                            <select class="form-control" name="sort_barangays">
                                                <option disabled selected>Select Barangay</option>
                                                <option value="all" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "all") {
                                                    echo "selected";
                                                } ?> >All</option>
                                                <option value="apopong" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "apopong") {
                                                    echo "selected";
                                                } ?> >Apopong</option>
                                                <option value="baluan" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "baluan") {
                                                    echo "selected";
                                                } ?>>Baluan</option>
                                                <option value="batomelong" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "batomelong") {
                                                    echo "selected";
                                                } ?>>Batomelong</option>
                                                <option value="buayan" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "buayan") {
                                                    echo "selected";
                                                } ?>>Buayan</option>
                                                <option value="bula" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "bula") {
                                                    echo "selected";
                                                } ?>>Bula</option>
                                                <option value="calumpang" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "calumpang") {
                                                    echo "selected";
                                                } ?>>Calumpang</option>
                                                <option value="cityheights" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "cityheights") {
                                                    echo "selected";
                                                } ?> >City Heights</option>
                                                <option value="conel" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "conel") {
                                                    echo "selected";
                                                } ?> >Conel</option>
                                                <option value="dadeast" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "dadeast") {
                                                    echo "selected";
                                                } ?> >Dadiangas East</option>
                                                <option value="dadnorth" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "dadnorth") {
                                                    echo "selected";
                                                } ?> >Dadiangas North</option>
                                                <option value="dadsouth" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "dadsouth") {
                                                    echo "selected";
                                                } ?> >Dadiangas South</option>
                                                <option value="dadwest" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "dadwest") {
                                                    echo "selected";
                                                } ?> >Dadiangas West</option>
                                                <option value="fatima" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "fatima") {
                                                    echo "selected";
                                                } ?> >Fatima</option>
                                                <option value="katangawan" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "katangawan") {
                                                    echo "selected";
                                                } ?> >Katangawan</option>
                                                <option value="labangal" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "labangal") {
                                                    echo "selected";
                                                } ?> >Labangal</option>
                                                <option value="lagao" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "lagao") {
                                                    echo "selected";
                                                } ?> >Lagao</option>
                                                <option value="ligaya" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "ligaya") {
                                                    echo "selected";
                                                } ?> >Ligaya</option>
                                                <option value="mabuhay" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "mabuhay") {
                                                    echo "selected";
                                                } ?> >Mabuhay</option>
                                                <option value="olympog" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "olympog") {
                                                    echo "selected";
                                                } ?> >Olympog</option>
                                                <option value="sanisidro" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "sanisidro") {
                                                    echo "selected";
                                                } ?> >San Isidro</option>
                                                <option value="sanjose" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "sanjose") {
                                                    echo "selected";
                                                } ?> >San Jose</option>
                                                <option value="siguel" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "siguel") {
                                                    echo "selected";
                                                } ?> >Siguel</option>
                                                <option value="sinawal" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "sinawal") {
                                                    echo "selected";
                                                } ?> >Sinawal</option>
                                                <option value="tambler" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "tambler") {
                                                    echo "selected";
                                                } ?> >Tambler</option>
                                                <option value="tinagacan" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "tinagacan") {
                                                    echo "selected";
                                                } ?> >Tinagacan</option>
                                                <option value="upperlabay" <?php if(isset($_GET['sort_barangays']) && $_GET['sort_barangays'] == "upperlabay") {
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
                                        <table id="residenttable" class="display table table-striped">
                                            <thead>
                                                <tr>
                                                    <?php if(isset($_SESSION['username'])):?>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Civil Status</th>
                                                    <th scope="col">Gender</th>
                                                    <!--<th scope="col">Purok</th>-->
                                                    <th scope="col">Condition</th>
                                                    <th scope="col">Barangay</th>
                                                    <?php if(isset($_SESSION['username'])):?>
                                                        <?php if($_SESSION['role']=='administrator'):?>
                                                    <th scope="col">Information Status</th>
                                                    <?php endif ?>
                                                    <th scope="col">Action</th>
                                                    <?php endif ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($brgys)): ?>
                                                    <?php $no=1; foreach($brgys as $row): ?>
                                                    <tr>
                                                        <td>
                                                            <?= ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']) ?>
                                                        </td>
                                                        <td><?= $row['age'] ?></td>
                                                        <td><?= $row['civilstatus'] ?></td>
                                                        <td><?= $row['gender'] ?></td>
                                                        <!--<td><?= $row['purok'] ?></td>-->
                                                        <?php if(isset($_SESSION['username'])):?>
                                                            <td><?= $row['condtn'] ?></td>
                                                            <td><?= $row['barangay'] ?></td>
                                                            <?php if($_SESSION['role']=='administrator'):?>
                                                        <td><?= $row['infostatus'] ?></td>
                                                        <?php endif ?>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <a type="button" href="#edit" data-toggle="modal" class="btn btn-link btn-primary" title="View Resident" onclick="editResident(this)" 
                                                                    data-id="<?= $row['id'] ?>" data-fname="<?= $row['firstname'] ?>" data-mname="<?= $row['middlename'] ?>" data-lname="<?= $row['lastname'] ?>"
                                                                    data-alias="<?= $row['alias'] ?>" data-bplace="<?= $row['birthplace'] ?>" data-bdate="<?= $row['birthdate'] ?>" data-age="<?= $row['age'] ?>"
                                                                    data-cstatus="<?= $row['civilstatus'] ?>" data-gender="<?= $row['gender'] ?>" data-istatus="<?= $row['infostatus'] ?>" data-condition="<?= $row['condtn'] ?>" data-purok="<?= $row['purok'] ?>" data-barangay="<?= $row['barangay'] ?>"
                                                                    data-indetity="<?= $row['identified_as'] ?>" data-number="<?= $row['phone'] ?>" data-email="<?= $row['email'] ?>" data-address="<?= $row['address'] ?>" 
                                                                    data-remarks="<?= $row['remarks'] ?>">
                                                                    <?php if(isset($_SESSION['username'])): ?>
                                                                    <i class="fa fa-edit"></i>
                                                                    <?php else: ?>
                                                                        <i class="fa fa-eye"></i>
                                                                    <?php endif ?>
                                                                </a>
                                                                <?php if(isset($_SESSION['username']) && $_SESSION['role']=='administrator'):?>
                                                                <a type="button" data-toggle="tooltip" href="generate_resident.php?id=<?= $row['id'] ?>" class="btn btn-link btn-info" data-original-title="Generate">
                                                                    <i class="fa fa-file"></i>
                                                                </a>
                                                                <a type="button" data-toggle="tooltip" href="model/remove_resident.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this resident?');" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                                <?php endif ?>
                                                            </div>
                                                        </td>
                                                    <?php endif ?>
                                                        
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                    <?php endif ?>
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
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Evacuee Registration Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_resident.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div class="row">
                                <div class="col-md-11">
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
                                                <label>Alias: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Alias" name="alias">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Place of Birth: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Birthplace" name="bplace" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Birthdate: *</label>
                                                <input type="date" class="form-control" placeholder="Enter Birthdate" name="bdate" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
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
                                                </select>
                                            </div>
                                        </div>
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
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Condition: *</label>
                                                    <select class="form-control" name="condtn">
                                                    <option disabled selected value="">Select Condition</option>
                                                    <option value="Good">Good</option>
                                                    <option value="Injured">Injured</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Purok: *</label>
                                                    <select class="form-control" required name="purok">
                                                    <option disabled selected>Select Purok Name</option>
                                                    <?php foreach($purok as $row):?>
                                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Status: *</label>
                                                    <select class="form-control" name="istatus">
                                                        <option disabled selected>Select Status</option>
                                                        <option value="Normal">Normal</option>
                                                        <option value="PWD">PWD</option>
                                                        <option value="Pregnant">Pregnant</option>
                                                        <option value="SC">Senior Citizen</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Identified As: *</label>
                                                <select class="form-control indetity" name="indetity">
                                                    <option value="Positive">Positive</option>
                                                    <option value="Negative">Negative</option>
                                                    <option value="Unidentified">Unidentified</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Email Address: *</label>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Contact Number: *</label>
                                                <input type="text" class="form-control" placeholder="Enter Contact Number" name="number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Barangay: *</label>
                                                    <select class="form-control" required name="purok">
                                                    <option disabled selected>Select Barangay</option>
                                                    <?php foreach($brgy2 as $row):?>
                                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Address: *</label>
                                                <textarea class="form-control" name="address" required placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Remarks: *</label>
                                                <textarea class="form-control" name="remarks" required placeholder="Enter Remarks"></textarea>
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

            <!-- Modal -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit/View Evecuee Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/edit_resident.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div class="row">
                            </div>
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Firstname</label>
                                                <input type="text" class="form-control" placeholder="Enter Firstname" name="fname" id="fname" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Middlename</label>
                                                <input type="text" class="form-control" placeholder="Enter Middlename" name="mname" id="mname" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Lastname</label>
                                                <input type="text" class="form-control" placeholder="Enter Lastname" name="lname" id="lname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Alias</label>
                                                <input type="text" class="form-control" placeholder="Enter Alias" id="alias" name="alias">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Place of Birth</label>
                                                <input type="text" class="form-control" placeholder="Enter Birthplace" name="bplace" id="bplace" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Birthdate</label>
                                                <input type="date" class="form-control" placeholder="Enter Birthdate" name="bdate" id="bdate" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="number" class="form-control" placeholder="Enter Age" min="1" name="age" id="age" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                <label>Civil Status</label>
                                                <select class="form-control" required name="cstatus" id="cstatus">
                                                    <option disabled selected>Select Civil Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Widow">Widow</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" required name="gender" id="gender">
                                                    <option disabled selected value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label>Condition</label>
                                                <select class="form-control" required name="condtn">
                                                    <option disabled selected value="">Select Condition</option>
                                                    <option value="Good">Good</option>
                                                    <option value="Injured">Injured</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Purok</label>
                                                <select class="form-control" required name="purok" id="purok">
                                                    <option disabled selected>Select Purok Name</option>
                                                    <?php foreach($purok as $row):?>
                                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Information Status</label>
                                                <select class="form-control" required name="istatus" id="istatus">
                                                    <option disabled selected>Select Status</option>
                                                    <option value="normal">Normal</option>
                                                    <option value="pwd">PWD</option>
                                                    <option value="pregnant">Pregnant</option>
                                                    <option value="SC">Senior Citizen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Identified As</label>
                                                <select class="form-control indetity" name="indetity" id="indetity">
                                                    <option disabled selected>Select Identity</option>
                                                    <option value="Positive">Positive</option>
                                                    <option value="Negative">Negative</option>
                                                    <option value="Unidentified">Unidentified</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Enter Contact Number" name="number" id="number">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" required name="address" placeholder="Enter Address" id="address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea class="form-control" required name="remarks" placeholder="Enter Remarks" id="remarks"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="res_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <?php if(isset($_SESSION['username'])): ?>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <?php endif ?>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
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