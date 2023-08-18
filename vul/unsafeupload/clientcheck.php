<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "clientcheck.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';
include_once $PIKA_ROOT_DIR.'inc/uploadfunction.php';

$html='';
if(isset($_POST['submit'])){
//     var_dump($_FILES);
    $save_path='uploads';//InWhenBeforeDirectoryOneDirectory
    $upload=upload_client('uploadfile',$save_path);//UseFunction
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
                <li class="active">UserEndcheck</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="OneInBeforeEndDoOfSafetyAllIsNotOf">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="usu_main">
                <p class="title">HereOnlyOnTransferPictureo！</p>
                <form class="upload" method="post" enctype="multipart/form-data"  action="">
                    <input class="uploadfile" type="file"  name="uploadfile" onchange="checkFileExt(this.value)"/><br />
                    <input class="sub" type="submit" name="submit" value="OnTransfer" />
                </form>
                <?php
                echo $html;//OutputHasPath，Has
                ?>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->




<script>
    function checkFileExt(filename)
    {
        var flag = false; //
        var arr = ["jpg","png","gif"];
        //OnTransferFileOfExtendName
        var index = filename.lastIndexOf(".");
        var ext = filename.substr(index+1);
        //ComparedCompared
        for(var i=0;i<arr.length;i++)
        {
            if(ext == arr[i])
            {
                flag = true; //OneFindToOf，
                break;
            }
        }
        //Judge
        if(!flag)
        {
            alert("OnTransferOfFileNotToPlease，PleaseAgainNewChoose！");
            location.reload(true);
        }
    }
</script>


<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
