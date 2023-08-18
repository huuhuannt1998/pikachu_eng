<?php
include_once "inc/mysql.inc.php";
include_once "inc/config.inc.php";

$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
if(!check_login($link)){
    header("location:index.php");
}


if(isset($_GET['logout']) && $_GET['logout'] == 1){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-3600,'/');
    header("location:index.php");
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>pikachu Xss Background</title>
    <link rel="stylesheet" type="text/css" href="pkxss.css"/>
</head>
<body>
<div id="title">
    <h1>pikachu Xss Background</h1>
    <div id="xsstest_main">
        <h2 class="left_title"> |<a href="xssmanager.php?logout=1"></a></h2>
        <ul class="left_list">
            <li><a href="xcookie/pkxss_cookie_result.php">cookieSearchSet</a></li>
            <li><a href="xfish/pkxss_fish_result.php">EndResult</a></li>
            <li><a href="rkeypress/pkxss_keypress_result.php"></a></li>
        </ul>
    </div>
</body>
</html>