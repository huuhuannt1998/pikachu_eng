<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */

$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_04.php"){
    $ACTIVE = array('','','','','','','','active open','','','','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}



$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


$jsvar='';
$html='';


//HereInputOfGenerateToHasjsIn,Formxss
//javascriptInsideIsNotWillTotagAndCharacterGoLineSolutionOf,SoAsToGoLinejsEscape

//ThisToIsForHasYou,OutputPointInjsIn thexssProblem,Should?
//HereSuch asResultGoLinehtmlOfCode,AlthoughCanSolutionXSSOfProblem,ButIsCodeOf,InJSInsideNotWillGoLine,WillLead toBeforeEndOfAchievementCanNoUse。
//SoAsInJSOfOutputPointShouldUse\ToCharacterGoLineEscape


if(isset($_GET['submit']) && $_GET['message'] !=null){
    $jsvar=$_GET['message'];
//    $jsvar=htmlspecialchars($_GET['message'],ENT_QUOTES);
    if($jsvar == 'tmac'){
        $html.="<img src='{$PIKA_ROOT_DIR}assets/images/nbaplayer/tmac.jpeg' />";
    }
}


?>

<div class="main-content" xmlns="http://www.w3.org/1999/html">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="xss.php">xss</a>
                </li>
                <li class="active">xssOnjsOutput</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="InputByOfGenerateToHasjavascriptIn,Such asIs。Inputtmac-_-">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <div id="xssr_main">
                <p class="xssr_title">which NBA player do you like?</p>
                <form method="get">
                    <input class="xssr_in" type="text" name="message" />

                    <input class="xssr_submit" type="submit" name="submit" value="submit" />
                </form>
                </br>
               <p id="fromjs"></p>
                <?php echo $html;?>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


<script>
    $ms='<?php echo $jsvar;?>';
    if($ms.length != 0){
        if($ms == 'tmac'){
            $('#fromjs').text('tmac,LookThatSmall..')
        }else {
//            alert($ms);
            $('#fromjs').text('NoSuch asNotToInSo..')
        }

    }


</script>


<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
