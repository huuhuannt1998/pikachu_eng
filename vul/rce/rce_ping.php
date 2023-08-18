<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "rce_ping.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';


//header("Content-type:text/html; charset=gbk");
$result='';

if(isset($_POST['submit']) && $_POST['ipaddress']!=null){
    $ip=$_POST['ipaddress'];
//     $check=explode('.', $ip);CanFirst，HoweverNumberAs，TheOnePositionAndThePosition1-255，InPosition0-255
    if(stristr(php_uname('s'), 'windows')){
//         var_dump(php_uname('s'));
        $result.=shell_exec('ping '.$ip);//WillChangeVolumeGoCome，NoDo
    }else {
        $result.=shell_exec('ping -c 4 '.$ip);
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
                <li class="active">exec "ping"</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="OncepingInSystemOnIsUseOf">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <div id="comm_main">
                <p class="comm_title">Here, please enter the target IP address!</p>
                <form method="post">
                    <input class="ipadd" type="text" name="ipaddress" />
                    <input class="sub" type="submit" name="submit" value="ping" />
                </form>

                    <?php
                    if($result){
                        echo "<pre>{$result}</pre>";
                    }
                    ?>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
