<?php
$con = new PDO('mysql:host=localhost;dbname=sample' ,'root' ,'root');
$stat = $conn->query('select name form details');
foreach($stat as $row)
{
echo $row['name']
}

?>
