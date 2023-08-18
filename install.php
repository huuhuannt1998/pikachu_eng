<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */
include_once 'header.php';
include_once 'inc/config.inc.php';
$dbhost=DBHOST;
$dbuser=DBUSER;
$dbpw=DBPW;
$dbname=DBNAME;
$mes_connect='';
$mes_create='';
$mes_data='';
$mes_ok='';

if(isset($_POST['submit'])){
    //Determine database connection
    if(!@mysqli_connect($dbhost, $dbuser, $dbpw)){
        exit('Data connection failed，Please check carefullyinc/config.inc.phpOfConfiguration');
    }
    $link=mysqli_connect(DBHOST, DBUSER, DBPW);
    $mes_connect.="<p class='notice'>Database connection successful!</p>";
    //Such asIf storedIn,Then get rid of it
    $drop_db="drop database if exists $dbname";
    if(!@mysqli_query($link, $drop_db)){
        exit('Database initialization failed，Please check carefullyWhether the current user has operational rights');
    }
    //Create database
    $create_db="CREATE DATABASE $dbname";
    if(!@mysqli_query($link,$create_db)){
        exit('DatabaseCreateFailure，Please check carefullyWhether the current user has operational rights');
    }
    $mes_create="<p class='notice'>New database:".$dbname."Successful!</p>";
    //Create data.Choose database
    if(!@mysqli_select_db($link, $dbname)){
        exit('DatabaseChooseFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreateusersTable
    $creat_users=
        "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `password` varchar(66) NOT NULL,
    `level` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4";
    if(!@mysqli_query($link,$creat_users)){
        exit('CreateusersTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    //TousersTableInsideInsert defaultOfData
    $insert_users = "insert into `users` (`id`,`username`,`password`,`level`) values (1,'admin',md5('123456'),1),(2,'pikachu',md5('000000'),2),(3,'test',md5('abc123'),3)";

    if(!@mysqli_query($link,$insert_users)){
        echo $link->error;
        exit('CreateusersTableDataFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreateMessage boardOfTablemessage
    $create_message=
        "CREATE TABLE IF NOT EXISTS `message` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
     `content` varchar(255) NOT NULL,
    `time` datetime NOT NULL,
     PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='stored_xss_1' AUTO_INCREMENT=56";


    if(!@mysqli_query($link,$create_message)){
        exit('CreatemessageTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    //CreatexssblindOfOpinion collectionTable
    $create_xssblind=
        "CREATE TABLE IF NOT EXISTS `xssblind` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `time` datetime NOT NULL,
    `content` text NOT NULL,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7";
    if(!@mysqli_query($link,$create_xssblind)){
        exit('CreatexssblindTableFailure，Please check carefullyWhether the current user has operational rights');
    }



    //CreateMemberInformationOfTablemember
    $create_member=
        "CREATE TABLE IF NOT EXISTS `member` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(66) NOT NULL,
    `pw` varchar(128) NOT NULL,
    `sex` char(10) NOT NULL,
    `phonenum` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25";
    if(!@mysqli_query($link,$create_member)){
        exit('CreatememberTableFailure，Please check carefullyWhether the current user has operational rights');
    }

    $insert_member=
        "INSERT INTO `member` (`id`, `username`, `pw`, `sex`, `phonenum`, `address`, `email`) VALUES
    (1, 'vince', md5('123456'), 'boy', '18626545453', 'chain', 'vince@pikachu.com'),
    (2, 'allen', md5('123456'), 'boy', '13676767767', 'nba 76', 'allen@pikachu.com'),
    (3, 'kobe', md5('123456'), 'boy', '15988767673', 'nba lakes', 'kobe@pikachu.com'),
    (4, 'grady', md5('123456'), 'boy', '13676765545', 'nba hs', 'grady@pikachu.com'),
    (5, 'kevin', md5('123456'), 'boy', '13677676754', 'Oklahoma City Thunder', 'kevin@pikachu.com'),
    (6, 'lucy', md5('123456'), 'girl', '12345678922', 'usa', 'lucy@pikachu.com'),
    (7, 'lili', md5('123456'), 'girl', '18656565545', 'usa', 'lili@pikachu.com')";

    if(!@mysqli_query($link,$insert_member)){
        exit('CreatememberDataFailure，Please check carefullyWhether the current user has operational rights');
    }


    //Create data.CreateTablesqliInsidehttpHeaderInjectionOfInformation,httpinfoAnd data
    $creat_httpinfo=
        "CREATE TABLE IF NOT EXISTS `httpinfo` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `userid` int(10) unsigned NOT NULL,
    `ipaddress` varchar(255) NOT NULL,
     `useragent` varchar(255) NOT NULL,
     `httpaccept` varchar(255) NOT NULL,
    `remoteport` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42";
    if(!@mysqli_query($link,$creat_httpinfo)){
        exit('CreatehttpinfoTableFailure，Please check carefullyWhether the current user has operational rights');
    }



    $mes_data="<p class='notice'>Create databaseDataSuccessful!</p>";
    $mes_ok="<p class='notice'>Okay，You can start～<a href='index.php'>ClickHere</a>Enter the homepage</p>";


}
?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
<!--                <li>-->
<!--                    <i class="ace-icon fa fa-home home-icon"></i>-->
<!--                    <a href="#">Home</a>-->
<!--                </li>-->
                <li class="active">System initializationInstall</li>
            </ul><!-- /.breadcrumb -->

        </div>
<div class="page-content">

    <div id=install_main>
        <p class="main_title">Setup guide:</p>
        <p class="main_title">The0Step：Please advanceInstall“mysql+php+Middleware”OfEnvironment;</p>
        <p class="main_title">The1Step：PleaseAccording toActualEnvironmentModifyinc/config.inc.phpFileInsideOfParameter;</p>
        <p class="main_title">The2Step：Click“Install/Initialization”Button;</p>
        <form method="post">
            <input type="submit" name="submit" value="Install/Initialization"/>
        </form>

    </div>
    <div class="info" style="color: #D6487E;padding-top: 40px;">
        <?php
        echo $mes_connect;
        echo $mes_create;
        echo $mes_data;
        echo $mes_ok;
        ?>

    </div>

</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->