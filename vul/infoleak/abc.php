<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "abc.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';


if(isset($_GET['logout']) && $_GET['logout'] == '1'){
    setcookie('abc[uname]','');
    setcookie('abc[pw]','');
    header("location:findabc.php");

}
?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="infoleak.php">Sensitive information leakage</a>
                </li>
                <li class="active">abc</li>
            </ul>


        </div>
        <div class="page-content">
            <a href="abc.php?logout=1"></a>
            <br />
            <br />

            <p>ThatOneOne，InOneOfWhen</p>

            <p>Have。，，AlsoInOneChangeOnOf</p>

            <p>Come，JustIsSlowOf，PersonOneNext，AlsoOne，ChangeHasOfOne</p>

            <p>IsOneWhenNoToOnePoint。WillNext，AlsoNotHas</p>
                                                            -----Small《When》

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
