<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "burteforce.php"){
    $ACTIVE = array('','active open','active',"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

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
                    <a href="burteforce.php">Brute force cracking</a>
                </li>
                <li class="active">Burte ForceOverview</li>
            </ul><!-- /.breadcrumb -->

        </div>
<div class="page-content">


<div id="vul_info">
    <dl>
        <dt class="vul_title">Burte Force（Brute force cracking）Overview</dt>
        <dd class="vul_detail">
            “Brute force cracking”Is an attack tool，InwebAttackIn，GenerallyUseThis means for the application systemOfAuthenticationInformationGoLineObtain。
            The process isUseBigVolumeOfAuthenticationInformationInAuthenticationInterfaceGoLineTry to log in，Until the correctOfEndResult。
            ForHasImproveEffectRate，Brute force crackingGenerallyUseWith a dictionaryOfTools for automated operations。
        </dd>
        <dd class="vul_detail">
            TheoryOnComeSay，BigMost systemsAllIsCanByBrute force crackingOf，OnlyToAttackPersonHaveStrong enoughBigOfComputational ability and time，SoAsDeterminedOneSystemIsNoStoreInBrute force crackingVulnerability，Its conditionsAlsoNotIs absoluteOf。
            WeSayOnewebApplication systemStoreInBrute force crackingVulnerability，Generally refers to thewebApplication systemNoAdoptOrAdoptHasComparedWeakerOfAuthenticationSafetyStrategy，Causing itsByBrute force crackingOf“Possibility”ChangeOfComparedHigher。
            HereOfAuthenticationSafetyStrategy, Include：</dd>
        <dd class="vul_detail_1">

            1.Whether to require usersSettingComplexOfPassword；<br />
            2.IsNoevery timeAuthenticationAllUseSafetyOfVerificationCode（Think about itYouWhen buying a train ticket, inputOfVerificationCode～）OrMobile phoneotp；<br />
            3.Whether to try to log inOfLineForGoLineJudgeAndLimit（Such as：Continuous5Wrong login times，GoLineAccountLockOrIPAddressLockand so on）；<br />
            4.IsNoAdoptHasTwo-factorAuthentication；<br />
            ...and so onand so on。<br />


            MillionsNotToSmallLookBrute force crackingVulnerability,ToToThis simpleSingleRudeOfAttackMethodBringComeOfEffectResultExceeds expectationsOf!<br />

            <br />

            YouCanThrough“BurteForce”CorrespondingOfTest column，ComeGoOneStepOfHasSolve thisVulnerability。
        </dd>

            <br/>
            <p style="color:dimgrey; font-size: 18px">FromComeNoWhich eraOfHackers are as keen on guessing as they are todayPassword  ---Ostrovsky</p>

    </dl>
</div>

</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->


<?php
include_once $PIKA_ROOT_DIR.'footer.php';
?>
