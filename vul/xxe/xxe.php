<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xxe.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


?>



<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="xee.php"></a>
                </li>
                <li class="active">Overview</li>
            </ul>
        </div>
        <div class="page-content">

            <div class="vul info">
                XXE -"xml external entity injection"<br>
                "xmlOutsideInjectionVulnerability"。<br>
                OnceJustIs"AttackPersonThroughServerInjectionOfxml,FromServerOfConfigurationGoLineHoldLine,Lead toProblem"<br>
                AlsoJustIsSayEndReceiveAndSolutionHasComeUseUserEndOfxmlData,NoDoStrictOfSafety,FromLead toxmlOutsideInjection。<br>
                <br>
                OfxmlOf,OnHave,FirstCheckOnce。
                <br>
                InInsideCorrespondingOfSolutionxmlOfFunctionDefaultIsSolutionOutsideOf,FromAlsoJustAvoidHasThisVulnerability。<br>
                AsPHPFor,InPHPInsideSolutionxmlUseOfIslibxml,ItsIn≥2.9.0OfIn,DefaultIsSolutionxmlOutsideOf。<br>
                <br>
                ProvideOfIn,ForHasVulnerability,ThroughLIBXML_NOENTHasxmlOutsideSolution。


            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
