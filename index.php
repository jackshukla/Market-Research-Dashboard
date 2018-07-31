<?php
session_start();
require_once("class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
    $login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
    $uname = strip_tags($_POST['txt_uname_email']);
    $umail = strip_tags($_POST['txt_uname_email']);
    $upass = strip_tags($_POST['txt_password']);

    if($login->doLogin($uname,$umail,$upass))
    {
        $login->redirect('home.php');
    }
    else
    {
        $error = "Wrong Details !";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DASHBOARD</title>

        <!-- Bootstrap Core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                            <?php
            if(isset($error))
            {
                  ?>
                                <div class="alert alert-danger">
                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp;
                                    <?php echo $error; ?> !
                                </div>
                                <?php
            }
            ?>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">

                                <div class="forms">

                                </div>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="txt_uname_email" type="text" autofocus required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="txt_password" type="password" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-lg btn-success btn-block" name="btn-login" value="Login">
                                </fieldset>
                                <br />
                                <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="./vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="./vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="./dist/js/sb-admin-2.js"></script>

    </body>

    </html>