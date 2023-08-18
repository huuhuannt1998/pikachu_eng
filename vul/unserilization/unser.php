<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "unser.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


class S{
    var $test = "pikachu";
    function __construct(){
        echo $this->test;
    }
}


//O:1:"S":1:{s:4:"test";s:29:"<script>alert('xss')</script>";}
$html='';
if(isset($_POST['o'])){
    $s = $_POST['o'];
    if(!@$unser = unserialize($s)){
        $html.="<p>Big,ComePointPointOf!</p>";
    }else{
        $html.="<p>{$unser->test}</p>";
    }

}
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

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstPutPHPAndDeserializationEngageUnderstandHasInCome">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">
            <form method="post">
                <p>IsOneDataOfapi:
                    <input type="text" name="o" />
                    <input type="submit" value="Submit">

            </form>
            <?php echo $html;?>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>