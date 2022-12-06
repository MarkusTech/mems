<?php 
	include('../server/server.php');

    if(!isset($_SESSION['username'])){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }

	$date 	= $conn->real_escape_string($_POST['date']);
	$fire 	= $conn->real_escape_string($_POST['fire']);
    $flood 	= $conn->real_escape_string($_POST['flood']);
    $landslide   = $conn->real_escape_string($_POST['landslide']);
    $vehicular   = $conn->real_escape_string($_POST['vehicular']);
    $bigwaves   = $conn->real_escape_string($_POST['bigwaves']);

    if(!empty($date)){

        $query = "SELECT * FROM chart_data_line WHERE date='$date'";
        $res = $conn->query($query);

        if($res->num_rows){
            $_SESSION['message'] = 'Please fill up form!';
            $_SESSION['success'] = 'danger';
        }else{
            if(!empty($profile) && !empty($profile2)){
                $insert  = "INSERT INTO chart_data_line (`month`, `fire`, `flood`, `landslide`, `vehicular`, `bigwaves`) VALUES ('$date', '$fire', '$flood', '$landslide', '$vehicular', '$bigwaves')";
                $result  = $conn->query($insert);
    
                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }else if(!empty($profile) && empty($profile2)){
                $insert  = "INSERT INTO chart_data_line (`month`, `fire`, `flood`, `landslide`, `vehicular`, `bigwaves`) VALUES ('$date', '$fire', '$flood', '$landslide', '$vehicular', '$bigwaves')";
                $result  = $conn->query($insert);
    
                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }else if(empty($profile) && !empty($profile2)){
                $insert  = "INSERT INTO chart_data_line (`month`, `fire`, `flood`, `landslide`, `vehicular`, `bigwaves`) VALUES ('$date', '$fire', '$flood', '$landslide', '$vehicular', '$bigwaves')";
                $result  = $conn->query($insert);

                move_uploaded_file($_FILES['img']['tmp_name'], $target);

                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }else{
                $insert  = "INSERT INTO chart_data_line (`month`, `fire`, `flood`, `landslide`, `vehicular`, `bigwaves`) VALUES ('$date', '$fire', '$flood', '$landslide', '$vehicular', '$bigwaves')";
                $result  = $conn->query($insert);
                
                if($result === true){
                    $_SESSION['message'] = 'Incident added!';
                    $_SESSION['success'] = 'success';
    
                }else{
                    $_SESSION['message'] = 'Something went wrong!';
                    $_SESSION['success'] = 'danger';
                }
            }
        }
        
    }else{

        $_SESSION['message'] = 'Please fill up the form completely!';
        $_SESSION['success'] = 'danger';
    }

    header("Location: ../incident_fire.php?sort_barangays=All");

	$conn->close();
