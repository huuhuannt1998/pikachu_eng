<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_reflected_get.php"){
    $ACTIVE = array('','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

$PIKA_ROOT_DIR =  "../../../";

include_once $PIKA_ROOT_DIR.'inc/config.inc.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';
include_once $PIKA_ROOT_DIR.'inc/function.php';

include_once $PIKA_ROOT_DIR.'header.php';



$link=connect();
$is_login_id=check_xss_login($link);



if(!$is_login_id){

    header("location:post_login.php");

}

$state = 'YouSuccessful,<a href="xss_reflected_post.php?logout=1"></a>';
$html='';
if(isset($_POST['submit'])){
    if(empty($_POST['message'])){
        $html.="<p class='notice'>Input'kobe'-_-</p>";
    }else{

        //NextSurfaceWillBeforeEndInputOfParameterNotOfOutputHas,xss
        if($_POST['message']=='kobe'){
            $html.="<p class='notice'>YouAnd{$_POST['message']}One，，！</p><img src='{$PIKA_ROOT_DIR}assets/images/nbaplayer/kobe.png' />";
        }else{
            $html.="<p class='notice'>who is {$_POST['message']},i don't care!</p>";
        }
    }
}



if(isset($_GET['logout']) && $_GET['logout'] == '1'){
    setcookie('ant[uname]','');
    setcookie('ant[pw]','');
    header("location:post_login.php");

}

?>




<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../xss.php">xss</a>
                </li>
                <li class="active">xssOverview</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="ProblemStillThatProblem,OnlyIsSubmitMethodChangeHaspost,BenefitUse?">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">



            <div id="xssr_main">
                <p class="xssr_title">Which NBA player do you like?</p>
                <form method="post">
                    <input class="xssr_in" type="text" name="message" />
                    <input class="xssr_submit" type="submit" name="submit" value="submit" />
                </form>
                <br />
                <?php echo $state;?>
                <br />
                <?php echo $html;?>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
