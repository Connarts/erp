<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == 1) {
  //Do Nothing
} else {
  $redirect = $_SERVER['PHP_SELF'];
  header("Refresh: 3; URL=index.php");
  echo "<h1>First LOGIN !</h2>";
  echo "(But if your browser doesn’t support this, " .
  "<a href=\"index.php\">click here</a>)";
  die();
}

$con = mysqli_connect("localhost","connarts_ossai","ossai'spassword","connarts_connarts");
$u = mysqli_real_escape_string($con, $_SESSION['email']);

?>
<!doctype html>
<html lang="en">
  
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connarts' ERP</title>
    <meta name="description" content="Connarts' ERP. Focus more on your customers and your product.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Connarts' Team">

<!--         
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.2/b-1.5.4/r-2.2.2/sc-1.5.0/sl-1.2.6/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.2/b-1.5.4/r-2.2.2/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>
-->

    <script src="jquery-3.3.1.min.js"></script>
    <!--
        Included libraries:
 *   DataTables 1.10.18, AutoFill 2.3.2, Buttons 1.5.4, Responsive 2.2.2, Scroller 1.5.0, Select 1.2.6
--><script src="dt/datatables.min.js"></script>


    <!--
    *      Included libraries:
    *      DataTables 1.10.18, AutoFill 2.3.2, Buttons 1.5.4, Responsive 2.2.2, Scroller 1.5.0, Select 1.2.6
    --><link rel="stylesheet" href="dt/datatables.min.css">
    
    <!-- <script src="dataTables.bootstrap4.min.js"></script> -->
    <script src="js/bootstrap.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
    

    <link rel="stylesheet" href="buttons.dataTables.min.css">
    
    <link rel="icon" href="img\logo\conn - Copy (48x48).png">

    <title>{Storename} Dashboard</title>

    <!-- Custom styles for this template -->
    <link href="style/offcanvas.css" rel="stylesheet">
    <script src="js/offcanvas.js"></script>
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
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Inventory</a>
        <a class="nav-link" href="#">Design catalogue</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">
            Friends
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
          </a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
      </nav>
    </div>

    <main role="main" class="container">


      <!-- the modal to add -->
      <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New product or stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addToStock">
                        <div class="form-group">
                            <label for="image" class="col-form-label">Image:</label>
                            <br>
                            <input type="file" name="image" accept="image/*" id="f"> <!--later allow multilple upload so we can different view of one product-->
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" name="name" class="form-control" id="n">
                        </div>
                        <div class="form-group">
                            <label for="stock" class="col-form-label">Stock:</label>
                            <input type="number" name="stock" class="form-control" id="s">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Save draft</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
      <!-- // the modal to add  -->
      <!-- the inventory -->
      <div class="my-3 p-3 bg-white rounded box-shadow">

        
                
            <table class="table table-striped table-bordered" id="inventory">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Stock</th>
                    </tr>
                </thead>
                <tbody>
                   <!--  <tr>
                        <td><img src="images/desc01.jpg" class="img-fluid" alt="product name"></td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td><img src="images/desc02.jpg" class="img-fluid" alt="product name"></td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td><img src="images/info01.jpg" class="img-fluid" alt="product name"></td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr> -->
                </tbody>
            </table>



    </div><!-- // end of inventory -->

      </div>
    </main>
        <!-- FOOTER -->
        <footer class="container text-center">
          <p>&copy; 2018 Connarts &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        $(document).ready(function () {

            //for the custom 'add' button
            // $.fn.dataTable.ext.buttons.add = {};

            //for the custom 'selected' button, get data about the selected rows
            // $.fn.dataTable.ext.buttons.selected = {};

            // for the delete button
            // $.fn.dataTable.ext.buttons.delete = {};

            //throws error to console instaed of uers seeing the usual alert
            $.fn.dataTable.ext.errMode = 'throw';

                // arrange data on the table according to the newest.
                var table = $('#inventory').DataTable({
                    // 'data': d,
                    // scrollY: 300,
                    // "autoWidth": true,
                    responsive: true, // table width is still very wide (    /* width: 1074px; */) when window is minimaized
                    select: true,
                    select: {
                        // items: 'cells',
                        style: 'multi'
                    },
                    paging: true,
                    dom: 'Bfrtip', // 'B<"clear">lfrtip' for selecting the number of entries that can be shown per page // '<"top"i>rt<"bottom"flp><"clear">'
                    buttons: ['copy', 'excel', 'pdf', 
                        {
                            text: 'Add',
                            action: function (e, dt, node, config) {
                                //dt.ajax.reload();
                                $('#add').modal('show');

                                $('#add').on('shown.bs.modal', function (e) {
                                    // do something...do submit of events and update record in user interface
                                });


                            }
                        }
                    , 
                        {
                            text: 'Selected?',
                            action: function (e, dt, node, config) {

                                var selectedRows = dt.rows({ selected: true }).data();
                                console.log('no. of selected rows', selectedRows.length);
                                console.log('selected rows', selectedRows);


                            }
                        }
                    , 
                        {
                            text: 'delete selected rows',
                            action: function (e, dt, node, config) {
                                var deleteSelectedRows = dt.rows('.selected').remove().draw();
                                console.log('no. of delected rows', deleteSelectedRows[0].length);
                                console.log('delected rows', deleteSelectedRows);

                                console.log('before delection', dt.rows('.selected').remove().column());
                            }
                        }
                    ],
                    //'serverSide': true,
                    'ajax': 'php/get.php',
                    'columns': [
                        { "data": "name" },
                        {
                            "render": function (data, type, JsonResultRow, meta) {
                                console.log(data, type, JsonResultRow, meta);
                                // console.log('checking MIME type', JsonResultRow.image.slice(JsonResultRow.image.indexOf('d'), JsonResultRow.image.indexOf('/')));
                                var ck = JsonResultRow.image.slice(JsonResultRow.image.indexOf('d'), JsonResultRow.image.indexOf('/')+1);
                                return '<img src=' + (ck == /** check if it starts with data:image/ */ 'data:image/' ?  JsonResultRow.image  : 'images/' + JsonResultRow.image ) + ' class="img-fluid" alt="Image of ' + JsonResultRow.name + '">';
                            }
                        },
                        { "data": "stock" }
                    ]
                    
                });


                $('#add').on('hide.bs.modal', function (e) {
                    console.log('e', e);
                    if (document.forms[0].elements[0].value !== '' && document.forms[0].elements[1].value !== '' && document.forms[0].elements[2].value !== '' ) {
                     
                        // do something...do submit of events and update record in user interface if the form is not empty
                        var fr = new FileReader();
                        fr.onload = function () {
                            var i = new Image;
                            i.src = fr.result;
                            console.log('fr =', fr);
                            // this automatically adds (dummy) data to the inventory. we want to add data from the form.
                            var dt = $.fn.DataTable.tables()[0];
                            // dt.row.add({ name: 'sds ', image: fr.result, stock: 'sdfdsja' }).draw(false);
                            table.row.add({ name: document.forms[0].elements[1].value, image: fr.result, stock: document.forms[0].elements[2].value }).draw(false);
                        }
                        fr.readAsDataURL(document.forms[0].elements[0].files[0]);

                        // --- geting the form data
                        var formData = new FormData(document.getElementById('addToStock'));
                        // var fileField = document.querySelector("input[type='file']");

                        // formData.append('username', 'abc123');
                        // formData.append('avatar', fileField.files[0]);

                        fetch('php/put.php', {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => { console.log(response); /* response.json(); // response is like already in json, if this logs then success! */ })
                            .catch(error => console.error('?? Error:', error));
   
                    }

                }).bind(table);

        });

    </script>
  </body>
</html>
