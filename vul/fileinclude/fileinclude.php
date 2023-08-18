<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "fileinclude.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="fileinclude.php">file include</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">File Inclusion(File inclusion vulnerability)Overview</dt>
                    <dd class="vul_detail">
                        File，IsOneAchievementCan。InInAllProvideHasOfFileFunction，ItsCanPersonInOneCodeFileIn（）In additionOneCodeFile。
                        ComparedSuch as InPHPIn，ProvideHas：<br />
                        include(),include_once()<br />
                        require(),require_once()<br />
                        FileFunction，FunctionInCodeInByUseTo。<br />
                    </dd>
                    <dd class="vul_detail">
                        BigNext，FileFunctionInOfCodeFileIsOf，AlsoNotWillSafetyProblem。
                        ButIs，HaveWhen，FileOfCodeFileByWriteHasOneChangeVolume，ThisChangeVolumeCanBeforeEndUseUserTransferGoCome，Next，Such asResultNoDoOfSafety，ThenCanWillFile inclusion vulnerability。
                        AttackWillOne“NotTo”OfFileFunctionHoldLine，From。
                        According toNotSameOfConfigurationEnvironment，File inclusion vulnerabilityForSuch asNext：<br />
                        <b>1.File inclusion vulnerability：</b>CanToServerOfFileGoLine，ServerOnOfFileAndNotIsAttackPersonSoCanOf，Next，AttackOfWillOne
                        OfSystemConfigurationFile，FromReadSystemInformation。WhenFile inclusion vulnerabilityWillEndOnefile uploadVulnerability，FromFormBigOf。<br />
                        <b>2.File inclusion vulnerability：</b>CanThroughurlAddressToOfFileGoLine，AttackPersonCanTransferEnter anyOfCode，NoSayOf，。
                    </dd>
                    <dd class="vul_detail">
                        ，InwebApplication systemOfAchievementCanOnVolumeNotToBeforeEndUseUserTransferChangeVolumeGiveFunction，Such asResultToDo，AlsoOneToDoStrictOfNameSingleStrategyGoLineFilter。
                    </dd>
                    <dd class="vul_detail_1">
                        YouCanThrough“File Inclusion”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
