<?php
session_start();
include 'conn.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM inventory WHERE brandname = '".$_SESSION['brandname']."'";
$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { #$row = mysql_fetch_object($result)
        $rows[] = $row;
    }

    echo '{ "data":' . ( json_encode($rows) )  . '}';
} else {
    echo '{ "data": {} }'; //echo the empty error message.
}
 
$conn->close();

?>