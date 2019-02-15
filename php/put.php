<?php
session_start();
include 'conn.php';

$imgArrTypes = array("image/png" , "image/jpg" , "image/jpeg" );

  // $theName = $_POST['brandname']."'s logo.".ltrim(strstr($_FILES['logo']['type'], "/"),"/");
  $theName = 'image' . random_int(1, 400) . "." . ltrim(strstr($_FILES['image']['type'], "/"),"/"); // using random isn't entirely safe as we might have the same name pop up...
  $m = move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $theName );
  
  $i = mysqli_query($conn, "INSERT INTO inventory (image, stock, name, brandname) VALUES ('".$theName."', '" . $_POST['stock'] . "', '".$_POST['name']."', '".$_SESSION['brandname']."' )");

  if ($m && $i) {
    http_response_code(200);
  } else {
    http_response_code(501);
  }

?>