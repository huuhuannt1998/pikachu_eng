<?php
// error_reporting(0);
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();

// JudgeIsIs logged in?，NoNotCanVisit
if(!check_login($link)){
    header("location:../pkxss_login.php");
}


if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id=escape($link, $_GET['id']);
    $query="delete from cookies where id=$id";
    execute($link, $query);
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cookieSearchSetEndResult</title>
<link rel="stylesheet" type="text/css" href="../antxss.css" />
</head>
<body>
<div id="title">
<h1>pikachu Xss ObtaincookiesEndResult</h1>
<a href="../xssmanager.php">Return</a>
</div>
<div id="xss_main">
<table border="1px" cellpadding="10" cellspacing="1" bgcolor="#5f9ea0">
    <tr>
        <td>id</td>
        <td>time</td>
        <td>ipaddress</td>
        <td>cookie</td>
        <td>referer</td>
        <td>useragent</td>
        <td>Except</td>
    </tr>
    <?php 
    $query="select * from cookies";
    $result=mysqli_query($link, $query);
    while($data=mysqli_fetch_assoc($result)){
$html=<<<A
    <tr>
        <td>{$data['id']}</td>
        <td>{$data['time']}</td>
        <td>{$data['ipaddress']}</td>
        <td>{$data['cookie']}</td>
        <td>{$data['referer']}</td>
        <td>{$data['useragent']}</td>
        <td><a href="pkxss_cookie_result.php?id={$data['id']}">Except</a></td>
    </tr>
A;
         
        echo $html;
        
        
    }
    
    ?>
    
</table>
</div>
</body>
</html>