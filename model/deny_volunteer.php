<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
    $id 	= $conn->real_escape_string($_GET['id']);

	if($id != ''){
		$query 		= "UPDATE tblreg SET confirmation='Not Confirmed' WHERE id=$id;";	
		$result 	= $conn->query($query);

		if($result === true){
            
			$_SESSION['message'] = 'Volunteer status has been updated!';
			$_SESSION['success'] = 'success';

		}else{
			$_SESSION['message'] = 'Somethin went wrong!';
			$_SESSION['success'] = 'danger';
		}

	}

    header("Location: ../vapplication.php?sort_confirmation=all");

	$conn->close();