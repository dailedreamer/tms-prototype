<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    
    <!-- SYSTEM NAME -->
    <title>Tool Management System</title>

    <!-- SYSTEM LOGO -->
    <link rel="icon" href="img/tms-logo.png" type="image/gif" sizes="16x16">


    <!-- STYLE -->
    <style>
    body 
    { 
        background: url(img/background-login.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    div.welcome-msg
    {
        font-size: 50px;
        font-weight:700;
        text-align: center;
    }
    div.welcome-msg-left
    {
        font-size: 30px;
        font-weight:700;
        text-align: center;
    }
    div.welcome-msg-left-incharge
    {
        font-size: 20px;
        font-weight:700;
        text-align: center;
    }
    div.panel-design
    {
        background: rgba(0, WHITE, 19, 0.5); 
        margin-top: 100px;
        height: 600px;
        border-radius: 50px;
        padding: 55px;
        box-shadow: 10px 10px 60px 10px #888888;
    }
    .btn-lg
    {
        height:50px;
        width:100px;
    }
    </style>
  </head>
  <body class="background">
  <button class="btn btn-lg" onclick="temp_design();"></button>
    <div class="container">
        <div class="panel panel-default panel-design">
            <div class="panel-body">
                <div class="container row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                            <div class = "form-group" style="text-align: center;">
                            <!-- <button class="btn btn-lg" onclick="temp_design();"></button> -->
                            <img src="img/undraw_profile_pic_ic5t.png" style="border-radius:60%; width:150px; "></img>
                            <!-- <button class="btn btn-lg" onclick="temp_design();"></button> -->
                            </div>
                            <div class = "form-group welcome-msg">
                            </label>WELCOME</label>
                            </div>
                            <div class = "form-group">
                                <label for = "username">Username</label>
                                <input class = "form-control" name = "username" id="txt_username" placeholder = "Input your Username" type = "text" required = "required" >
                            </div>
                            <div class = "form-group">
                                <label for = "password">Password</label>
                                <input class = "form-control" name = "password" id="txt_password" placeholder = "Input your Password" type = "password" required = "required" >
                            </div>
                            <div class = "form-group">
                                <a href="#" onclick="modal_forgot_password();">Forgot password?</a>
                            </div>
                            <div class = "form-group">
                                <button class = "btn btn-block btn-warning"  onclick="login_submit();">Login</button>
                            </div>
                    </div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-6">
                    <center>
                        <div class = "form-group">
                            <img src="img/TMS-LOGO.png" style="width:250px; margin-top:20px;"></img>
                        </div>
                        <div class = "form-group welcome-msg-left">
                            </label> TOOL MANAGEMENT SYSTEM<BR><small>(T M S) - Version 1.0.0</small></label>
                        </div>
                        <div class = "form-group welcome-msg-left-incharge">
                            <a href="#" onclick="person_incharge();">** System Person In-Charge **</a>
                        </div>
                        <div class = "form-group" style="text-align:center;">
                            <a href="#" onclick="person_developer();"style="color:black;"><small>TDM | DEVELOP BY MIT | 2020</small></a>
                        </div>
                     </center>   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal SYSTEM PERSON INCHARGE -->
    <div class="modal fade person_incharge" id="person_incharge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(0.25turn, #d4d332,#dfe2c2);">
                    <h3 class="modal-title card-secondary" id="exampleModalLabel">SYSTEM PERSON IN-CHARGE</h3>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin-left:10px;margin-right:10px;">
                       
                            <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <th>SECTION</th>
                                        <th>NAME</th>
                                        <th>NICKNAME</th>
                                        <th>POSITION</th>
                                        <th>LOCAL</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TDM</td>
                                        <td>NATIVIDAD, JORLAN</td>
                                        <td>JHOE</td>
                                        <td>Assistant Supervisor</td>
                                        <td>1167</td>
                                        <td>jorlan.natividad@fujitsu.com</td>
                                    </tr>
                                    <tr>
                                        <td>TDM</td>
                                        <td>BUSTILLO, JOAN</td>
                                        <td>KEI</td>
                                        <td>PC Assistant</td>
                                        <td>1167</td>
                                        <td>joan.bustillo@fujitsu.com</td>
                                    </tr>
                                </tbody>        
                            </table>
                            <button type="button" class="btn btn-warning  pull-right" data-dismiss="modal" style="margin-top:15px;">CLOSE</button>
                            </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Modal SYSTEM DEVELOPER INCHARGE -->
    <div class="modal fade person_developer" id="person_developer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(0.25turn, #d4d332,#dfe2c2);">
                    <h3 class="modal-title card-secondary" id="exampleModalLabel">SYSTEM DEVELOPER IN-CHARGE</h3>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin-left:10px;margin-right:10px;">
                       
                            <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>NICKNAME</th>
                                        <th>POSITION</th>
                                        <th>SECTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CABRAL, JOHN FRANCIS</td>
                                        <td>FRANCIS</td>
                                        <td>Specialist 2</td>
                                        <td>MIT</td>
                                    </tr>
                                    <tr>
                                        <td>CASILE, ARNIEL</td>
                                        <td>ARNIEL</td>
                                        <td>Specialist 1</td>
                                        <td>MIT</td>
                                    </tr>
                                    <tr>
                                        <td>AFELO, EDRALYN</td>
                                        <td>EDRA</td>
                                        <td>IT Staff</td>
                                        <td>MIT</td>
                                    </tr>
                                    <tr>
                                        <td>VIDA, ALLAN DAILE</td>
                                        <td>ALLAN</td>
                                        <td>Specialist 1</td>
                                        <td>MIT</td>
                                    </tr>
                                </tbody>        
                            </table>
                            <button type="button" class="btn btn-warning  pull-right" data-dismiss="modal" style="margin-top:15px;">CLOSE</button>
                            </div>
                    </div>
            </div>
        </div>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <script src="node_modules/js/iconify.min.js"></script>
    <script src="node_modules/js/sweetalert2.js"></script>

    <script type = "text/javascript">
        function temp_design()
        {
            alert('TEMPLATE DESIGN BY : ALLAN DAILE VIDA @DaileDreamer');
        }
        function person_incharge()
        {
            $('#person_incharge').modal('show');
        }

        function person_developer()
        {
            $('#person_developer').modal('show');
        }

        function login_submit()
        {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Succesfully Login',
                showConfirmButton: false,
                timer: 1000
            }).then()
            {
                setTimeout(function() { location.href = "http://10.164.58.64/tms_prototype/user-dashboard.php";  }, 2000);
            }
        }
    </script>
    
  </body>
</html>