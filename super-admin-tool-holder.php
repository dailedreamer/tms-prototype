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
            <!-- SUPER ADMIN -->
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-dashboard.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:bullish" data-inline="false"  width="25" height="25"></span>
                <i>DASHBOARD</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-quotations.php" class="expanding">
                <span class="iconify" data-icon="flat-ui:graph" data-inline="false"  width="25" height="25"></span>
                <i>QUOTATIONS</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-purchase-request.php" class="expanding">
                <span class="iconify" data-icon="emojione:credit-card" data-inline="false"  width="25" height="25"></span>
                <i>PURCHASE REQUEST</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-inventory-control.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:survey" data-inline="false"  width="25" height="25"></span>
                <i>INVENTORY CONTROL</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-tools-supplies-request.php" class="expanding">
                <span class="iconify" data-icon="flat-ui:box" data-inline="false"  width="30" height="30"></span>
                <i>TOOLS & SUPPLIES REQUEST</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-budget-monitoring.php" class="expanding">
                <span class="iconify" data-icon="emojione:money-bag" data-inline="false"  width="30" height="30"></span>
                <i>BUDGET MONITORING</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-assignatory.php" class="expanding">
                <span class="iconify" data-icon="emojione-v1:pen-over-stamped-envelope" data-inline="false"  width="25" height="25"></span>
                <i>ASSIGNATORY</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-suppliers.php" class="expanding">
                <span class="iconify" data-icon="fxemoji:housewithgarden" data-inline="false"  width="25" height="25"></span>
                <i>SUPPLIERS</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-tool-holder.php" class="expanding">
                <span class="iconify" data-icon="twemoji:toolbox" data-inline="false"  width="30" height="30"></span>
                <i>TOOL HOLDER</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/super-admin-user-management.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:reading-ebook" data-inline="false"  width="30" height="30"></span>
                <i>USER'S MANAGEMENT</i>
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
            <h4><span class="iconify" data-icon="twemoji:toolbox" data-inline="false" width="35" height="35"></span>
            TOOL HOLDER
            </h4>
          </div>
          <div class="panel_body_content">
          <!-- BODY HERE -->

          <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="table_example" width="100%">
                  <thead>
                    <tr>
                      <td>NO</td>
                      <td>SPECIFICATION</td>
                      <td>PROCESS</td>
                      <td>PHOTO</td>
                      <td>COLLET TYPE</td>
                      <td>MACHINE</td>
                      <td>ACTUAL QUANTITY</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>DRILL BIT (OSG)</td>
                      <td>3.3 EX-SUS-GDS</td>
                      <td>1</td>
                      <td>COLLET  ??32-??25</td>
                      <td>DMG</td>
                      <td>8</td>
                    </tr>
                  </tbody>
                </table>
              </div>

          </div>
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
