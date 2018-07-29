<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Join Request</title>

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
    <script src="vendor/jquery/jquery.min.js"></script>
<style type="text/css">
.panel-heading ,.panel-footer{
    text-overflow:ellipsis;
}
</style>
</head>

<body>
<?php
require_once 'core/db.php';
$pins = "SELECT * FROM join_req";
$sq = $conn->query($pins); 
?>
    <div id="wrapper">
        <?php require('header.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Join Request</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php 
                while($data = $sq->fetch_assoc()){
                    //0 = not processed; 1 = proccessed; 2 = declined
                    if($data["status"] == 0){
                        $color = "red";
                        $status = "Not yet processed";
                    }
                echo('<div class="col-lg-6"><div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>Name: '.$data["name"].'</strong>
                    </div>
                    <div class="panel-body">
                        <p><b>Nick Name :</b>'.$data["nickname"].'</p>
                        <p><b>Phone: </b>'.$data["num"].'</p>
                        <p><b>Location: </b>'.$data["region"].'</p>
                        <p><b>Skills: </b>'.$data["skill"].'</p>
                        <p><b>About: </b> '.$data["about"].'</p>
                        <p><b>@: </b> '.$data["email"].'</p>
                        <p style="color:'.$color.';"><b>status: </b> '.$status.'</p>
                        <p><b>Date: </b> '.$data["dateC"].'</p>
                    </div>
                    <div class="panel-footer">
                      <button onclick="process(1)" class="btn btn-success btn-block">Accept <span class="fa fa-check"></button></span>
                      <button onclick="process(2)" class="btn btn-danger btn-block"><i class="fa fa-times"></i> Decline</button>
                    </div>
                </div>
            </div>');
            }  
                ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
        function process(stat) {
            if(stat == 1){
                if(confirm("Confirm ACtion of Acceptance")){

                }else{
                    return false;
                }
            }else if(stat == 2){

            }
        }
    </script>
    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
