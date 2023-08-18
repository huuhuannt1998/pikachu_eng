<?php
error_reporting(0);
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
$link=connect();


// JudgeIsIs logged in?，NoNotCanVisit
if(!check_login($link)){
    header("location:../pkxss_login.php");
}


if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id=escape($link, $_GET['id']);
    $query="delete from fish where id=$id";
    execute($link, $query);
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EndResult</title>
<link rel="stylesheet" type="text/css" href="../antxss.css" />
</head>
<body>
<div id="title">
<h1>pikachu Xss EndResult</h1>
<a href="../xssmanager.php">Return</a>
</div>
<div id="result">
    <table class="tb" border="1px" cellpadding="10" cellspacing="1" bgcolor="#5f9ea0">
        <tr>
            <td class="1">id</td>
            <td class="1">time</td>
            <td class="1">username</td>
            <td class="1">password</td>
            <td class="2">referer</td>
            <td class="2"></td>
        </tr>
    <?php 
    $query="select * from fish";
    $result=mysqli_query($link, $query);
    while($data=mysqli_fetch_assoc($result)){
$html=<<<A
    <tr>
        <td class="1">{$data['id']}</td>
        <td class="1">{$data['time']}</td>
        <td class="1">{$data['username']}</td>
        <td class="1">{$data['password']}</td>
        <td class="2">{$data['referer']}</td>
         <td><a href="pkxss_fish_result.php?id={$data['id']}">Except</a></td>
    </tr>
A;
         
        echo $html; 
    }
    ?>
    </table>
</div>
</body>
</html>