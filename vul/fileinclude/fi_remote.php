<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "fi_remote.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','',
        'active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';


$html1='';
if(!ini_get('allow_url_include')){
    $html1.="<p style='color: red'>warning:YouOfallow_url_includeNo,PleaseInphp.iniInHasVulnerability,Modify,AgainMiddleware!</p>";
}
$html2='';
if(!ini_get('allow_url_fopen')){
    $html2.="<p style='color: red;'>warning:YouOfallow_url_fopenNo,PleaseInphp.iniInHasVulnerability,AgainMiddleware!</p>";
}
$html3='';
if(phpversion()<='5.3.0' && !ini_get('magic_quotes_gpc')){
    $html3.="<p style='color: red;'>warning:YouOfmagic_quotes_gpcHas,PleaseInphp.iniInCloseHasVulnerability,AgainMiddleware!</p>";
}


//FileVulnerability,Tophp.iniOfConfigurationFileRelatedOfConfiguration
$html='';
if(isset($_GET['submit']) && $_GET['filename']!=null){
    $filename=$_GET['filename'];
    include "$filename";//ChangeVolumeTransferGoCome,NoDoOfSafetyLimit


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
                        <option value="include/file1.php">Kobe bryant</option>
                        <option value="include/file2.php">Allen Iverson</option>
                        <option value="include/file3.php">Kevin Durant</option>
                        <option value="include/file4.php">Tracy McGrady</option>
                        <option value="include/file5.php">Ray Allen</option>
                    </select>
                    <input class="sub" type="submit" name="submit" />
                </form>
                <?php
                echo $html1;
                echo $html2;
                echo $html3;
                echo $html;
                ?>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
