
<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "sample";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_close($conn);
?>
