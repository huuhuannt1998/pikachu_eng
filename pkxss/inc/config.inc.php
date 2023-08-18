<?php
//Globalsession_start
session_start(); 
//GlobalResidential setting time zone
date_default_timezone_set('Asia/Shanghai');
//GlobalSettingDefaultCharacter
header('Content-type:text/html;charset=utf-8');
//DefinitionDatabaseConnectionParameter
define('DBHOST', 'localhost');//WilllocalhostModified to database serverOfAddress
define('DBUSER', 'root');//WillrootModified to connectmysqlOfUsername
define('DBPW', 'root');//WillrootModified to connectmysqlOfPassword
define('DBNAME', 'pkxss');//Customize，RecommendNotModify
define('DBPORT', '3306');//Will3306ModifyFormysqlOfConnection port，Defaulttcp3306

?>
