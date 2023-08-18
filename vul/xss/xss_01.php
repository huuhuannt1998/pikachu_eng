<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_01.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

$html = '';
if(isset($_GET['submit']) && $_GET['message'] != null){
    //HereWillUseThenTo<scriptGoLineForEmpty,AlsoJustIsFilter
    $message=preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/', '', $_GET['message']);
//    $message=str_ireplace('<script>',$_GET['message']);

    if($message == 'yes'){
        $html.="<p>ThatJustPersonOnePersonOneWillBar!</p>";
    }else{
        $html.="<p>Say'{$message}'Of,NotTo,JustIs!</p>";
    }

}


?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="xss.php">xss</a>
                </li>
                <li class="active">xssFiltering</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="HaveByFilterHas,LookBypass?">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <div id="xssr_main">
                <p class="xssr_title">Next,PleaseAskYouPersonRight??</p>
                <form method="get">
                    <input class="xssr_in" type="text" name="message" />
                    <input class="xssr_submit" type="submit" name="submit" value="submit" />
                </form>
                <?php echo $html;?>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
