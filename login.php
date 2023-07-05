<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DIGIHEALTH OASIS</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon" />
    <link href="./assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/responsive.css" rel="stylesheet" type="text/css" />

</head>

<body class=" login_page">

    <div class="container-fluid">
        <div class="login-wrapper row">
            <div id="login" class="login loginpage col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-6">    
                <div class="login-form-header">
                     <img src="./data/icons/padlock.png" alt="login-icon" style="max-width:64px">
                     <div class="login-header">
                         <h4 class="bold color-white">Login Now!</h4>
                         <h4><small>Please enter your credentials to login.</small></h4>
                     </div>
                </div>
               
                <div class="box login">

                    <div class="content-body" style="padding-top:30px">

                        <form id="msg_validate" method="post" action="login.php" novalidate="novalidate" class="no-mb no-mt">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="form-group">
                                        <label class="username">Username</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" name="username" placeholder="username">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="password">Password</label>
                                        <div class="controls">
                                            <input type="password" class="form-control" name="password" placeholder="password">
                                        </div>
                                    </div>

                                    <div class="pull-left">
                                        <input type="submit" name="submit" class="btn btn-primary mt-10 btn-corner right-15" value="Log in">
                                        <a href="register.php" class="btn mt-10 btn-corner signup">Sign up</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <p id="nav">
                    <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>
                </p>

            </div>
        </div>
    </div>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/jquery.easing.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/pace/pace.min.js"></script>
    <script src="./assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="./assets/js/jquery.min.js"><\/script>');
    </script>
    <script src="./assets/js/scripts.js"></script>

</body>

</html>