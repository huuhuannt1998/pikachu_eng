<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "csrf.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

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
                    <a href="#">CSRF</a>
                </li>
                <li class="active">CSRFOverview</li>
            </ul><!-- /.breadcrumb -->

        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">CSRF(Cross-site request forgery)Overview</dt>
                    <dd class="vul_detail">
                        Cross-site request forgery SimpleNameFor“CSRF”，InCSRFOfAttackScenarioInAttackPersonWillForgeOnePleasePlease（ThisPleasePleaseOneIsOne），HoweverTargetUseUserGoLineClick，UseUserOneClickHasThisPleasePlease，AttackJustHas。SoAsCSRFAttackAlsoFor"one click"Attack。
                        PersonEngageNotClearCSRFOf，HaveWhenWillWillItsAndXSS,HavePersonWillWillItsAndProblemForOne,AllIsToNoEngageClearLead toOf。<br/>
                        HereOneScenarioSolutionOnce，CanHelpYouSolution。<br />
                        <b>ScenarioPlease：</b><br />SmallToModifyBigIntianxiewww.xx.comOnWriteOfMemberAddress。<br />
                        <b>FirstLookNextBigIsSuch asModifyOfPasswordOf：</b><br />---ModifyMemberInformation，SubmitPleasePlease---ModifySuccessful。<br />
                        SoAsSmallToModifyBigOfInformation，ToHave：1，Permission 2，ModifyPersonInformationOfPleasePlease。<br />
                    <dd class="vul_detail">
                        ButIsBigNotWillPutxxxOfAccountPasswordSmall，ThatSmall？<br />
                        IsTowww.xx.comOnHasOneOfAccount，HoweverModifyHasOnceOfPersonInformation（ComparedSuch as：E-mailAddress），ModifyOfPleasePleaseIs：<br />
                        【http://www.xxx.com/edit.php?email=xiaohei@88.com&Change=Change】<br />
                        Is，HasOne：PutThisOnce，InSmallxxx，GoLineClick，SmallClickThis，PersonInformationJustByModifyHas,SmallJustHasAttackOf。<br />
                    </dd>
                    <dd class="vul_detail">
                        <b>ForSmallOfCan。HaveSuch asNextPoint：</b><br />
                        1.www.xxx.comThisInUseUserModifyPersonOfInformationWhenNoOf，Lead toThisPleasePleaseByForge;<br />
                        ---，WeJudgeOneIsNoStoreInCSRFVulnerability，In factJustIsJudgeItsToInformation（ComparedSuch asPasswordand so onInformation）Of()IsNoByForge。<br />
                        2.SmallClickHasSmallGiveOf，AndThisWhenSmallInOn;<br />
                        ---Such asResultSmallSafety，NotClickNot，ThenAttackNotWillSuccessful，OrSmallClickHas，ButSmallWhenAndNo，AlsoNotWillSuccessful。<br />
                        ---，ToSuccessfulOneCSRFAttack，To“When，Benefit，PersonAnd”Of。<br />
                        WhenHowever，Such asResultSmallFirstInxxxOfSuch asResultHasOneXSSVulnerability，ThenSmallCanWillDo：
                        SmallVisitHasXSS（cookieOf）OfPage，SmallIn，SmallToSmallOfcookie，HoweverSmallBenefitToSmallOfBackground，SmallModifySmallOfRelatedInformation。<br />
                        ---SoAsOnSurfaceComparedOnce，JustCanLookCSRFXSSOfArea：CSRFIsUseUserOfPermissionAttack，AttackPersonAndNoToUseUserOfPermission，XSSIsToHasUseUserOfPermission，However。
                    </dd>

                    <dd class="vul_detail">
                        ，Such asResultToCSRFAttack，ThenToToInformationOfCorrespondingOfSafety，ByForgeOf，FromLead toCSRF。ComparedSuch as：<br />
                        --ToInformationOfSafetyOftoken；<br />
                        --ToInformationOfSafetyOfVerificationCode；<br />
                        --ToInformationOfSafetyOfFlow，ComparedSuch asModifyPasswordWhen，ToFirstPasswordand so on。<br />

                        <br />
                        <p>Such asResultYouNoRead,NotTo,PleaseReadOne</p>

                    </dd>
                    <dd class="vul_detail">
                        YouCanThrough“Cross-site request forgery”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
