<?php

$conn = new mysqli('localhost', 'connarts_ossai', 'ossai\'spassword', 'connarts_connarts');

$imgArrTypes = array("image/png" , "image/jpg" , "image/jpeg" );

  // $theName = $_POST['brandname']."'s logo.".ltrim(strstr($_FILES['logo']['type'], "/"),"/");
  $theName = 'image' . random_int(1, 400) . "." . ltrim(strstr($_FILES['image']['type'], "/"),"/"); // using random isn't entirely safe as we might have the same name pop up...
  $m = move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $theName );
  
  $i = mysqli_query($conn, "INSERT INTO inventory (image, stock, name) VALUES ('".$theName."', '" . $_POST['stock'] . "', '".$_POST['name']."' )");

  if ($m && $i) {
    # code...
    http_response_code(200);
  } else {
    # code...
    http_response_code(501);
  }

?>