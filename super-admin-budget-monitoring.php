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
            <li><a href="#">User Manual</a> </li>
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
            <h4><span class="iconify" data-icon="emojione:money-bag" data-inline="false" width="35" height="35"></span>
            BUDGET MONITORING
            </h4>
          </div>
          <div class="panel_body_content">
          <!-- BODY HERE -->

          <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header " id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    MY BUDGET
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                  <!-- QUOTATION REGISTTRATION -->
                  <div class="col-lg-12 row">

                    <div class="col-lg-3"> 

                      <div class="form-group">
                        <label for="">Section :</label>
                        <input type="text" class="form-control">
                      </div> 

                      <div class="form-group">
                        <label for="">Date :</label>
                        <input type="date" class="form-control">
                      </div> 

                      <div class="form-group">
                        <label for="">Dollar Rate in Peso :</label>
                        <input type="text" class="form-control">
                      </div> 

                      <div class="form-group">
                        <label for="">Yen Rate in Peso :</label>
                        <input type="text" class="form-control">
                      </div> 

                      <div class="form-group">
                        <label for="">Amount Budget :</label>
                        <input type="text" class="form-control">
                      </div> 

                      <div class="form-group row">
                        <div class="col-lg-6">
                          <button class="btn btn-primary btn-block" type="button">SAVE</button>
                        </div>
                        <div class="col-lg-6">
                        <button class="btn btn-secondary btn-block" type="button">CLEAR</button>
                        </div>
                      </div> 

                    </div>  

                    <div class="col-lg-9">
                      <table class="table table-striped table-bordered" id="table_example" width="100%">
                        <thead>
                          <tr>
                            <td>NO</td>
                            <td>CATEGORY</td>
                            <td>SECTION</td>
                            <td>BUDGET FOR</td>
                            <td>ACTIONS</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>TOOLS APPARATUS FURNITURE</td>
                            <td>MACHINING</td>
                            <td>OCTOBER - 2019</td>
                            <td><button class="btn btn-primary" type="button">UPDATE</button>&nbsp;<button class="btn btn-danger" type="button">DELETE</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>  

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
                      CREATE PROCUREMENT
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                  <div class="card-body">
                    <!-- LIST OF QUOTATION -->
                    
                    <div class="row col-lg-12">
                      <h5>BUDGET INFORMATION</h5>
                      <div class="row col-lg-12">
                        <div class="form-group col-lg-2">
                          <label for="">Month & Year :</label>
                          <input type="text" class="form-control">
                        </div> 
                        <div class="form-group col-lg-2">
                          <label for="">Section :</label>
                          <input type="text" class="form-control">
                        </div> 
                        <div class="form-group col-lg-2">
                          <label for="">Category :</label>
                          <input type="text" class="form-control">
                        </div> 
                        <div class="form-group col-lg-2">
                          <label for="">Rate :</label>
                          <input type="text" class="form-control">
                        </div> 
                        <div class="form-group col-lg-1"></div>
                        <div class="form-group col-lg-2">
                          <label for="">Type of Budget : </label>
                          <div class="row">

                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked style="transform: scale(2);">
                              <label class="form-check-label" for="exampleRadios1" style="margin-left: 5px;">
                                REGULAR
                              </label>
                            </div>
                            
                            <div class="form-check" style="margin-left: 30px;">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" style="transform: scale(2);">
                              <label class="form-check-label" for="exampleRadios2" style="margin-left: 5px;">
                                SPECIAL
                              </label>
                            </div>

                          </div>
                        </div> 
                      </div>

                      <div class="row col-lg-12" style="margin-top:50px;">
                        <h5>CREATE PROCUREMENT</h5> 
                        <div class="row col-lg-12">
                          <div class="form-group col-lg-2">
                            <label for="">Subject :</label>
                            <input type="text" class="form-control">
                          </div> 
                        </div>

                        <div class="row col-lg-12">
                          <table class="table table-striped table-bordered" id="table_example" width="100%">
                            <thead>
                              <tr>
                                <td>NO</td>
                                <td>BUDGET AMOUNT(USD)</td>
                                <td>APPLICATION AMOUT(USD)</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="row col-lg-12">
                          <div class="form-group col-lg-2">
                            <label for="">Request Date :</label>
                            <input type="text" class="form-control">
                          </div> 
                          <div class="form-group col-lg-3">
                            <label for="">Section :</label>
                            <input type="text" class="form-control">
                          </div> 
                          <div class="form-group col-lg-3">
                            <label for="">Person in Charge :</label>
                            <input type="text" class="form-control">
                          </div> 
                          <div class="form-group col-lg-2">
                            <label for="">Section Code :</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group col-lg-2">
                            <label for="">Telephone Number :</label>
                            <input type="text" class="form-control">
                          </div>  
                        </div>

                        <div class="col-lg-12" style="margin-top:50px;">
                          <table class="table table-striped table-bordered" id="table_example2" width="100%">
                            <thead>
                              <tr>
                                <td><button class="btn btn-success"> + </button></td>
                                <td>NO</td>
                                <td>DIVISION</td>
                                <td>PURCHASE EXPENSE</td>
                                <td>NAME</td>
                                <td>TYPE NAME</td>
                                <td>UNIT PRICE(USD)</td>
                                <td>QTY</td>
                                <td>AMOUNT(USD)</td>
                                <td>SUPPLIER</td>
                              </tr>
                            </thead>
                          </table>
                        </div>


                      </div>
                    </div>
                    

                  </div>
                </div>
              </div>
            </div>
            
            <BR><BR>

            <div class="accordion" id="accordionExample3">  
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                     REQUEST FOR DECISION
                    </button>
                  </h2>
                </div>

                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample3">
                  <div class="card-body">
                    <!-- BODY -->
                    
                    <div class="col-lg-12">
                      <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-bottom:30px;"> ADD REQUEST DECISION</button>
                      <table class="table table-striped table-bordered" id="table_example3" width="100%">
                        <thead>
                          <tr>
                            <td>NO</td>
                            <td>DECISION NO</td>
                            <td>TITLE</td>
                            <td>DATE</td>
                            <td>CONTRACT</td>
                            <td>PAYMENT REQ.</td>
                            <td>IMPLEMENTATION</td>
                            <td>ACTION</td>
                          </tr>
                        </thead>
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
            <span class="iconify" data-icon="emojione:money-bag" data-inline="false" width="30" height="30"></span>
            Add Request Decision
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5 class="">DETAILS</h5>
          <div class="row col-lg-12">
            <div class="form-group col-lg-2">
              <label for="">Date :</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group col-lg-3">
              <label for="">Section :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div> 
            <div class="form-group col-lg-2">
              <label for="">Decision No. :</label>
              <input type="text" class="form-control">
            </div> 
            <div class="form-group col-lg-2">
              <label for="">Decision Date :</label>
              <input type="text" class="form-control">
            </div> 
            <div class="form-group col-lg-3">
              <label for="">Prepared By :</label>
              <input type="text" class="form-control">
            </div>  
          </div>
          
          <div class="panel_design_title"></div>

          <h5>ASSIGNATORY</h5>
          <div class="row col-lg-12">
            <div class="form-group col-lg-3">
              <label for="">President :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div> 
            <div class="form-group col-lg-3">
              <label for="">Vice President :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div> 
            <div class="form-group col-lg-3">
              <label for="">Person in-Charge :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div> 
            <div class="form-group col-lg-3">
              <label for="">Received By :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div> 
          </div>

          <div class="panel_design_title"></div>


          <h5>OTHER DETAILS</h5>
          <div class="row col-lg-12">
          
            <div class="form-group col-lg-2">
              <label for="">Title :</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-2">
              <label for="" style="">Apply Amount and Budget :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="form-group col-lg-2">
              <label for="">Contact / Agreement with :</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-2">
              <label for="">Payment Requirement :</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-2">
              <label for="">Implementation Date :</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group col-lg-2">
              <label for="">Completion Date :</label>
              <input type="date" class="form-control">
            </div>
          </div>

          <div class="panel_design_title"></div>


          <h5>BUDGET DETAILS</h5>
          <div class="row col-lg-12">
            <div class="form-group col-lg-4">
              <label for="">Budget Section :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="">Budget Category :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="form-group col-lg-4">
              <label for="">Budget Month & Year :</label>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
          </div>

          <div class="panel_design_title"></div>

          <h5>ITEM DETAILS</h5>
          <div class="row col-lg-12">
            <div class="form-group col-lg-12">
              <label for="">Reason and Details :</label>
              <textarea type="text" class="form-control"> </textarea>
            </div>
            <div class="form-group col-lg-12">
              <label for="">Comments :</label>
              <textarea type="text" class="form-control"></textarea>
            </div>
            <div class="col-lg-12">
              <table class="table table-striped table-bordered" id="table_example4" width="100%">
                <thead>
                  <tr>
                    <td>NO</td>
                    <td>ITEM</td>
                    <td>SPECIFICATION</td>
                    <td>UNIT PRICE</td>
                    <td>QTY</td>
                    <td>TOTAL PRICE</td>
                    <td>ACTION</td>
                  </tr>
                </thead>
              </table>
            </div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        $('#table_example2').DataTable();
    } );
    $(document).ready( function () {
        $('#table_example3').DataTable();
    } );
    $(document).ready( function () {
        $('#table_example4').DataTable();
    } );
    
    </script>

  </body>
</html>