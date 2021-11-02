<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/tms-logo.png" type="image/gif" sizes="16x16">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="template1_css/main_style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <title>Tool Management System</title>
    
  </head>
  <body class="background">
    
  
  <!-- navbar-->
  <header>
    <nav class="navbar navbar-light bg-nav-color">
      <div class="main_page_logo">
        <a class="navbar-brand" href="#">
          <img src="img/tms-logo.png" width="50" height="50" alt="" loading="lazy">
          <span>
            Tool Management System
          </span>
        </a>

        <a href="#" onclick="btn_menu_click_off();" id="nav_menu_off">
          <span class="iconify" data-icon="flat-color-icons:home" height="40"  data-inline="false" ></span>
          <img src="img/offbtn.png" width="35" height="18" alt="" loading="lazy">
        </a>

        <a href="#" onclick="btn_menu_click_on();"  id="nav_menu_on">
          <span class="iconify" data-icon="flat-color-icons:home" height="40"  data-inline="false" ></span>
          <img src="img/onbtn.png" width="35" height="18" alt="" loading="lazy">
        </a>
     </div>
      <div class="dropdown">
        <div class="signed_in_as">
          <button class="btn">
            <small>Signed in as </small>&nbsp;
            <img src="img/undraw_profile_pic_ic5t.png" style="border-radius:50%;" width="50" height="50" alt="" loading="lazy">&nbsp;
            <span style="color:#349c5e;font-weight:900;">
              Allan Daile Vida          
            </span>
          </button>
          <ul>
            <li><a href="#">User Manual</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="http://10.164.58.64/tms_prototype/index.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="row col-lg-12">
    <div class="" id="sidebar_design">
      <!-- side bar -->
      <div class="panel panel-default">
        <div class="panel-body body_design_side">
          <ul>
            <!-- ADMIN -->
            <li>
              <a href="http://10.164.58.64/tms_prototype/admin-dashboard.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:bullish" data-inline="false"  width="25" height="25"></span>
                <i>DASHBOARD</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/admin-list-of-items.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:rules" data-inline="false"  width="25" height="25"></span>
                <i>LIST OF ITEMS</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/admin-my-request.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:opened-folder" data-inline="false"  width="25" height="25"></span>
                <i>MY REQUEST</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/admin-list-of-request.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:survey" data-inline="false"  width="25" height="25"></span>
                <i>LIST OF REQUEST</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/admin-list-of-report.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:positive-dynamic" data-inline="false"  width="25" height="25"></span>
                <i>LIST OF REPORT</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> 
    <div class="col-lg 11">
      <!-- main content -->
      <div class="panel panel-default">
        <div class="panel-body body_design_main">
          <div class="panel_design_title">
            <h4><span class="iconify" data-icon="flat-color-icons:opened-folder" data-inline="false" width="35" height="35"></span>
             MY REQUEST
            </h4>
          </div>
          <div class="panel_body_content">

              <div class=" row col-lg-2 form-group">
                <label for="exampleInputEmail1">Date :</label>
                <input type="date" class="form-control">
              </div>
              <br><br>
              <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="table_example" width="100%">
                  <thead>
                    <tr>
                      <td>NO</td>
                      <td>ITEM NAME</td>
                      <td>DESCRIPTION</td>
                      <td>QUANTITY</td>
                      <td>ITEM NATURE</td>
                      <td>REQUEST DATE</td>
                      <td>PURPOSE</td>
                      <td>CHECKED</td>
                      <td>APPROVED</td>
                      <td>ACTION</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>DRILL BIT (OSG)</td>
                      <td>3.3 EX-SUS-GDS</td>
                      <td>1</td>
                      <td>new</td>
                      <td>2019-11-26</td>
                      <td>need on production</td>
                      <td>pending</td>
                      <td>pending</td>
                      <td><button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Cancel</button></td> 
                    </tr>
                  </tbody>
                </table>
              </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <span class="iconify" data-icon="flat-color-icons:opened-folder" data-inline="false" width="30" height="30"></span>
            My Item
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Item Name :</label>
                <input type="text" class="form-control">
              </div>  
              <div class="form-group">
                <label for="">Item Description :</label>
                <input type="text" class="form-control">
              </div>  
              <div class="form-group">
                <label for="">Quantity :</label>
                <input type="text" class="form-control">
              </div>  
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Nature :</label>
                <input type="text" class="form-control">
              </div>  
              <div class="form-group">
                <label for="">Request Date :</label>
                <input type="date" class="form-control">
              </div>  
              <div class="form-group">
                <label for="">Intended Machine to be used/ Purpose of issuance :</label>
                <input type="text" class="form-control">
              </div> 
            </div>
          </div>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update Changes</button>
        </div>
      </div>
    </div>
  </div>
 

  
 
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="node_modules/js/iconify.min.js"></script>
    <script src="node_modules/js/sweetalert2.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>

    <script>
    $('#nav_menu_on').hide();
    
    function btn_menu_click_off()
    {
      $('#nav_menu_on').show();
      $('#nav_menu_off').hide();
      $('#sidebar_design').hide();
    }
    function btn_menu_click_on()
    {
      $('#nav_menu_on').hide();
      $('#nav_menu_off').show();
      $('#sidebar_design').show();
    }

    $(document).ready( function () {
        $('#table_example').DataTable();
    } );
    </script>



  </body>
</html>
