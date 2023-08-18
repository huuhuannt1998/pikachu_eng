<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_02.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

$html='';
$html1='';
$html2='';
if(isset($_GET['submit'])){
    if(empty($_GET['message'])){
        $html.="<p class='notice'>InputPointBar！</p>";
    }else {
        //UseHashtmlspecialcharsGoLine,IsNotIsJustNoProblemHas,htmlspecialcharsDefaultNotTo'
        $message=htmlspecialchars($_GET['message']);
        $html1.="<p class='notice'>YouOfInputBy:</p>";
        //InputOfByOutputToHasinputOfvalueAttributeInside,:' onclick='alert(111)'
//        $html2.="<input class='input' type='text' name='inputvalue' readonly='readonly' value='{$message}' style='margin-left:120px;display:block;background-color:#c0c0c0;border-style:none;'/>";
        $html2.="<a href='{$message}'>{$message}</a>";
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
                <li class="active">xssOnhtmlspecialchars</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstCheckOncehtmlspecialcharsThisOf">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <div id="xssr_main">
                <p class="xssr_title">PersonOnSoHave,IsForYouOfxssOfAlsoNot</p>
                <form method="get">
                    <input class="xssr_in" type="text" name="message" />

                    <input class="xssr_submit" type="submit" name="submit" value="submit" />
                </form>
                <?php
                echo $html;
                echo $html1;
                echo $html2;
                ?>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
