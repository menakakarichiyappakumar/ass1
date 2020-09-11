
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sample";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Details"."<br><br>";
$sql = "SELECT id, name FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
