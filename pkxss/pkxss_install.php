<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */

include_once "inc/config.inc.php";
$dbhost=DBHOST;
$dbuser=DBUSER;
$dbpw=DBPW;
$dbname=DBNAME;
$mes_connect='';
$mes1='';
$mes2='';
$mes_ok='';

if(isset($_POST['submit'])) {
    //Determine database connection
    if (!@mysqli_connect($dbhost, $dbuser, $dbpw)) {
        exit('Data connection failed，Please check carefullyinc/config.inc.phpOfConfiguration');
    }
    $link = mysqli_connect(DBHOST, DBUSER, DBPW);
    $mes_connect .= "<p class='notice'>Database connection successful!</p>";
    //Such asIf storedIn,Then get rid of it
    $drop_db = "drop database if exists $dbname";
    if (!@mysqli_query($link, $drop_db)) {
        exit('Database initialization failed，Please check carefullyWhether the current user has operational rights');
    }
    //Create database
    $create_db = "CREATE DATABASE $dbname";
    if (!@mysqli_query($link, $create_db)) {
        exit('DatabaseCreateFailure，Please check carefullyWhether the current user has operational rights');
    }
    $mes_create = "<p class='notice'>New database:" . $dbname . "Successful!</p>";
    //Create data.Choose database
    if (!@mysqli_select_db($link, $dbname)) {
        exit('DatabaseChooseFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreateusersTable
    $creat_users =
        "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `password` varchar(66) NOT NULL,
    `level` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4";
    if (!@mysqli_query($link, $creat_users)) {
        exit('CreateusersTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    //TousersTableInsideInsert defaultOfData
    $insert_users = "insert into `users` (`id`,`username`,`password`,`level`) values (1,'admin',md5('123456'),1)";


    if (!@mysqli_query($link, $insert_users)) {
        echo $link->error;
        exit('CreateusersTableDataFailure，Please check carefullyWhether the current user has operational rights');
    }
    $mes1 = "<p class='notice'>New databaseTableusersSuccessful!</p>";

    //CreatecookieEndResultTable
    //time,ipaddress,cookie,referer,useragent
    $creat_cookieresult = "CREATE TABLE IF NOT EXISTS `cookies` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,`time` TIMESTAMP,`ipaddress` VARCHAR(50),`cookie` VARCHAR(1000),`referer` VARCHAR(1000),`useragent` VARCHAR(1000),PRIMARY KEY (`id`))";
    if (!@mysqli_query($link, $creat_cookieresult)) {
        exit('CreatecookieTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreatexfishEndResultTable
    $creat_xfish = "CREATE TABLE IF NOT EXISTS `fish` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,`time` TIMESTAMP,`username` VARCHAR(50),`password` VARCHAR(50),`referer` VARCHAR(1000),PRIMARY KEY (`id`))";
    if (!@mysqli_query($link, $creat_xfish)) {
        exit('CreatefishTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreateTable
    $creat_keypress = "CREATE TABLE IF NOT EXISTS `keypress` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT,`data` VARCHAR(1000),PRIMARY KEY (`id`))";
    if (!@mysqli_query($link, $creat_keypress)) {
        exit('CreatekeypressTableFailure，Please check carefullyWhether the current user has operational rights');
    }



    $mes2 = "<p class='notice'>New databaseTablecookie,fishSuccessful!</p>";
    $mes_ok="<p class='notice'>Okay，CanHas<a href='pkxss_login.php'>ClickHere</a>Enter the homepage</p>";
}
?>



<html>
<body>
<div class="page-content">

    <div id=install_main>
        <p class="main_title">Setup guide:</p>
        <p class="main_title">The0Step：Please advanceInstall“mysql+php+Middleware”OfEnvironment;</p>
        <p class="main_title">The1Step：PleaseAccording toActualEnvironmentModifypkxss/inc/config.inc.phpFileInsideOfParameter;</p>
        <p class="main_title">The2Step：Click“Install/Initialization”Button;</p>
        <form method="post">
            <input type="submit" name="submit" value="Install/Initialization"/>
        </form>

    </div>
    <div class="info" style="color: #D6487E;padding-top: 40px;">
        <?php
        echo $mes_connect;
        echo $mes1;
        echo $mes2;
        echo $mes_ok;
        ?>

    </div>

</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

</body>


</html>
