<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "ssrf.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="ssrf.php"></a>
                </li>
                <li class="active">Overview</li>
            </ul>
        </div>
        <div class="page-content">

         <b>SSRF(Server-Side Request Forgery:ServerEndPleasePleaseForge)</b>
         <p>ItsFormOfReasonBigAllIsDue to serviceEnd<b>ProvideHasFromOtherServerUseObtainDataOfAchievementCan</b>,But alsoNoToTargetAddressDoStrictFilterLimit</p>
            Lead toAttackPersonCanTransferEnter anyOfAddressComeLet laterEndServerToItsPleasePlease,AndReturnToTargetAddressPleasePleaseOfData<br>
            <br>
            DataFlow:AttackPerson----->Server---->TargetAddress<br>
            <br>
            According toBackgroundUseOfFunctionOfNotSame,CorrespondingOfImpactAndBenefitUseMethod andHaveNotOne
            <pre style="width: 500px;">
PHPInNextSurfaceFunctionOfUseNotWhenWillLead toSSRF:
file_get_contents()
fsockopen()
curl_exec()
            </pre><br>
            Such asResultOneToThroughBackgroundServerToUseUser("OrPre-embeddedInBeforeEndOfPleasePlease")OfAddressGoLineResourcesSourcePleasePlease,<b>ThenPleaseDoTargetAddressOfFilter</b>。
<br>
            <br>

            YouCanAccording to"SSRF"InsideOfProjectComeEngageUnderstandProblemOfReason

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
