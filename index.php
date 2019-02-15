<?php
session_start();
ob_start();
$_SESSION['logged'] = 0;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>CONNARTS' ERP - </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Connarts' ERP. Focus more on your custmers and your product." />
        <meta name="keywords" content="Africa, ERP, Design-Catalogue, Inventory, Products, Connarts" />
        <meta name="author" content="Connarts' Team" />
        <link rel="icon" href="assets/conn - Copy (48x48).png">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>sth</span><div><h3>inventory management</h3></div></li>
            <li><span>Image 02</span><div><h3>design catalogue</h3></div></li>
            <li><span>Image 03</span><div><h3>customer management</h3></div></li>
            <li><span>Image 04</span><div><h3>project management</h3></div></li>
            <li><span>Image 05</span><div><h3>report and analysis</h3></div></li>
            <li><span>Image 06</span><div><h3>social media integration</h3></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top">
                <a href="http://tympanus.net/Development/RockingLetters/">
                    <strong>&laquo; Previous Demo: </strong>Rocking Letters with CSS3 &amp; jQuery
                </a>
                <span class="right">
                    <a href="http://www.flickr.com/photos/markjsebastian/" target="_blank">Photography by Mark Sebastian</a>
                    <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.en" target="_blank">CC BY-SA 2.0</a>
                    <a href="http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> --><!--/ Codrops top bar -->
            <header>
                <h1>CONNARTS' <span>Erp Tool</span></h1>
                <h2>For every professional tailor and SMEs in the fashion industry</h2>
                <p class="codrops-demos">
                  <a href="#" data-toggle="modal" data-target="#register">Register here</a> <!-- removed class="current-demo" -->
                  <a href="index.html" data-toggle="modal" data-target="#login">Quickly Login</a>
                </p>
            </header>


            <!-- the registration and login -->
            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel01">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                        <!-- <div class="display-4 pb-3">
                          Sign up here
                        </div> -->
      
      
                          <form class="" name="signup" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="form-group">
                              <label for="Rbrandname">Brand name</label>
                              <input type="text" class="form-control" name="Rbrandname" required aria-describedby="brand name" placeholder="Enter brand name">
                            </div>
                            <div class="form-group">
                              <label for="Remail">Email address</label>
                              <input type="email" class="form-control" autocomplete="email" name="Remail" required aria-describedby="email" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">Use an official email <i>if you have one</i>.</small>
                            </div>
                            <div class="form-group">
                              <label for="Rpassword">Password</label>
                              <input type="password" class="form-control" autocomplete="password" required name="Rpassword" aria-describedby="password" placeholder="Password">
                            </div>
                            <!-- <input type="submit" name="Rsubmit" value="Submit" class="btn btn-primary"> -->
                         
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    <input type="submit" name="Rsubmit" value="Sign up" class="btn btn-primary">
                  </div>
                </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                          <!-- <div class="display-4 pb-3">
                            Welcome
                          </div> -->

                          <form class="" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" autocomplete="current-email" name="email" required aria-describedby="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" autocomplete="current-password" name="password" required placeholder="Password">
                          </div>
                          <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  </div>
                </form>
                </div>
              </div>
            </div>
            
            <!--  // the registration and login -->

        </div>
    </body>
</html>

<?php
  $conn = mysqli_connect("localhost","connarts_ossai","ossai'spassword","connarts_connarts");

  if ( (isset($_POST['submit'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

    $u = htmlspecialchars($_POST["email"]);
    $p = htmlspecialchars($_POST["password"]);

    $result = "SELECT brandname FROM clients WHERE password = '$p' AND email = '$u'";
    mysqli_query($conn, $result);
    if (mysqli_affected_rows($conn) == 1) { // we're expecting only one person
          
          $output = mysqli_fetch_all(mysqli_query($conn, $result));
          $output2 = mysqli_fetch_object(mysqli_query($conn, $result));
          # var_dump($output2->brandname);
          # var_dump($output[0][0]);
            
            # ob_clean();
            $_SESSION['logged'] = 1;
            $_SESSION['email'] = $u;
            $_SESSION['brandname'] = $output2->brandname; // or $output[0][0], set brandname
            
            header ("Location: user.php");
           
    } else {
      echo "<script>alert('Wrong Details. Try Again');</script>";
    }
  }
  ?>
<!-- for registration -->
<?php
if ( (isset($_POST['Rsubmit'])) && (!empty($_POST['Remail'])) && (!empty($_POST['Rpassword'])) && (!empty($_POST['Rbrandname']))  ) {

  $Re = htmlspecialchars($_POST["Remail"]);
  $Rb = htmlspecialchars($_POST["Rbrandname"]);
  $Rp = htmlspecialchars($_POST["Rpassword"]);

  if (mysqli_query($conn, "SELECT email, password FROM clients WHERE password = '$Rp' AND email = '$Re' ") && mysqli_affected_rows($conn) == 0 ) {
    # code...if nobody has taken those details then register them
      mysqli_query($conn, "INSERT INTO clients (email, password, brandname) VALUES ('$Re', '$Rp', '$Rb')");

      # echo "<script>alert(\"You've been registered. Now Learn.\");</script>";
      # code...
            ob_clean();
            $_SESSION['logged'] = 1;
            $_SESSION['email'] = $Re;
            $_SESSION['brandname'] = $Rb;
            header ("Location: user.php");
  }

}

?>
