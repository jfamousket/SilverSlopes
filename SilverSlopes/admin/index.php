<?php
require_once 'core/db.php';
session_start();
  if(isset($_SESSION['adminId'])){
      header('location: dashboard.php');
  }
$errors = array();

  if($_POST){
      $user = $_POST['username'];
      $password = $_POST['password'];


      $sql = "SELECT * FROM admins WHERE username = '$user'";
        $result = $conn->query($sql);
      if($result->num_rows == 1){
          //means user exist
          //encrypting password
      //$password = md5($password);
          $getuser = "SELECT * FROM admins WHERE username = '$user' AND password = '$password'";
          $res = $conn->query($getuser);
          //check username/ password combination
          if($res->num_rows == 1){
              $admin = $res->fetch_assoc();
              $admin_id = $admin['admin_id'];
              //seting session
              $_SESSION['adminId'] = $admin_id;

              //redirect user to account page
              header('location: dashboard.php');
          }else{
              $errors[] = "Incorrect username or password!";
          }//get user else
      }else{
          $errors[] = 'User does not exist!';
      }//user does not exist else
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

    <title>SilverSlope (Admin)</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<style>
body{background-image: -moz-linear-gradient(0deg, #f50044 0%, #ff6363 100%);
background-image: -webkit-linear-gradient(0deg, #f50044 0%, #ff6363 100%);
background-image: -ms-linear-gradient(0deg, #f50044 0%, #ff6363 100%);}
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary" style="border-color:#fff;">
                    <div style="background:#f50044;border:1px solid #fff;" class="panel-heading">
                        <h3 align="center" class="panel-title">SilverSlope (Admin)</h3>
                    </div>
                    <div class="panel-body" style="border:1px solid #fff;">
                       <div class="messages">
                               <?php
                            foreach ($errors as $key => $value) {
                            # to display errors
                        if($errors){
                            echo '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '.$value.'</div>';
                            }
                        } ?>
                            </div>
                        <form action="<?php echo($_SERVER['PHP_SELF']);?>" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" style="background-color:#ff6363;color:#fff;" class="btn btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
