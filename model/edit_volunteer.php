<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username'])){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 	= $conn->real_escape_string($_POST['id']);
	$fullname    	= $conn->real_escape_string($_POST['fullname']);
	$address 		= $conn->real_escape_string($_POST['address']);
    $age	    	= $conn->real_escape_string($_POST['age']);
	$contact        = $conn->real_escape_string($_POST['contact']);
    $details 	    = $conn->real_escape_string($_POST['details']);

	if(!empty($id)){
		$query 		= "UPDATE tblreg SET `fullname` = '$fullname', `address` = '$address',`age` = '$age',`contact` = '$contact',`details` = '$details' WHERE id=$id;";	
		$result 	= $conn->query($query);

		if($result === true){
            
			$_SESSION['message'] = 'Volunteer details has been updated!';
			$_SESSION['success'] = 'success';

		}else{

			$_SESSION['message'] = 'Somethin went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}else{
		$_SESSION['message'] = 'No volunteer ID found!';
		$_SESSION['success'] = 'danger';
	}

    header("Location: ../vapplication.php");
	$conn->close();