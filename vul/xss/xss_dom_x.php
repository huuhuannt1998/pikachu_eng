<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_dom.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

include_once $PIKA_ROOT_DIR."inc/config.inc.php";
include_once $PIKA_ROOT_DIR."inc/mysql.inc.php";

$html='';
if(isset($_GET['text'])){
    $html.= "<a href='#' onclick='domxss()'>HaveToOf,ComeOfJustHas</a>";
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
                <li class="active">DOMTypexss</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="domTypeXSSIsRight??">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <div id="xssd_main">
                <script>
                    function domxss(){
                        var str = window.location.search;
                        var txss = decodeURIComponent(str.split("text=")[1]);
                        var xss = txss.replace(/\+/g,' ');
//                        alert(xss);

                        document.getElementById("dom").innerHTML = "<a href='"+xss+"'>JustToAll,AllBar</a>";
                    }
                    //：'><img src="#" onmouseover="alert('xss')">
                    //：' onclick="alert('xss')">,JustLine
                </script>
                <!--<a href="" onclick=('xss')>-->
                <form method="get">
                <input id="text" name="text" type="text"  value="" />
                <input id="submit" type="submit" value="PleaseSayYouOfTo"/>
                </form>
                <div id="dom"></div>
            </div>

            <?php echo $html;?>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';
?>
