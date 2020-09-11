<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "sample";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "done";
$stat = $conn->query('select name form details');
foreach($statement as $row)
{
echo $row['name']
}

?>
