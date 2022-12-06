<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }

	$ddate 	= $conn->real_escape_string($_POST['ddate']);
	$barangay 	= $conn->real_escape_string($_POST['barangay']);
    $incident 	= $conn->real_escape_string($_POST['incident']);
    $location   = $conn->real_escape_string($_POST['location']);


    if(!empty($incident)){
        $query = "SELECT * FROM tblincidentlist WHERE barangay='$barangay'";
        $res = $conn->query($query);

        if($res->num_rows){
            $_SESSION['message'] = 'Please fill up form!';
            $_SESSION['success'] = 'danger';
        }else{
            if($incident === 'fire'){
                $insert = "INSERT INTO incident (`fire`) values (1) from chart_data_line ";

                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }else if($incident === 'flood' ){
                $insert = "INSERT INTO incident (`flood`) values (1) from chart_data_line";
                $result  = $conn->query($insert);

                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }
        
    }else{

        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../evacuee_info.php?sort_barangays=All");

	$conn->close();
