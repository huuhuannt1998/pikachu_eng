<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "sqli_header.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR . "inc/config.inc.php";
include_once $PIKA_ROOT_DIR . "inc/function.php";
include_once $PIKA_ROOT_DIR . "inc/mysql.inc.php";


$link=connect();

$is_login_id=check_sqli_login($link);
if(!$is_login_id){
    header("location:sqli_header_login.php");
}
// $remoteipadd=escape($link, $_SERVER['REMOTE_ADDR']);
// $useragent=escape($link, $_SERVER['HTTP_USER_AGENT']);
// $httpaccept=escape($link, $_SERVER['HTTP_ACCEPT']);
// $httpreferer=escape($link, $_SERVER['HTTP_REFERER']);


//ObtainBeforeEndComeOfHeaderInformation,NoPerson,NextSafety
$remoteipadd=$_SERVER['REMOTE_ADDR'];
$useragent=$_SERVER['HTTP_USER_AGENT'];
$httpaccept=$_SERVER['HTTP_ACCEPT'];
$remoteport=$_SERVER['REMOTE_PORT'];

//HerePuthttpOfHeaderInformationStoreToDatabaseInsideHas，ButIsStoreGoOnBeforeNoGoLineEscape，Lead toSQLInjection vulnerability
$query="insert httpinfo(userid,ipaddress,useragent,httpaccept,remoteport) values('$is_login_id','$remoteipadd','$useragent','$httpaccept','$remoteport')";
$result=execute($link, $query);


if(isset($_GET['logout']) && $_GET['logout'] == 1){
    setcookie('ant[uname]','',time()-3600);
    setcookie('ant[pw]','',time()-3600);
    header("location:sqli_header_login.php");
}


?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../sqli.php">sqli</a>
                </li>
                <li class="active">httpHeaderInjection</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
                   data-content="HereOfProblemOf,httpHeaderInsideAboutOfAllCanOnce">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <?php
            $html=<<<A
<div id="http_main">
    <h1>，You，YouOfInformationByHas：<a href="sqli_header.php?logout=1">Click</a></h1>
    <p>YouOfipAddress:$remoteipadd</p>
    <p>YouOfuser agent:$useragent</p>
    <p>YouOfhttp accept:$httpaccept</p>
    <p>YouOfEndPort（Connection）:tcp$remoteport</p>
</div>
A;
            echo $html;
            ?>




        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
