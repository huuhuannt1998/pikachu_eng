<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xxe_1.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


//payload,urlCodeOnce:
$xxepayload1 = <<<EOF
<?xml version = "1.0"?>
<!DOCTYPE ANY [
    <!ENTITY f SYSTEM "file:///etc/passwd">
]>
<x>&f;</x>
EOF;

$xxetest = <<<EOF
<?xml version = "1.0"?>
<!DOCTYPE note [
    <!ENTITY hacker "ESHLkangi">
]>
<name>&hacker;</name>
EOF;

//$xxedata = simplexml_load_string($xxetest,'SimpleXMLElement');
//print_r($xxedata);


//CheckLookWhenBeforeLIBXMLOf
//print_r(LIBXML_VERSION);

$html='';
//ToBeforeInsidelibxmlOfAll>=2.9.0Has,SoAsHereHasLIBXML_NOENTParameterHasOutsideSolution
if(isset($_POST['submit']) and $_POST['xml'] != null){


    $xml =$_POST['xml'];
//    $xml = $test;
    $data = @simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOENT);
    if($data){
        $html.="<pre>{$data}</pre>";
    }else{
        $html.="<p>XML、DTDTextClassTypeDefinition、TextAllEngageUnderstandHasRight??</p>";
    }
}

?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="xee.php"></a>
                </li>
                <li class="active">xxeVulnerability</li>
            </ul>
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstPutXML、DTDTextClassTypeDefinition、TextLookOnce">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

            <form method="post">
                <p>IsOneReceivexmlDataOfapi:</p>
                    <input type="text" name="xml" />
                    <input type="submit" name="submit" value="Submit">
            </form>
            <?php echo $html;?>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
