<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "rce.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR . "inc/config.inc.php";
include_once $PIKA_ROOT_DIR . "inc/function.php";
include_once $PIKA_ROOT_DIR . "inc/mysql.inc.php";





?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="rce.php">rce</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->



        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">RCE(remote command/code execute)Overview</dt>
                    <dd class="vul_detail">
                        RCEVulnerability，CanAttackPersonBackgroundServerInjectionSystemOrCode，FromBackgroundSystem。
                    </dd>
                    <dd class="vul_detail">
                        <b>SystemHoldLine</b><br/>
                        OneVulnerability，IsForApplication systemFromOnToGiveUseUserProvideOfOfInterface<br />
                        ComparedSuch asWeOf、、and so onOfwebSurfaceOn<br />
                        GenerallyGiveUseUserProvideOnepingOfwebSurface，UseUserFromwebSurfaceInputTargetIP，Submit，BackgroundWillToIPAddressGoLineOneping，AndReturnEndResult。
                        ，Such asResult，PersonInAchievementCanWhen，NoDoStrictOfSafety，ThenCanWillLead toAttackPersonThroughInterfaceSubmit“NotTo”Of，FromBackgroundGoLineHoldLine，FromBackgroundServer
                        <br />
                        <br />
                        InOfAll,BigVolumeOfSystemWillThrough""GoLine。
                        InOnToToWillSystemHoldLineOfVulnerability,NotOfInJustCanFindYouOfSystemOnce,WillHaveNotToOf""-_-
                    </dd>
                    <dd class="vul_detail">
                        <br />
                        <b>CodeHoldLine</b><br/>
                        SameOf,ForPlease,BackgroundHaveWhenAlsoWillPutUseUserOfInputForCodeOfOneGoLineHoldLine,AlsoJustHasCodeHoldLineVulnerability。
                        NotIsUseHasCodeHoldLineOfFunction,StillUseHasNotSafetyOfDeserializationand so onand so on。
                    </dd>
                    <dd class="vul_detail">
                        ，Such asResultToGiveBeforeEndUseUserProvideClassOfAPIInterface，OneToToInterfaceInputOfGoLineStrictOfJudge，ComparedSuch asStrictOfNameSingleStrategyWillIsOneComparedComparedOf。
                    </dd>
                    <dd class="vul_detail_1">
                        YouCanThrough“RCE”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
