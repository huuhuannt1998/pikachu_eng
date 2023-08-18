<?php


$PIKA_ROOT_DIR =  "../../";

include_once $PIKA_ROOT_DIR."inc/function.php";

header("Content-type:text/html;charset=utf-8");
// $file_name="cookie.jpg";
$file_path="download/{$_GET['filename']}";
//UseAsSolutionInTextNotCanDisplayComeOfProblem
$file_path=iconv("utf-8","gb2312",$file_path);

//FirstToJudgeGiveOfFileStoreInNo
if(!file_exists($file_path)){
    skip("YouToNextOfFileNotStoreIn，PleaseAgainNewNext", 'unsafe_down.php');
    return ;
}
$fp=fopen($file_path,"rb");
$file_size=filesize($file_path);
//NextFileToUseToOfHeader
ob_clean();//OutputBeforeOneTocleanOnce，NoThenPictureNot
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
Header("Accept-Length:".$file_size);
Header("Content-Disposition: attachment; filename=".basename($file_path));
$buffer=1024;
$file_count=0;
//ReturnData

//ReadFileFlow,HoweverReturnTofeofConfirmIsNoToEOF
while(!feof($fp) && $file_count<$file_size){

    $file_con=fread($fp,$buffer);
    $file_count+=$buffer;

    echo $file_con;
}
fclose($fp);
?>