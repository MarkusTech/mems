<?php 
    include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }
    
    $fname  = $conn->real_escape_string($_POST['fname']);
    $address = $conn->real_escape_string($_POST['address']);
    $age    = $conn->real_escape_string($_POST['age']);
    $contact    = $conn->real_escape_string($_POST['contact']);

    if(!empty($fname) && !empty($address) && !empty($age) && !empty($contact)){

        $insert  = "INSERT INTO tblreg (fullname, address, age, contact, status, confirmation) VALUES ('$fname', '$address','$age', '$contact', 'Active', 'Not Confirmed')";
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

    header("Location: ../officials.php");

    $conn->close();