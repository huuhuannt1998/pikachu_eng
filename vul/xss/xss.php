<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss.php"){
    $ACTIVE = array('','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

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
                    <a href="#">xss</a>
                </li>
                <li class="active">xssOverview</li>
            </ul><!-- /.breadcrumb -->

        </div>
        <div class="page-content">


            <div id="vul_info">
                <dl>
                    <dt class="vul_title">XSS（）Overview</dt>
                    <dd class="vul_detail">
                        Cross-Site Scripting SimpleNameFor“CSS”，ForAvoidBeforeEndTableOfWrite"CSS"，NameXSS。OneXSSCanForSuch asNextClassType：<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;1.XSS;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;2.StoredXSS;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;3.DOMTypeXSS;<br />
                    </dd>
                    <dd class="vul_detail">
                        <br />
                        XSSVulnerabilityOneByForwebVulnerabilityInComparedBigOfVulnerability，InOWASP TOP10OfNameInOneBeforeOfPosition。<br/>
                        XSSIsOneInBeforeEndEndOfVulnerability，SoAsItsOfToAlsoIsBeforeEndUseUser。<br/>
                        FormXSSVulnerabilityOfToReasonIsToInputAndOutputNoDoOf，Lead to“”OfCharacterOutputInBeforeEndWhenByWhenHaveEffectCodeSolutionHoldLineFrom。<br/>
                        InXSSVulnerabilityOfOn，GenerallyAdopt“ToInputGoLineFilter”And“OutputGoLineEscape”OfMethodGoLine:<br/>
                        &nbsp;&nbsp;InputFilter：ToInputGoLineFilter，NotCanLead toXSSAttackOfCharacterInput;<br />
                        &nbsp;&nbsp;OutputEscape：According toOutputPointOfPositionToOutputToBeforeEndOfGoLineWhenEscape;<br />
                    </dd>
                    <dd class="vul_detail_1">
                        <br />
                        YouCanThrough“Cross-Site Scripting”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                    </dd>
                </dl>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';

?>
