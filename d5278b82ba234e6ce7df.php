<?php 
    error_reporting(0); 
include("dbcon.php"); 
$a = bin2hex(random_bytes(10));
$get = $_GET['pid'];
$s_s= 39; 
$s_d= 1;
$sql_query = $conn->query("INSERT INTO report (v_id,s_id,vendor,a_id) VALUE('$get','$s_s','$s_d','$a')"); if($sql_query) header("Location: https://edgeapi.innovatemr.net/startSurvey?Test=1&NotLive=1&survNum=mPg2za6K&supCode=92&PID=$a&sid=39"); exit; ?>