<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "infoleak.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="infoleak.php">Sensitive information leakage</a>
                </li>
                <li class="active">Overview</li>
            </ul>
        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">Sensitive information leakageOverview</dt>
                    <dd class="vul_detail">
                        BackgroundPersonOfOrNotWhenOf，Lead toNotShouldByBeforeEndUseUserLookToOfDataByOfVisitTo。
                        ComparedSuch as：<br />
                        ---ThroughVisiturlNextOfDirectory，CanDirectoryNextOfFileTable;<br />
                        ---InputErrorOfurlParameterInformationInsideSystem、Middleware、OfOrOtherInformation;<br />
                        ---BeforeEndOfSourceCode（html,css,js）InsideHasInformation，ComparedSuch asBackgroundAddress、IntranetInterfaceInformation、AccountPasswordand so on;<br />


                    </dd>
                    <dd class="vul_detail">
                        ClassAsOn，WeForSensitive information leakage。Sensitive information leakageAlthoughOneByForComparedComparedOfVulnerability，ButInformationToToGiveAttackGoOneStepOfAttackProvideBigOfHelp,“”OfSensitive information leakageAlsoWillAgainOf。
                        ,InwebUseOfOn，ExceptHasToGoLineSafetyOfCodeWrite，AlsoToToInformationOf。

                    </dd>
                    <dd class="vul_detail_1">
                        YouCanThrough“i can see your abc”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
