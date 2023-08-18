<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "rce_evel.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';

$html='';
if(isset($_POST['submit']) && $_POST['txt'] != null){
    if(@!eval($_POST['txt'])){
        $html.="<p>YouOfCharacterAlsoOf!</p>";

    }

}


?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="rce.php">rce</a>
                </li>
                <li class="active">exec "eval"</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="BackgroundNotWillUseHaseval()Bar....">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <div id="comm_main">
                <p class="comm_title">Here, PleaseSubmitOneYouOfCharacterString:</p>
                <form method="post">
                    <input class="ipadd" type="text" name="txt" />
                    <input class="sub" type="submit" name="submit" value="Submit" />
                </form>
            </div>
            <?php echo $html;?>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
