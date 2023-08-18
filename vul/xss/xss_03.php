<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_03.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

$html='';

if(isset($_GET['submit'])){
    if(empty($_GET['message'])){
        $html.="<p class='notice'>YouInputurl,YouNot?</p>";
    }
    if($_GET['message'] == 'www.baidu.com'){
        $html.="<p class='notice'>,NotToYouIsOfOnePerson</p>";
    }else {
        //OutputInaOfhrefAttributeInside,CanUsejavascriptProtocolComeHoldLinejs
        //:Onlyhttp,https,ItsInGoLinehtmlspecialchars
        $message=htmlspecialchars($_GET['message'],ENT_QUOTES);
        $html.="<a href='{$message}'> NextInputOfurlAlsoPleasePointOnceBar</a>";
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
                <li class="active">xssOnhrefOutput</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="aInsideOfhref,imgInsideOfsrcAttribute,WhatOf">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <div id="xssr_main">
                <p class="xssr_title">PleaseInputOneYouUseOfurlAddress,JustYouIsPerson</p>
                <form method="get">
                    <input class="xssr_in" type="text" name="message" />

                    <input class="xssr_submit" type="submit" name="submit" value="submit" />
                </form>
                <?php
                echo $html;
                ?>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
