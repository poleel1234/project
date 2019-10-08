<?php
session_start();
include "connect_db.php";
$sql_insert = "insert into deposit(dep_id,dep_date,dep_amount,dep_amount2,mem_id,aut_id) values"
        . "('" . $_POST['dep_id'] . "',NOW(),'" . $_POST['dep_amount'] . "','" . $_POST['dep_amount2'] . "',"
        . "'" . $_POST['mem_id'] . "',"
        . "'" . $_SESSION['login_aut_id'] . "')";
$query_insert = mysqli_query($connect, $sql_insert);

$sql_update = "update member set mem_deposit = mem_deposit + '" . $_POST['dep_amount'] . "',mem_deposit2 = mem_deposit2 + '" . $_POST['dep_amount2'] . "' where mem_id='" . $_POST['mem_id'] . "'";
$query_update = mysqli_query($connect, $sql_update);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>ระบบกองทุนสวัสดิการชุมชนเทศบาลเมืองยโสธร</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />      
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>                               
    </head>
    <body>
        <div class="message-box message-box-success animated fadeIn open" id="message-box-success">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-check"></span> Success</div>
                    <div class="mb-content">
                        <p>บันทึกรับฝากเงินเรียบร้อยแล้ว</p>
                    </div>
                    <div class="mb-footer">
                        <a href="deposit_show.php" class="btn btn-default btn-lg pull-right">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>              

        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="js/demo_dashboard.js"></script>    
    </body>
</html>