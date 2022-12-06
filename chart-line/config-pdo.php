<?Php
$host_name = "localhost";
$database = "cdrrmoc_db"; // Change your database nae
$username = "root";          // Your database user id
$password = "";          // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "<br>Error!: " . $e->getMessage() . "<br/>";
echo "<br><br><font color=red>
Check MySQL login details inside <b>config.php</b> file</font>";
die();
}
?>
