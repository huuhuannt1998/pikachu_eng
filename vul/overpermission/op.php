<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "op.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="op.php">over permission</a>
                </li>
                <li class="active">Overview</li>
            </ul><!-- /.breadcrumb -->


        </div>
        <div class="page-content">
            <div id="vul_info">
                <dd class="vul_detail">
                    Such asResultUseAUseUserOfPermissionBUseUserOfData，AOfPermissionSmallBOfPermission，Such asResultCanSuccessful，ThenNameOnFor。
                    VulnerabilityFormOfReasonIsBackgroundUseHas NotOfPermissionThenLead toOf。
                </dd>
                <dd class="vul_detail">
                    OneVulnerabilityInPermissionPage（ToOfPage）、、、CheckOfOf，WhenUseUserToPermissionPageOfInformationGoLineWhen，BackgroundToTo
                    ToWhenBeforeUseUserOfPermissionGoLine，LookItsIsNoOfPermission，FromGive，Such asResultOfThenSimpleSingleThenVulnerability。
                </dd>
                <dd class="vul_detail_1">
                    ，InInPermissionInShould：<br />
                    1.UseSmallPermissionThenToUseUserGoLine;<br />
                    2.Use（Strict）OfPermissionThen;<br />
                    3.UseBackgroundForGoLinePermissionJudge,NotJustUseBeforeEndTransferGoComeOf;<br />

                </dd>
                <dd class="vul_detail_1">
                    YouCanThrough“Over permission”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
                </dd>
                </dl>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->






<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
