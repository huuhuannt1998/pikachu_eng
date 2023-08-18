<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "clientcheck.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';
include_once $PIKA_ROOT_DIR.'inc/uploadfunction.php';

$html='';
if(isset($_POST['submit'])){
//     var_dump($_FILES);
    $mime=array('image/jpg','image/jpeg','image/png');//MIMEClassType,HereOnlyIsToMIMEClassTypeDoHasJudge。
    $save_path='uploads';//InWhenBeforeDirectoryOneDirectory
    $upload=upload_sick('uploadfile',$mime,$save_path);//UseFunction
    if($upload['return']){
        $html.="<p class='notice'>FileOnTransferSuccessful</p><p class='notice'>FileKeepStoreOfPathFor：{$upload['new_path']}</p>";
    }else{
        $html.="<p class=notice>{$upload['error']}</p>";
    }
}


?>





<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="upload.php">unsafe upfileupload</a>
                </li>
                <li class="active">Endcheck</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="MIME typeHasSolutionOnce">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="usu_main">
                <p class="title">HereOnlyOnTransferPicture，NotToEngage！</p>
                <form class="upload" method="post" enctype="multipart/form-data"  action="">
                    <input class="uploadfile" type="file"  name="uploadfile" /><br />
                    <input class="sub" type="submit" name="submit" value="OnTransfer" />
                </form>
                <?php
                echo $html;//OutputHasPath，Has
                ?>
            </div>
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->






<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
