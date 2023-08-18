<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 *
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "dir.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';

$html='';
if(isset($_GET['title'])){
    $filename=$_GET['title'];
    //HerePutTransferGoComeOfGoLineHasrequire(),Problem
    require "soup/$filename";
//    echo $html;
}
?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="dir.php">Directory traversal</a>
                </li>
                <li class="active">../../</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstReadOnceSmallTextInBar..">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="dt_main">
                <p class="dt_title">(1)it's time to get up!</p>
                <a class="dt_title" href="dir_list.php?title=jarheads.php">we're jarheads!</a>
                <p class="dt_title">(2)it's time to say goodbye!</p>
                <a class="dt_title" href="dir_list.php?title=truman.php">Truman's word!</a>
            </div>
            <br />
            <br />
            <div>
                <?php echo $html;?>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
