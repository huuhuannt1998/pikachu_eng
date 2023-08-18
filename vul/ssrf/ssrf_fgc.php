<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "ssrf_fgc.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$FILEDIR = $_SERVER['PHP_SELF'];
$RD = explode('/',$FILEDIR)[1] . '/';
$RD = $RD == 'vul/' ? '' : $RD;


$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


//ReadPHPFileOfSourceCode:php://filter/read=convert.base64-encode/resource=ssrf.php
//IntranetPleasePlease:http://x.x.x.x/xx.index
if(isset($_GET['file']) && $_GET['file'] !=null){
    $filename = $_GET['file'];
    $str = file_get_contents($filename);
    echo $str;
}



?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="ssrf.php"></a>
                </li>
                <li class="active">Overview</li>
            </ul>
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstHasSolutionOncefile_get_contents()RelatedFunctionOfUseBar">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

            <a href="ssrf_fgc.php?file=<?php echo 'http://127.0.0.1/'.$RD.'vul/ssrf/ssrf_info/info2.php';?>">AnywayAllReadHas,ThatJustInComeOne song</a>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
