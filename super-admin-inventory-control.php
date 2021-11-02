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
            <h4><span class="iconify" data-icon="flat-color-icons:survey" data-inline="false" width="35" height="35"></span>
            INVENTORY CONTROL
            </h4>
          </div>
          <div class="panel_body_content">
          <!-- BODY HERE -->

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header " id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  PURCHASE ITEM MONITORING
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <!-- QUOTATION REGISTTRATION -->
                  
                  <div class="row">
                    <div class="form-group col-lg-2">
                      <label for="">Status :</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>ALL</option>
                        <option>NOT YET RECEIVED</option>
                        <option>DELIVERED</option>
                        <option>CANCELED</option>
                        <option>PARTIAL</option>
                        <option>HOLD</option>
                      </select>
                    </div> 
                    <div class="form-group col-lg-2">
                      <label for="">Date from :</label>
                      <input type="date" class="form-control">
                    </div>   
                    <div class="form-group col-lg-2">
                      <label for="">Date to :</label>
                      <input type="date" class="form-control">
                    </div>  
                    <div class="form-group col-lg-1">
                      <label for="" style="color:white;">.</label><br>
                      <button class="btn btn-primary">Search</button>
                    </div> 
                  </div>
                  
                  <div class="col-lg-12">
                    <table class="table table-striped table-bordered" id="table_example" width="100%">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>DELIVERY</td>
                          <td>STATUS</td>
                          <td>P.R.  NO</td>
                          <td>CATEGORY</td>
                          <td>AREA</td>
                          <td>P.R. DATE</td>
                          <td>ITEM</td>
                          <td>DESCRIPTION</td>
                          <td>SUPPLIER</td>
                          <td>REQUEST QTY</td>
                        </tr>
                      </thead>
                    </table>
                  </div>   
             
              </div>
            </div>
          </div>  

          <BR><BR>

          <div class="accordion" id="accordionExample2">  
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   STOCK MONITORING
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                <div class="card-body">
                  <!-- LIST OF QUOTATION -->
                  <div class="row col-lg-3 form-group">
                    <button class="btn btn-primary">Add Stocks</button>
                  </div>
                  <br>
                  <div class="col-lg-12">
                    <table class="table table-striped table-bordered" id="table_example1" width="100%">
                      <thead>
                        <tr>
                          <td>NO</td>
                          <td>ITEM</td>
                          <td>DESCRIPTION</td>
                          <td>SECTION</td>
                          <td>QUANTITY</td>
                          <td>ACTIONS</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>SAMPLE</td>
                          <td>SAMPLE</td>
                          <td>SAMPLE</td>
                          <td>SAMPLE</td>
                          <td><button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Update</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>  
                  
                </div>
              </div>
            </div>
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
            <span class="iconify" data-icon="flat-color-icons:survey" data-inline="false" width="30" height="30"></span>
            Stocks
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Section Stock :</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Machining</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>  
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Product Name :</label>
                <input type="text" class="form-control">
              </div>  
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="">Product Description :</label>
                <input type="text" class="form-control">
              </div>  
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label for="">Stock in pieces :</label>
                <input type="text" class="form-control">
              </div> 
            </div>

            <div class="col-lg-4"> 
              <div class="form-group">
                <label for="">Stock Limit :</label>
                <input type="date" class="form-control">
              </div>
            </div>
            
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
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

    $(document).ready( function () {
        $('#table_example1').DataTable();
    } );
    
    </script>



  </body>
</html>
