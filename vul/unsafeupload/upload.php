<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "upload.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';


?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="upload.php">unsafe upfileupload</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">NotSafetyfile uploadVulnerabilityOverview</dt>
                    <dd class="vul_detail">
                        FileOnTransferAchievementCanInwebApplication system，ComparedSuch asOfWhenToOnTransferHeader、OnTransferand so onand so on。WhenUseUserClickOnTransferButton，BackgroundWillToOnTransferOfFileGoLineJudge
                        ComparedSuch asIsNoIsOfClassType、SuffixName、BigSmalland so onand so on，HoweverWillItsOfFormatGoLineAgainNameStorageInOfDirectory。
                        Such asResultSayBackgroundToOnTransferOfFileNoGoLineOfSafetyJudgeOrJudgeNot，ThenAttackCanWillOnTransferOneOfFile，ComparedSuch asOne，FromLead toBackgroundServerBywebshell。
                    </dd>
                    <dd class="vul_detail">
                        SoAs，InFileOnTransferAchievementCanWhen，OneToToTransferGoComeOfFileGoLineStrictOfSafety。ComparedSuch as：<br />
                        --VerificationFileClassType、SuffixName、BigSmall;<br />
                        --VerificationFileOfOnTransferMethod;<br />
                        --ToFileGoLineOneComplexOfAgainName;<br />
                        --NotToFileOnTransferOfPath;<br />
                        --and so onand so on...<br />
                    </dd>

                    <dd class="vul_detail">
                        YouCanThrough“Unsafe file upload”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
