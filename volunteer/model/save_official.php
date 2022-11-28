<?php 
	include('../server/server.php');

    
	$fname 	= $conn->real_escape_string($_POST['fname']);
	$address = $conn->real_escape_string($_POST['address']);
    $age 	= $conn->real_escape_string($_POST['age']);
	$contact 	= $conn->real_escape_string($_POST['contact']);
    $barangay    = $conn->real_escape_string($_POST['barangay']);

    if(!empty($fname) && !empty($address) && !empty($age) && !empty($contact)){

        $insert  = "INSERT INTO tblreg (fullname, address, age, contact, barangay, status, confirmation) VALUES ('$fname', '$address','$age', '$contact', '$barangay', 'Active', 'Not Confirmed')";
        $result  = $conn->query($insert);

        if($result === true){
            $_SESSION['message'] = 'Successfully Submitted!';
            $_SESSION['success'] = 'success';

        }else{
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['success'] = 'danger';
        }

    }else{

        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../registration.php");

	$conn->close();