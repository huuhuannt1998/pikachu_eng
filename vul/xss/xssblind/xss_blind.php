<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$PIKA_ROOT_DIR =  "../../../";

include_once $PIKA_ROOT_DIR.'inc/config.inc.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
if ($SELF_PAGE = "xss_blind.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

include_once $PIKA_ROOT_DIR.'header.php';


$link=connect();
$html='';
if(array_key_exists("content",$_POST) && $_POST['content']!=null){
    $content=escape($link, $_POST['content']);
    $name=escape($link, $_POST['name']);
    $time=$time=date('Y-m-d g:i:s');
    $query="insert into xssblind(time,content,name) values('$time','$content','$name')";
    $result=execute($link, $query);
    if(mysqli_affected_rows($link)==1){
        $html.="<p>Thank you，NextOfLookWeTo!</p>";
    }else {
        $html.="<p>ooo.Submit，PleaseAgainNewSubmit</p>";
    }
}




?>



<div class="main-content" xmlns="http://www.w3.org/1999/html">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../xss.php">xss</a>
                </li>
                <li class="active">xss</li>

            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="Background,LookWill?BackgroundAddressIs/xssblind/admin_login.php">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="xss_blind">
                <p class="blindxss_tip">PleaseInNextSurfaceInputYouTo"Header"TypeOfLook：</p>
                <p class="blindxss_tip">WeWillWillOneNameOne</p>
                <form method="post">
                    <textarea class="content" name="content"></textarea><br />
                    <label>YouOfBigName：</label><br />
                    <input class="name" type="text" name="name"/><br />
                    <input type="submit" name="submit" value="Submit" />
                </form>
                <?php echo $html;?>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<?php
include_once $PIKA_ROOT_DIR.'footer.php';


?>
