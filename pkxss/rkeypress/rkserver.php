<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */

include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();

//SettingByVisit
header("Access-Control-Allow-Origin:*");

$data = $_POST['datax'];
$query = "insert keypress(data) values('$data')";
$result=mysqli_query($link,$query);


?>