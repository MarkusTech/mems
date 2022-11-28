<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}

	$members 	= $conn->real_escape_string($_POST['members']);
	$fname 		= $conn->real_escape_string($_POST['fname']);
	$mname 		= $conn->real_escape_string($_POST['mname']);
    $lname 		= $conn->real_escape_string($_POST['lname']);
	$relationship 		= $conn->real_escape_string($_POST['relationship']);
    $age 	= $conn->real_escape_string($_POST['age']);
	$civilstatus 		= $conn->real_escape_string($_POST['civilstatus']);
    $gender 		= $conn->real_escape_string($_POST['gender']);
    $occupation 	= $conn->real_escape_string($_POST['occupation']);
	$income 	= $conn->real_escape_string($_POST['income']);
	$dependents = $conn->real_escape_string($_POST['dependents']);
	$child		= $conn->real_escape_string($_POST['child']);
    $senior 	= $conn->real_escape_string($_POST['senior']);
    $housecondition 	    = $conn->real_escape_string($_POST['housecondition']);
	$contact 	= $conn->real_escape_string($_POST['contact']);
    $outside 	= $conn->real_escape_string($_POST['outside']);
    $inside 	= $conn->real_escape_string($_POST['inside']);
    $amount 	= $conn->real_escape_string($_POST['amountdamage']);
    $housingstatus 		= $conn->real_escape_string($_POST['housingstatus']);
    $incident 		= $conn->real_escape_string($_POST['incident']);
    $barangay 		= $conn->real_escape_string($_POST['barangay']);
    
	$check = "SELECT id FROM tblincident WHERE firstname='$fname'";
	$nat = $conn->query($check)->num_rows;	

	if($nat == 0){
		if(!empty($fname)){

			if(!empty($profile) && !empty($profile2)){

				$query = "INSERT INTO tblincident (`members`,`firstname`, `middlename`, `lastname`, `relationship`, `age`, `civilstatus`, `gender`, `occupation`, `income`, `dependents`, `child`, `senior`, `housecondition`, `contact`, `outside`, `inside`, `amountdamage`, `housingstatus`, `incident`, `barangay`) 
							VALUES ('$members','$fname','$mname','$lname','$relationship','$age','$civilstatus','$gender','$occupation','$income','$dependents','$child','$senior','$housecondition','$contact','$outside','$inside','$amount','$housingstatus','$incident','$barangay')";

				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been saved!';
					$_SESSION['success'] = 'success';
				}
			}else if(!empty($profile) && !empty($profile2)){

				$query = "INSERT INTO tblincident (`members`,`firstname`, `middlename`, `lastname`, `relationship`, `age`, `civilstatus`, `gender`, `occupation`, `income`, `dependents`, `child`, `senior`, `housecondition`, `contact`, `outside`, `inside`, `amountdamage`, `housingstatus`, `incident`, `barangay`) 
							VALUES ('$members','$fname','$mname','$lname','$relationship','$age','$civilstatus','$gender','$occupation','$income','$dependents','$child','$senior','$housecondition','$contact','$outside','$inside','$amount','$housingstatus','$incident','$barangay')";

				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been saved!';
					$_SESSION['success'] = 'success';
				}

			}else if(!empty($profile) && !empty($profile2)){

				$query = "INSERT INTO tblincident (`members`,`firstname`, `middlename`, `lastname`, `relationship`, `age`, `civilstatus`, `gender`, `occupation`, `income`, `dependents`, `child`, `senior`, `housecondition`, `contact`, `outside`, `inside`, `amountdamage`, `housingstatus`, `incident`, `barangay`) 
							VALUES ('$members','$fname','$mname','$lname','$relationship','$age','$civilstatus','$gender','$occupation','$income','$dependents','$child','$senior','$housecondition','$contact','$outside','$inside','$amount','$housingstatus','$incident','$barangay')";

				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been saved!';
					$_SESSION['success'] = 'success';

					if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){

						$_SESSION['message'] = 'Evacuee Information has been saved!';
						$_SESSION['success'] = 'success';
					}
				}

			}else{
				
				$query = "INSERT INTO tblincident (`members`,`firstname`, `middlename`, `lastname`, `relationship`, `age`, `civilstatus`, `gender`, `occupation`, `income`, `dependents`, `child`, `senior`, `housecondition`, `contact`, `outside`, `inside`, `amountdamage`, `housingstatus`, `incident`, `barangay`) 
							VALUES ('$members','$fname','$mname','$lname','$relationship','$age','$civilstatus','$gender','$occupation','$income','$dependents','$child','$senior','$housecondition','$contact','$outside','$inside','$amount','$housingstatus','$incident','$barangay')";
				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been saved!';
					$_SESSION['success'] = 'success';
				}
			}

		}else{

			$_SESSION['message'] = 'Please complete the form!';
			$_SESSION['success'] = 'danger';
		}
	}else{
		$_SESSION['message'] = 'This info is already taken. Please enter a unique Information!';
		$_SESSION['success'] = 'danger';
	}
     header("Location: ../evacuee_info.php?sort_barangays=All");

	$conn->close();

