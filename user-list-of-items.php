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

    <title>Tool Management System</title>

    <style>
      /* CARD DESIGN */
      .card-design-items
      {
          width: 15rem; 
          margin:15px;
          border-radius: 20px;
      }
      .card-img-top
      {
          height: 160px;
          width: 240;
          align-items: center; 
          margin-top:10px;
      }
      .card-body
      {
          height: 130px;
          width: 240px;
      }

      .card-text
      {
          width: auto;
          height:70px; 
          overflow: auto;
      }
      .card-footer
      {
          text-align: center;
      }

      .list-scroll-table
      {
          width: auto;
          height: 600px;
          overflow: auto;
      }

    </style>
    
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
            <!-- USER -->
            <li>
              <a href="http://10.164.58.64/tms_prototype/user-dashboard.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:bullish" data-inline="false"  width="25" height="25"></span>
                <i>DASHBOARD</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/user-list-of-items.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:rules" data-inline="false"  width="25" height="25"></span>
                <i>LIST OF ITEMS</i>
              </a>
            </li>
            <li>
              <a href="http://10.164.58.64/tms_prototype/user-my-request.php" class="expanding">
                <span class="iconify" data-icon="flat-color-icons:opened-folder" data-inline="false"  width="25" height="25"></span>
                <i>MY REQUEST</i>
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
            <h4><span class="iconify" data-icon="flat-color-icons:rules" data-inline="false" width="35" height="35"></span>
             LIST OF ITEMS
            </h4>
          </div>
          <div class="panel_body_content">
          
          <div class="row" style="justify-content: flex-end; padding-right:100px;">
            <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal">
              <h5>
                My Cart :
                <span class="iconify" data-icon="noto-v1:shopping-cart" data-inline="false" width="50" height="50"></span>
                <small style="padding-left:15px; padding-right:15px;background-color:#f54545; border-radius:10px;font-weight:900">5</small>
              </h5>
            </button>
          </div>

          <div class="row" style="margin-bottom:30px; ">
            <div class="input-group col-lg-3">
              <input type="text" class="form-control" placeholder="Search items">
              <div class="input-group-append">
                <button class="btn btn-outline-danger" type="button">Search</button>
              </div>
            </div>
          </div>
          
          
          <div class="row list-scroll-table" id="list_of_items"></div>

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
            <span class="iconify" data-icon="noto-v1:shopping-cart" data-inline="false" width="50" height="50"></span>
            MY CART
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="form-group">
              <label>Section :</label>
              <select type="text" class="form-control"  placeholder="Please input data...">
                <option>DESIGN</option>
                <option>CAM</option>
                <option>MAN</option>
                <option>GRINDING</option>
                <option>WIRECUT</option>
                <option>MACHINING</option>
                <option>ASSEMBLY</option>
                <option>INSPECTION</option>
              </select>
            </div>
          </div>

          <div class="row">
            <table class="table table-striped table-bordered">
                <thead >
                  <tr>
                    <td>ACTION</td>
                    <td>NATURE OF SUPPLY</td>
                    <td>NAME</td>
                    <td>DESCRIPTION</td>
                    <td>QUALITY</td>
                    <td>INTENDED MACHINE TO BE USED/ PURPOSE OF ISSUANCE</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <button class="btn btn-danger">
                      <span class="iconify" data-icon="gg:trash" data-inline="false" width="25" height="25"></span> 
                        REMOVE
                      </button>
                    </td>

                    <td>
                      <div class="radio_design">
                        <input type="radio" name="nature_of_supply" value="NEW" style="transform: scale(2);">&nbsp;
                        <label for="male">NEW</label><br>
                        <input type="radio" name="nature_of_supply" value="REPLACE" style="transform: scale(2);">&nbsp;
                        <label for="female">REPLACE</label><br>
                        <input type="radio" name="nature_of_supply" value="LOST"style="transform: scale(2);">&nbsp;
                        <label for="other">LOST</label>
                      </div>
                    </td>
                    <td>
                      Rubber Shoes na Malupet
                    </td>
                    <td>
                      Ginagamit ito sa paa.
                    </td>
                    <td>
                      
                      <input style="width:60px;" type="number" min="1" step="1"/>
                    </td>
                    <td>
                      <input></input>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit Request</button>
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

    <script>
    $( document ).ready(function() {
      list_of_item();
    });
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

    function makeid(length) {
      var result           = '';
      var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var charactersLength = characters.length;
      for ( var i = 0; i < length; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
      }
      return result;
    }

    function list_of_item()
    {
      var data = '';

      for(var x = 0; x <= 11; x++){
        data += '<div class="card card-design-items">' +
              '<img src="img/tms-logo.png" class="card-img-top">'+
              '<div class="card-body" >'+
                '<h6 class="card-title">'+makeid(15)+'</h6>'+
               
                '<h6 class="card-text"><small>'+makeid(60)+'</small></h6>'+
                 
              '</div>'+
              
              '<div class="card-footer">'+
              '<p>Stock : '+Math.floor(Math.random() * 999)+'</p>'+
                  '<a href="#" class="btn btn-primary border-dark">'+
                   '<span class="iconify" data-icon="noto-v1:shopping-cart" data-inline="false" width="25" height="25"></span>'+
                    'Add to Cart'+
                  '</a>'+
              '</div>'+
            '</div>';
        }

       
      document.getElementById("list_of_items").innerHTML = data;
    }
    </script>



  </body>
</html>
