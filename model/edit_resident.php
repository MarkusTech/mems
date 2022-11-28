<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 		= $conn->real_escape_string($_POST['id']);
	$fname 		= $conn->real_escape_string($_POST['fname']);
	$mname 		= $conn->real_escape_string($_POST['mname']);
    $lname 		= $conn->real_escape_string($_POST['lname']);
	$alias 		= $conn->real_escape_string($_POST['alias']);
    $bplace 	= $conn->real_escape_string($_POST['bplace']);
	$bdate 		= $conn->real_escape_string($_POST['bdate']);
    $age 		= $conn->real_escape_string($_POST['age']);
    $cstatus 	= $conn->real_escape_string($_POST['cstatus']);
	$gender 	= $conn->real_escape_string($_POST['gender']);
	$infostatus = $conn->real_escape_string($_POST['istatus']);
	$purok	 	= $conn->real_escape_string($_POST['purok']);
    $indetity 	= $conn->real_escape_string($_POST['indetity']);
    $email 	    = $conn->real_escape_string($_POST['email']);
	$number 	= $conn->real_escape_string($_POST['number']);
    $address 	= $conn->real_escape_string($_POST['address']);
    $remarks 	= $conn->real_escape_string($_POST['remarks']);
    $condtn 	= $conn->real_escape_string($_POST['condtn']);

	$check = "SELECT id FROM tblevacuee WHERE firstname`='$fname'";
	$nat = $conn->query($check)->num_rows;	

	if(!empty($id)){
		if(!empty($fname)){
			$query = "UPDATE tblevacuee SET firstname='$fname', middlename='$mname', lastname='$lname', alias='$alias', birthplace='$bplace', birthdate='$bdate', 
						age=$age, civilstatus='$cstatus', gender='$gender', infostatus='$infostatus', purok='$purok', identified_as='$indetity', phone='$number', email='$email', address='$address', remarks='$remarks', condtn='$condtn'
						WHERE id=$id";


			if($conn->query($query) === true){

				$_SESSION['message'] = 'Evacuee Information has been updated!';
				$_SESSION['success'] = 'success';
			}
			else if(!empty($fname)){

				$query = "UPDATE tblevacuee SET firstname='$fname', middlename='$mname', lastname='$lname', alias='$alias', birthplace='$bplace', birthdate='$bdate', 
						age=$age, civilstatus='$cstatus', gender='$gender', infostatus='$infostatus', purok='$purok', identified_as='$indetity', phone='$number', email='$email', address='$address', remarks='$remarks', condtn='$condtn'
						WHERE id=$id";

				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been updated!';
					$_SESSION['success'] = 'success';
				}

			}else if(empty($fname)){

				$query = "UPDATE tblevacuee SET firstname='$fname', middlename='$mname', lastname='$lname', alias='$alias', birthplace='$bplace', birthdate='$bdate', 
						age=$age, civilstatus='$cstatus', gender='$gender', infostatus='$infostatus', purok='$purok', identified_as='$indetity', phone='$number', email='$email', address='$address', remarks='$remarks', condtn='$condtn'
						WHERE id=$id";


				if($conn->query($query) === true){

					$_SESSION['message'] = 'Evacuee Information has been updated!!';
					$_SESSION['success'] = 'success';
				}

			}else{
				$query = "UPDATE tblevacuee SET firstname='$fname', middlename='$mname', lastname='$lname', alias='$alias', birthplace='$bplace', birthdate='$bdate', 
						age=$age, civilstatus='$cstatus', gender='$gender', infostatus='$infostatus', purok='$purok', identified_as='$indetity', phone='$number', email='$email', address='$address', remarks='$remarks', condtn='$condtn'
						WHERE id=$id";
				
				if($conn->query($query) === true){
					$_SESSION['message'] = 'Evacuee Information has been updated!';
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
    header("Location: ../resident.php");

	$conn->close();