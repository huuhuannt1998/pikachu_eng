<?php 
session_start();
include_once 'function.php';
//$_SESSION['vcode']=vcode(100,40,30,4);
$_SESSION['vcode']=vcodex();
//Captcha bypass on server HereIn factStillHaveOneProblem,Is the serverWillVerificationCodeCharacterStringAsPlaintextCOOKIEOfMethodGiveHasBeforeEnd,ThatVerificationCodeAlsoWhatBird's meaning。。。
setcookie('bf[vcode]',$_SESSION['vcode']);
?>
