<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
	$barangay 	    = $conn->real_escape_string($_POST['barangay']);
    $id 	    = $conn->real_escape_string($_POST['id']);

    if(!empty($purok)){

        $query 		= "UPDATE tblbarangay SET `name` = '$barangay' WHERE id=$id;";	
		$result 	= $conn->query($query);

        if($result === true){
            $_SESSION['message'] = 'Barangay has been updated!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{

        $_SESSION['message'] = 'No barangay ID found!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../barangay.php");

	$conn->close();