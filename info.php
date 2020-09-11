
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
$sql = "select id, name from details";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " ". "<br>";
  }
mysqli_close($conn);
?>
