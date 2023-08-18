<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "ssrf_curl.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$FILEDIR = $_SERVER['PHP_SELF'];
$RD = explode('/',$FILEDIR)[1] . '/';
$RD = $RD == 'vul/' ? '' : $RD;


$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


//payload:
//file:///etc/passwd  ReadFile
//http://192.168.1.15:22 According tobannerReturn,ErrorTip,WhenEndPort

if(isset($_GET['url']) && $_GET['url'] != null){

    //ReceiveBeforeEndURLNoProblem,ButIsToDoFilter,Such asResultNotDoFilter,JustWillLead toSSRF
    $URL = $_GET['url'];
    $CH = curl_init($URL);
    curl_setopt($CH, CURLOPT_HEADER, FALSE);
    curl_setopt($CH, CURLOPT_SSL_VERIFYPEER, FALSE);
    $RES = curl_exec($CH);
    curl_close($CH) ;
//ssrfOfAskIs:BeforeEndTransferGoComeOfurlByBackgroundUsecurl_exec()GoLineHasPleasePlease,HoweverWillPleasePleaseOfEndResultReturnGiveHasBeforeEnd。
//ExceptHashttp/httpsOutside,curlAlsoOneOtherOfProtocolcurl --version CanCheckLookItsOfProtocol,telnet
//curlProtocol，HaveFTP, FTPS, HTTP, HTTPS, GOPHER, TELNET, DICT, FILEAsAndLDAP
    echo $RES;

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
                   data-content="FirstHasSolutionOncephpIncurlRelatedFunctionOfUseBar">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

         <a href="ssrf_curl.php?url=<?php echo 'http://127.0.0.1/'.$RD.'vul/ssrf/ssrf_info/info1.php';?>">TiredHasBar,ComeReadOneBar</a>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
