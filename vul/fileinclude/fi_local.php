<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "fi_local.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','',
        'active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';



$html='';
if(isset($_GET['submit']) && $_GET['filename']!=null){
    $filename=$_GET['filename'];
    include "include/$filename";//ChangeVolumeTransferGoCome,NoDoOfSafetyLimit
//     //SafetyOfWrite,UseNameSingle，StrictOfFileName
//     if($filename=='file1.php' || $filename=='file2.php' || $filename=='file3.php' || $filename=='file4.php' || $filename=='file5.php'){
//         include "include/$filename";

//     }
}


?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="fileinclude.php">file include</a>
                </li>
                <li class="active">File</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="FirstHasSolutionOnceinclude()FunctionOfUseBar">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

            <div id=fi_main>
                <p class="fi_title">which NBA player do you like?</p>
                <form method="get">
                    <select name="filename">
                        <option value="">--------------</option>
                        <option value="file1.php">Kobe bryant</option>
                        <option value="file2.php">Allen Iverson</option>
                        <option value="file3.php">Kevin Durant</option>
                        <option value="file4.php">Tracy McGrady</option>
                        <option value="file5.php">Ray Allen</option>
                    </select>
                    <input class="sub" type="submit" name="submit" />
                </form>
                <?php echo $html;?>
            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
