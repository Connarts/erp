<?php
// Create connection
$conn = new mysqli('localhost', 'connarts_ossai', 'ossai\'spassword', 'connarts_connarts');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { #$row = mysql_fetch_object($result)
        $rows[] = $row;
    }
} else {
    echo '{}'; //echo the empty error message.
}
//echo '<hr>';
echo '{ "data":' . ( json_encode($rows) )  . '}';
//echo '<hr>';
 
$conn->close();

?>