<?php include 'server/server.php' ?>
<?php 

	$query = "SELECT * FROM tblevacuee";
    $result = $conn->query($query);
	$total = $result->num_rows;

	$query1 = "SELECT * FROM tblreg";
    $result1 = $conn->query($query1);
	$volunteer = $result1->num_rows;

	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Apopong' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireApopong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Baluan' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireBaluan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Batomelong' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireBatomelong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Buayan' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireBuayan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Bula' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireBula = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Calumpang' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireCalumpang = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'City Heights' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireCityheights = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Conel' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireConel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas East' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireDadeast = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas North' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireDadnorth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas South' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireDadsouth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas West' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireDadwest = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Fatima' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireFatima = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Katangawan' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireKatangawan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Labangal' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireLabangal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Lagao' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireLagao = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Ligaya' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireLigaya = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Mabuhay' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireMabuhay = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Olympog' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireOlympog = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Isidro' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireSanisidro = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Jose' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireSanjose = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Siguel' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireSiguel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Sinawal' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireSinawal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tambler' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireTambler = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tinagacan' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireTinagacan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Upper Labay' AND incident = 'Fire'";
	$result2 = $conn->query($query2);
	$FireUpperlabay = $result2->num_rows;

	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Apopong' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodApopong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Baluan' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodBaluan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Batomelong' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodBatomelong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Buayan' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodBuayan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Bula' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodBula = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Calumpang' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodCalumpang = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'City Heights' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodCityheights = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Conel' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodConel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas East' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodDadeast = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas North' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodDadnorth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas South' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodDadsouth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas West' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodDadwest = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Fatima' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodFatima = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Katangawan' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodKatangawan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Labangal' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodLabangal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Lagao' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodLagao = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Ligaya' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodLigaya = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Mabuhay' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodMabuhay = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Olympog' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodOlympog = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Isidro' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodSanisidro = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Jose' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodSanjose = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Siguel' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodSiguel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Sinawal' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodSinawal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tambler' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodTambler = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tinagacan' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodTinagacan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Upper Labay' AND incident = 'Flood'";
	$result2 = $conn->query($query2);
	$FloodUpperlabay = $result2->num_rows;

	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Apopong' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideApopong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Baluan' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideBaluan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Batomelong' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideBatomelong = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Buayan' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideBuayan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Bula' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideBula = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Calumpang' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideCalumpang = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'City Heights' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideCityheights = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Conel' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideConel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas East' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideDadeast = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas North' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideDadnorth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas South' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideDadsouth = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Dadiangas West' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideDadwest = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Fatima' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideFatima = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Katangawan' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideKatangawan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Labangal' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$FLandslideLabangal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Lagao' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideLagao = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Ligaya' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideLigaya = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Mabuhay' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideMabuhay = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Olympog' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideOlympog = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Isidro' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideSanisidro = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'San Jose' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideSanjose = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Siguel' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideSiguel = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Sinawal' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideSinawal = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tambler' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideTambler = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Tinagacan' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideTinagacan = $result2->num_rows;
	$query2 = "SELECT * FROM tblincidentlist WHERE barangay = 'Upper Labay' AND incident = 'Landslide'";
	$result2 = $conn->query($query2);
	$LandslideUpperlabay = $result2->num_rows;
