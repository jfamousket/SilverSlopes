<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Get Orders</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.panel-heading ,.panel-footer{
    text-overflow:ellipsis;
}
#msg{display:none;position:fixed;text-align:center;background-color:#2196f3;z-index:2000;width:100%;padding:15px;}
#msg h3{color:#fff;}
</style>
</head>

<body>
<div id="msg">
    <h1>Done</h1>
</div>
<?php
require_once 'core/db.php';
$pins = "SELECT * FROM orders WHERE status = 0";
$sq = $conn->query($pins); 
?>
    <div id="wrapper">
        <?php require('header.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Unprocessed Orders</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php 
            $table = "orders";
                while($data = $sq->fetch_assoc()){
                echo('<div class="col-lg-6"><div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>Plan: '.$data["plan"].'</strong> for '.$data["name"].'
                    </div>
                    <div class="panel-body">
                        <p><b>Inv: </b>'.$data["inv"].'</p>
                        <p><b>Phone: </b>'.$data["num"].'</p>
                        <p><b>Location: </b>'.$data["location"].'</p>
                        <p><span><b>Role: </b>'.$data["role"].'; </span><span><b>Type:</b>'.$data["type"].'</span></p>
                        <p><b>Details :</b>'.$data["details"].'</p>
                        <p><b>Delivery: </b>'.$data["delivery"].'</p>
                        <p><b>Services: </b>'.$data["services"].'</p>
                        <p><b>Navbar Items: </b>'.$data["navbar_items"].'</p>
                        <p><b>@: </b> '.$data["email"].'</p>
                        <p><b>Date: </b>'.$data["dateC"].'</p>
                    </div>
                    <div class="panel-footer">
                    <span hidden data-name="'.$data["name"].'" data-inv="'.$data["inv"].'"></span>
                      <a data-table="orders" data-id="'.$data["order_id"].'" onclick="proccess('.$data["order_id"].')" href="Javascript:void(0)">Process <span class="fa fa-arrow-right"></span></a>                    </div>
                </div>
            </div>');
            }  
                ?>
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script>
        function proccess(id){
$(function(){
    //var table = $(this).data("table"), id = $(this).data("id");
    //name = $(this).siblings("span").data("name"),
    //inv = $(this).siblings("span").data("inv");
    if(confirm("Confirm Processing:\nId:"+id)){
       $.ajax({
        url:"core/proccess.php?tb=orders"+"&id="+id,
        method:"get",
        dataType:'json',
         success:function(response){
            if(response.success == true){
                $('#msg').html("<h3>"+response.msg+"</h3>");
                $('#msg').slideDown("fast",function(){
                    $(this).delay(3000).slideUp("fast");
                })
            }else{
                $('#msg').css("background","red");
                $('#msg').html("<h3>"+response.msg+"</h3>");
                $('#msg').slideDown("fast",function(){
                    $(this).delay(3000).slideUp("fast");
                });
            }
        }
    });
    }else{
        document.write("You blocked pop up!\nPlease refresh page..")
        return false;
    }
});
}
    </script>

</body>

</html>
