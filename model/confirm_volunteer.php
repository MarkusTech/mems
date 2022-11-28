<?php 
	include '../server/server.php';

	if(!isset($_SESSION['username']) && $_SESSION['role']!='administrator'){
		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		}
	}
	
	$id 	= $conn->real_escape_string($_GET['id']);

	$check = "SELECT id FROM tblevacuee WHERE firstname`='$fname'";
	$nat = $conn->query($check)->num_rows;

	if($id != ''){
		$query 		= "UPDATE tblreg SET `confirmation`='Confirmed' WHERE id=$id;";
		$result 	= $conn->query($query);
		
		if($result === true){
            $_SESSION['message'] = 'Volunteer has been confirmed!';
            $_SESSION['success'] = 'success';
            
        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }
	}

    header("Location: ../vapplication.php");
	$conn->close();