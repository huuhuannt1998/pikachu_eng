<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "unsafedownload.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="unsafedownload.php">unsafe filedownload</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">NotSafetyfile downloadOverview</dt>
                    <dd class="vul_detail">
                        FileNextAchievementCanInwebSystemOnAllWill，OneWeWhenClickNext，WillBackgroundOneNextPleasePlease，OneThisPleasePleaseWillOneToNextOfFileNameName，BackgroundInToPleasePlease
                        WillHoldLineNextCode，WillFileNameCorrespondingOfFileresponseGive，FromNext。
                        Such asResultBackgroundInToPleasePleaseOfFileName,WillItsGoNextFileOfPathInNotToItsGoLineSafetyJudgeOf，ThenCanWillNotSafetyfile downloadVulnerability。<br />

                        WhenSuch asResult AttackPersonSubmitOfNotIsOneOfOfFileName，IsOneOfPath(ComparedSuch as../../../etc/passwd),ThenHaveCanWillWillfile downloadNextCome。
                        FromLead toBackgroundInformation(PasswordFile、SourceCodeand so on)ByNext。

                    </dd>
                    <dd class="vul_detail">
                        SoAs，InFileNextAchievementCanWhen，Such asResultNextOfTargetFileIsBeforeEndTransferGoComeOf，ThenOneToToTransferGoComeOfFileGoLineSafety。
                        Remember：SoHaveBeforeEndOfDataAllIsNotSafetyOf，NotCanAs！
                    </dd>
                    <dd class="vul_detail">
                        YouCanThrough“Unsafe file download”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
