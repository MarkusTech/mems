<?php include 'server/server.php' ?>
<?php 

	$query = "SELECT * FROM tblevacuee";
    $result = $conn->query($query);
	$total = $result->num_rows;

	$query1 = "SELECT * FROM tblevacuee WHERE gender='Male'";
    $result1 = $conn->query($query1);
	$male = $result1->num_rows;

	$query2 = "SELECT * FROM tblevacuee WHERE gender='Female'";
    $result2 = $conn->query($query2);
	$female = $result2->num_rows;

	$query3 = "SELECT * FROM tblevacuee WHERE infostatus='pwd'";
    $result3 = $conn->query($query3);
	$totalvoters = $result3->num_rows;

	$query4 = "SELECT * FROM tblevacuee WHERE infostatus='pregnant'";
	$non = $conn->query($query4)->num_rows;

	$query6 = "SELECT * FROM tblevacuee WHERE infostatus='Senior Citizen'";
	$precinct = $conn->query($query6)->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>About -  Monitoring and Evacuation Management System</title>
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
								<h2 class="text-white fw-bold">DISASTER RISK REDUCTION AND MANAGEMENT COUNCIL</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--2">
					<?php if(isset($_SESSION['message'])): ?>
							<div class="alert alert-<?= $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
								<?php echo $_SESSION['message']; ?>
							</div>
						<?php unset($_SESSION['message']); ?>
						<?php endif ?>
						</div>
						<div class="row">
						<div class="col">
							<div class="col-md-150">
								<div class="card-body">
									<div class="row">
										<div class="col-15">
											<marquee direction="left" scrollamount="5" loop="infinite">
      											<img src="assets/img/1.jpg" width="1500" height="550" alt="W3docs" />
      											<img src="assets/img/2.jpg" width="1500" height="550" alt="W3docs" />
    										</marquee>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>-->
		
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>