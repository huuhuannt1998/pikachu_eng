<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "urlredirect.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

$html="";
if(isset($_GET['url']) && $_GET['url'] != null){
    $url = $_GET['url'];
    if($url == 'i'){
        $html.="<p>Of,YouCanDoYou!</p>";
    }else {
        header("location:{$url}");
    }
}



?>



<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="unsafere.php.php"></a>
                </li>
                <li class="active">InsecureurlRedirect</li>
            </ul>
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="CarefullyLookNextPleasePleaseOf">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

            <div class="vul info">

                AskOnce,YouIn the endIsNextSurfaceOneClassTypeOfPerson:<br>
                <pre>

                <a href="urlredirect.php">OfOneOf</a>
                <a href="urlredirect.php">OfOneOf</a>
                <a href="urlredirect.php?url=unsafere.php">OfOneOf</a>
                <a href="urlredirect.php?url=i">JustIs,NotOf</a>
                    </pre>
                <?php echo $html;?>


            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
