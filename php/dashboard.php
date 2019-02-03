<?php
  session_start();

    if ( !isset($_SESSION['logged']) && $_SESSION['logged'] !== true) {
      $redirect = $_SERVER['PHP_SELF'];
      header("Refresh: 5; URL=login.php");
      echo "<h1>First LOGIN !</h2>";
      echo "(But if your browser doesn’t support this, " .
      "<a href='login.php'>click here</a>)";
      die();
    }


  $con = mysqli_connect("localhost","connarts_ossai","ossai'spassword","connarts_connarts");
  $sql = "SELECT * FROM products WHERE brandname = '".$_SESSION['client']."' ";
  $sql001 = "SELECT * FROM products WHERE ( productprice != '' AND cat != '' AND productname != '' AND brandname = '".$_SESSION['client']."' )"; #find out saleables
  $result = mysqli_query($con, $sql);
  $result001 = mysqli_query($con, $sql001);#find out saleables

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img\logo\conn - Copy (48x48).png">

    <title><?php echo $_SESSION['client']; ?> Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/dashboard/offcanvas.css" rel="stylesheet">
    
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    
    
    

    <!-- for dataTable js n css -->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="#">Connarts</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Switch account</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    

    
    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Friends
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" id="accomodation-tab" data-toggle="tab" href="#inventory"  role="tab" aria-controls="inventory " aria-selected="false">Inventory</a>
        <a class="nav-link" id="accomodation-tab" data-toggle="tab" href="#accomodation" role="tab" aria-controls="accomodation" aria-selected="false">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
      </nav>
    </div>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="img\logo\conn - Copy (72x72).png" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100"><?php echo $_SESSION['client']; ?></h6>
          <small>Joined 2011</small>
        </div>
      </div>
            
            
            
            
            
    
    
    
    
    
    
    
    
      <!-- Tab panes for the ACCOMODATION, PPAs, SPAs, SALES-->
        <div class="tab-content" id="myTabContent">
                        <!-- content of the first tab -->
                        <div class="tab-pane fade show active" id="inventory" role="tabpanel" aria-labelledby="inventory-tab"> 
                          
                          
                                  <div class="my-3 p-3 bg-white rounded box-shadow">

                                                        <div class="btn-group my-3" role="group" aria-label="Basic example">
                                                          <button type="button" class="btn btn-secondary">Edit</button>
                                                          <button type="button" class="btn btn-secondary">Add</button>
                                                          <button type="button" class="btn btn-secondary">Delete</button>
                                                        </div>
                            
                            
                                                        <!--Table-->
                                                        <table id="tablePreview" class="table">
                                                        <!--Table head-->
                                                          <thead>
                                                            <tr>
                                                              <th>productprice</th>
                                                              <th>productname</th>
                                                              <th>category</th>
                                                            </tr>
                                                          </thead>
                                                          <!--Table head-->
                                                          <!--Table body-->
                                                          <tbody>
                                                          </tbody>
                                                          <!--Table body-->
                                                        </table>
                                                        <!--Table-->
                            
                            
                            
                            
                                  </div>
                          
                          
                          
                        </div>
                        <div class="tab-pane fade" id="suggestions" role="tabpanel" aria-labelledby="suggestions-tab"> 
                          Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. 
                          Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan 
                          four loko farm-to-table craft beer twee. Qui photo booth 
                        </div>
                        <div class="tab-pane fade" id="ppa" role="tabpanel" aria-labelledby="ppa-tab"> 
                          hardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint 
                          qui sapiente accusamus tattooed echo park. 
                        </div>
                        <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab"> 
                          To help fit your needs, this works with -based markup, as shown above, 
                            or with any arbitrary “roll your own” markup. Note that if you’re using, 
                              you shouldn’t add role="tablist" directly to it. 
                        </div>
          </div>






    
    
    
    
    
            
            
      <div class="my-3 p-3 bg-white rounded box-shadow">

                            
                            
                            
                            <!--Table-->
                            <table id="tablePreview" class="table">
                            <!--Table head-->
                              <thead>
                                <tr>
                                  <th>productprice</th>
                                  <th>productname</th>
                                  <th>category</th>
                                </tr>
                              </thead>
                              <!--Table head-->
                              <!--Table body-->
                              <tbody>
                              </tbody>
                              <!--Table body-->
                            </table>
                            <!--Table-->




      </div>
    </div><!-- /.row -->

      </div>

      <nav class="blog-pagination pt-3" style="text-align: center;">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      <hr style="margin-top: 5rem;  margin-bottom: 4rem;">
      
      
      <!-- modal to add data to inventory table-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
      
      
      
      
      
      
    </main>
        <!-- FOOTER -->
        <footer class="container">
          <p>&copy; 2018 Connarts &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.6/holder.js" integrity="sha256-0iasEOr4ksR7mLxVGBr26uozejqfHx6L4RL1L4lJPuE=" crossorigin="anonymous"></script>
    
    <script src="js/offcanvas.js"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/sl-1.2.6/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/sl-1.2.6/datatables.min.js"></script>


    <script>
    
    <?php 
            #echo $result001 ; 
                    $maxI = mysqli_num_rows($result);
                    echo 'var data = [' ;
                    for ($i = 1; $i <= $maxI;$i++ ) { 
                     
                      $row = mysqli_fetch_assoc($result) ;
                      echo '[ "' . $row['productprice'] . '" , "'. $row['productname'] . '", "' . $row['category'] . '" ]' . ($i == $maxI ? '] ;' : ',');
                    } 
                                
            ?>
            
            //for the custom 'add' button
            $.fn.dataTable.ext.buttons.add = {
                        text: 'Add',
                        action: function ( e, dt, node, config ) {
                            //dt.ajax.reload();
                            $('#exampleModal').modal('show') ;
                            
                             $('#exampleModal').on('shown.bs.modal', function (e) {
                              // do something...do submit of events and update record in user interface
                            })
                
                
                              dt.row.add( [
                                  '.1',
                                  '.2',
                              ] ).draw( false );
                              
                              
                        }
            };
                    
                    
                    
            //for the custom 'selected' button
            $.fn.dataTable.ext.buttons.selected = {
                        text: 'selected?',
                        action: function ( e, dt, node, config ) {
                            
                            
                            var count = dt.rows( { selected: true } ).data();
                            console.log(count);
                              
                              
                        }
            };




              $(document).ready( function () {
        var table = $('#tablePreview').DataTable({
              select: true,
              data: data,
              dom: 'B<"clear">lfrtip',
              buttons: [ 'copy', 'excel', 'pdf', 'add', 'selected' ]
          });
          
          
          

          $('#tablePreview tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );





      } );
    
    </script>
  </body>
</html>
