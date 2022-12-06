<?Php
$host_name = "localhost";
$database = "cdrrmoc_db"; // Change your database name
$username = "root";          // Your database user id 
$password = "";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
?>