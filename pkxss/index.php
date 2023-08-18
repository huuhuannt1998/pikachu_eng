<?php


include_once "inc/config.inc.php";
include_once "inc/mysql.inc.php";

$html='';
try
{
    $link = mysqli_connect(DBHOST,DBUSER,DBPW,DBNAME);
}
catch(Exception $e)
{
    $html.=
        "<p >
        <a href='pkxss_install.php' style='color:red;'>
        Tip:Welcome to usexssBackground，Click to initialize and install!
        </a>
    </p>";
}
if (@$link)
{
    header("location:pkxss_login.php");
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
    <h1>Welcome to use pikachu Xss Background</h1>
    <?php echo $html;?>
</div>
</body>
</html>