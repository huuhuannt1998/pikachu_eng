<?php
//Globalsession_start
session_start();
//GlobalResidential setting time zone
date_default_timezone_set('Asia/Shanghai');
//GlobalSettingDefaultCharacter
header('Content-type:text/html;charset=utf-8');
//DefinitionDatabaseConnectionParameter
define('DBHOST', '127.0.0.1');//WilllocalhostOr127.0.0.1Modified to database serverOfAddress
define('DBUSER', 'root');//WillrootModified to connectmysqlOfUsername
define('DBPW', '');//WillrootModified to connectmysqlOfPassword，Such asIf changed, it is still connectedNotOn，Please connect manually firstYouOfDatabase，EnsureDatabaseThe service is okayInSay!
define('DBNAME', 'pikachu');//Customize，RecommendNotModify
define('DBPORT', '3306');//Will3306ModifyFormysqlOfConnection port，Defaulttcp3306

?>
