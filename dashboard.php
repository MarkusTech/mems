<?php include 'server/server.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<title>Dashboard -  Monitoring and Evacuation Management System</title>
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
								<h2 class="text-white fw-bold">Dashboard</h2>
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
				<div class="page-inner mt--2">
					
				<!-- line chart code -->
				<?php include 'chart-line/index.php' ?>


					
				</div>
				<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			</div>
		</div>
						
		</div>
	</div>
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>