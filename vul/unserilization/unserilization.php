<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "unserilization.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
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
                    <a href="unserilization.php">PHPDeserialization</a>
                </li>
                <li class="active">Overview</li>
            </ul>
        </div>
        <div class="page-content">


            <p>InSolutionThisVulnerabilityBefore,YouToFirstEngageClearphpInserialize()，unserialize()Function。</p>
            <b>serialize()</b><br />
            SayPointJustIsPutOneToChangeCanTransferOfCharacterString,ComparedSuch asNextSurfaceIsOneTo:
            <pre>
    class S{
        public $test="pikachu";
    }
    $s=new S(); //CreateOneTo
    serialize($s); //PutThisToGoLine
    ToOfEndResultIsThisOf:O:1:"S":1:{s:4:"test";s:7:"pikachu";}
        O:Tableobject
        1:TableToNameLengthForOneCharacter
        S:ToOfNameName
        1:TableToInsideHaveOneChangeVolume
        s:DataClassType
        4:ChangeVolumeNameNameOfLength
        test:ChangeVolumeNameName
        s:DataClassType
        7:ChangeVolumeValueOfLength
        pikachu:ChangeVolumeValue
    </pre>

            <b>Deserializationunserialize()</b><br />
            <p>JustIsPutByOfCharacterStringAlsoForTo,HoweverInNextOfCodeInUse。</p>
            <pre>
    $u=unserialize("O:1:"S":1:{s:4:"test";s:7:"pikachu";}");
    echo $u->test; //ToOfEndResultForpikachu
    </pre>

            <p>AndDeserializationNoProblem,ButIsSuch asResultDeserializationOfIsUseUserCanOf,BackgroundNotWhenOfUseHasPHPIn theFunction,JustWillLead toSafetyProblem</p>
            <pre>
        OfFunction:
        __construct()WhenOneToCreateWhenByUse

        __destruct()WhenOneToWhenByUse

        __toString()WhenOneToByWhenOneCharacterStringUse

        __sleep() InToInByOnBeforeLine

        __wakeupWillInOnByUse

        Vulnerability:

        class S{
            var $test = "pikachu";
            function __destruct(){
                echo $this->test;
            }
        }
        $s = $_GET['test'];
        @$unser = unserialize($a);

        payload:O:1:"S":1:{s:4:"test";s:29:"<?php echo htmlspecialchars("<script>alert('xss')</script>");?>";}

    </pre>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