?>

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
					
					</div>
					<div>
  						<canvas id="myChart"></canvas>
					</div>
					<div class="row">
						<div class="col">
							<div class="col-md-150">
								<div class="card-body">
									<canvas id="myChart" width="150" height="25"></canvas>
										<script>
											const ctx = document.getElementById('myChart').getContext('2d');
											const myChart = new Chart(ctx, {
    										type: 'bar',
    										data: {
        										labels: ['Apopong','Baluan','Batomelong','Buayan','Bula','Calumpang','City Heights','Conel','Dadiangas East','Dadiangas North','Dadiangas South','Dadiangas West','Fatima','Katangawan','Labangal','Lagao','Ligaya','Mabuhay','Olympog','San Isidro','San Jose','Siguel','Sinawal','Tambler','Tinagacan','Upper Labay'],
        										datasets: [{
            										label: 'Fire Incident',
            										data: [<?= number_format($FireApopong) ?>, <?= number_format($FireBaluan) ?>, <?= number_format($FireBatomelong) ?>, <?= number_format($FireBuayan) ?>, <?= number_format($FireBula) ?>, <?= number_format($FireCalumpang) ?>, <?= number_format($FireCityheights) ?>, <?= number_format($FireConel) ?>, <?= number_format($FireDadeast) ?>, <?= number_format($FireDadnorth) ?>, <?= number_format($FireDadsouth) ?>, <?= number_format($FireDadwest) ?>, <?= number_format($FireFatima) ?>, <?= number_format($FireKatangawan) ?>, <?= number_format($FireLabangal) ?>, <?= number_format($FireLagao) ?>, <?= number_format($FireLigaya) ?>, <?= number_format($FireMabuhay) ?>, <?= number_format($FireOlympog) ?>, <?= number_format($FireSanisidro) ?>, <?= number_format($FireSanjose) ?>, <?= number_format($FireSiguel) ?>, <?= number_format($FireSinawal) ?>, <?= number_format($FireTambler) ?>, <?= number_format($FireTinagacan) ?>, <?= number_format($FireUpperlabay) ?>],
            										backgroundColor: [
                										'rgb(232, 24, 24)'
            										],
            										borderColor: [
                										'rgb(232, 24, 24)'
            											],
            											borderWidth: 1
        											}]
    											},
    										options: {
        										scales: {
            										y: {
                										beginAtZero: true
            										}
        										}
    										}
										});
										</script>
								</div>
							</div>
						</div>
					</div>
					<div>
  						<canvas id="myChart2"></canvas>
					</div>
					<div class="row">
						<div class="col">
							<div class="col-md-150">
								<div class="card-body">
									<canvas id="myChart2" width="150" height="25"></canvas>
										<script>
											const ctx2 = document.getElementById('myChart2').getContext('2d');
											const myChart2 = new Chart(ctx2, {
    										type: 'bar',
    										data: {
        										labels: ['Apopong','Baluan','Batomelong','Buayan','Bula','Calumpang','City Heights','Conel','Dadiangas East','Dadiangas North','Dadiangas South','Dadiangas West','Fatima','Katangawan','Labangal','Lagao','Ligaya','Mabuhay','Olympog','San Isidro','San Jose','Siguel','Sinawal','Tambler','Tinagacan','Upper Labay'],
        										datasets: [{
            										label: 'Flood Incident',
            										data: [<?= number_format($FloodApopong) ?>, <?= number_format($FloodBaluan) ?>, <?= number_format($FloodBatomelong) ?>, <?= number_format($FloodBuayan) ?>, <?= number_format($FloodBula) ?>, <?= number_format($FloodCalumpang) ?>, <?= number_format($FloodCityheights) ?>, <?= number_format($FloodConel) ?>, <?= number_format($FloodDadeast) ?>, <?= number_format($FloodDadnorth) ?>, <?= number_format($FloodDadsouth) ?>, <?= number_format($FloodDadwest) ?>, <?= number_format($FloodFatima) ?>, <?= number_format($FloodKatangawan) ?>, <?= number_format($FloodLabangal) ?>, <?= number_format($FloodLagao) ?>, <?= number_format($FFloodLigaya) ?>, <?= number_format($FloodMabuhay) ?>, <?= number_format($FloodOlympog) ?>, <?= number_format($FloodSanisidro) ?>, <?= number_format($FloodSanjose) ?>, <?= number_format($FloodSiguel) ?>, <?= number_format($FloodSinawal) ?>, <?= number_format($FloodTambler) ?>, <?= number_format($FloodTinagacan) ?>, <?= number_format($FloodUpperlabay) ?>],
            										backgroundColor: [
                										'rgb(14, 136, 229)'
            										],
            										borderColor: [
                										'rgb(14, 136, 229)'
            											],
            											borderWidth: 1
        											}]
    											},
    										options: {
        										scales: {
            										y: {
                										beginAtZero: true
            										}
        										}
    										}
										});
										</script>
								</div>
							</div>
						</div>
					</div>
					<div>
  						<canvas id="myChart3"></canvas>
					</div>
					<div class="row">
						<div class="col">
							<div class="col-md-150">
								<div class="card-body">
									<canvas id="myChart3" width="150" height="10"></canvas>
										<script>
											const ctx3 = document.getElementById('myChart3').getContext('2d');
											const myChart3 = new Chart(ctx3, {
    										type: 'bar',
    										data: {
        										labels: ['Apopong','Baluan','Batomelong','Buayan','Bula','Calumpang','City Heights','Conel','Dadiangas East','Dadiangas North','Dadiangas South','Dadiangas West','Fatima','Katangawan','Labangal','Lagao','Ligaya','Mabuhay','Olympog','San Isidro','San Jose','Siguel','Sinawal','Tambler','Tinagacan','Upper Labay'],
        										datasets: [{
            										label: 'Landslide Incident',
            										data: [<?= number_format($LandslideApopong) ?>, <?= number_format($LandslideBaluan) ?>, <?= number_format($LandslideBatomelong) ?>, <?= number_format($LandslideBuayan) ?>, <?= number_format($LandslideBula) ?>, <?= number_format($LandslideCalumpang) ?>, <?= number_format($LandslideCityheights) ?>, <?= number_format($LandslideConel) ?>, <?= number_format($LandslideDadeast) ?>, <?= number_format($LandslideDadnorth) ?>, <?= number_format($LandslideDadsouth) ?>, <?= number_format($LandslideDadwest) ?>, <?= number_format($LandslideFatima) ?>, <?= number_format($LandslideKatangawan) ?>, <?= number_format($LandslideLabangal) ?>, <?= number_format($LandslideLagao) ?>, <?= number_format($FLandslideLigaya) ?>, <?= number_format($LandslideMabuhay) ?>, <?= number_format($LandslideOlympog) ?>, <?= number_format($LandslideSanisidro) ?>, <?= number_format($LandslideSanjose) ?>, <?= number_format($LandslideSiguel) ?>, <?= number_format($LandslideSinawal) ?>, <?= number_format($LandslideTambler) ?>, <?= number_format($LandslideTinagacan) ?>, <?= number_format($LandslideUpperlabay) ?>],
            										backgroundColor: [
                										'rgb(28, 204, 15)'
            										],
            										borderColor: [
                										'rgb(28, 204, 15)'
            											],
            											borderWidth: 1
        											}]
    											},
    										options: {
        										scales: {
            										y: {
                										beginAtZero: true
            										}
        										}
    										}
										});
										</script>
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
						
		</div>
	</div>
	</div>
	<?php include 'templates/footer.php' ?>
</body>
</html>