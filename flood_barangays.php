<?php include 'server/server.php' ?>
<?php

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
                                        <div class="card-title">BARANGAY INCIDENT LIST</div>
                                        <?php if(isset($_SESSION['username'])): ?>
                                        <div class="card-tools">
                                            <!--
                                            <a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
                                                <i class="fa fa-plus"></i>
                                                Incident
                                            </a>
                                        -->
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
													<th scope="col">Barangay</th>
												</tr>
											</thead>

                                            <?php if($_SESSION['role']=='administrator'):?>
											<tbody>
														<tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>
                                            
                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Apopong'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Baluan'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Batomelong'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Buayan'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Bula'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Calumpang'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='City Heights'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Conel'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas East'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas North'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas South'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Dadiangas West'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Fatima'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Katangawan'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Labangal'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Lagao'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Ligaya'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Mabuhay'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Olympog'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='San Isidro'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='San Jose'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Siguel'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Sinawal'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Tambler'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Tinagacan'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

                                            <?php if($_SESSION['role']=='staff' && $_SESSION['barangay']=='Upper Labay'):?>
                                                <tbody>
                                                <tr>
															<td><a href="incident_data.php?state=floodapopong">Apopong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbula">Bula</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbatomelong">Batomelong</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbaluan">Baluan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodbuayan">Buayan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcalumpang">Calumpang</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodcityheights">City Heights</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodconel">Conel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadeast">Dadiangas East</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadnorth">Dadiangas North</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadsouth">Dadiangas South</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=flooddadwest">Dadiangas West</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodkatangawan">Katangawan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlabangal">Labangal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodlagao">Lagao</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodligaya">Ligaya</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodmabuhay">Mabuhay</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodolympog">Olympog</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanisidro">San Isidro</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsanjose">San Jose</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsiguel">Siguel</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodsinawal">Sinawal</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtambler">Tambler</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodtinagacan">Tinagacan</td></a>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="incident_data.php?state=floodupperlabay">Upper Labay</td></a>
														</tr>
												<?php else: ?>
													<tr>
														<td colspan="6" class="text-center">No Available Data</td>
													</tr>
											</tbody>
                                            <?php endif ?>

										</table>
									</div>
								</div>
							</div>
				</div>
			</div>

            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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