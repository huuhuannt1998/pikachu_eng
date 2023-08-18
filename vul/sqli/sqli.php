<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "sqli.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',);
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
                    <a href="sqli.php">sqli</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->



        </div>
        <div class="page-content">

            <div id="vul_info">
                <dl>
                    <dt class="vul_title">Sql Inject(SQLInjection)Overview</dt>
                    <dd class="vul_detail"><br />
                        <p style="color: red;">Oh,SQLInjection vulnerability，OfVulnerability。</p><br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InowaspOftop10Line，Injection vulnerabilityOneIsNameTheOneOfVulnerability，ItsInInjection vulnerabilityInsideWhenItsOfJustIsDatabaseInjection vulnerability。<br />
                        <b>OneAgainOfSQLInjection vulnerability，CanWillLead toOne！</b><br />
                        SQLInjection vulnerabilityToFormOfReasonIsInDataIn，BeforeEndOfDataTransferToBackgroundWhen，NoDoStrictOfJudge，Causing itsTransferOf“Data”ToSQLIn，ByWhenSQLOfOneHoldLine。
                        FromLead toDatabase（By、ByExcept、ServerPermission）。<br />
                    </dd>

                    <dd class="vul_detail">
                        InCodeWhen，GenerallyFromSuch asNextSurfaceOfStrategyComeSQLInjection vulnerability：<br />
                        1.ToTransferGoSQLInsideOfChangeVolumeGoLineFilter，NotCharacterTransfer；<br />
                        2.UseParameter（Parameterized Query Or Parameterized Statement）；<br />
                        3.AlsoHaveJustIs,BeforeHaveORMWillUseParameterSolutionInjectionProblem,ButItsAlsoProvideHas""OfMethod,SoAsUseWhenToAgain!
                    </dd>
                    <br />
                    <dd class="vul_detail">
                        SQLInjectionInOn，AlsoHaveWriteDetailedOfSQLInjection vulnerabilityOfText，HereJustNotInWriteHas。<br/>
                        YouCanThrough“Sql Inject”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>

                </dl>

            </div>




        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
