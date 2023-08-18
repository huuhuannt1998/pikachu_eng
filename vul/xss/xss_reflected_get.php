<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_reflected_get.php"){
    $ACTIVE = array('','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


$html='';
if(isset($_GET['submit'])){
    if(empty($_GET['message'])){
        $html.="<p class='notice'>Input'kobe'-_-</p>";
    }else{
        if($_GET['message']=='kobe'){
            $html.="<p class='notice'>YouAnd{$_GET['message']}One，，！</p><img src='{$PIKA_ROOT_DIR}assets/images/nbaplayer/kobe.png' />";
        }else{
            $html.="<p class='notice'>who is {$_GET['message']},i don't care!</p>";
        }
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
                <li class="active">Reflectedxss(get)</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="tmdxss,FirstYouShouldInputkobeLookOnceSay">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">



            <div id="xssr_main">
                <p class="xssr_title">Which NBA player do you like?</p>
                <form method="get">
                    <input class="xssr_in" type="text" maxlength="20" name="message" />
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
