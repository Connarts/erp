<?php
include 'conn.php';


foreach($_POST['name'] as $x => $x_value) {
    // echo "Key=" . $x . ", Value=" . $x_value;
    // echo "<br>";
    $sqlll = "DELETE FROM inventory WHERE stock = '".$_POST['stock'][$x]."' AND name = '$x_value' ";
    $result = $conn->query($sqlll);
}
http_response_code(200);
?>