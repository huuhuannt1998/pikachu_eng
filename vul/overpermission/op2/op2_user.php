<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "op2_user.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';
include_once $PIKA_ROOT_DIR.'inc/function.php';
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';

$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
if(!check_op2_login($link)){
    header("location:op2_login.php");
}

if(isset($_GET['logout']) && $_GET['logout'] == 1){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-3600,'/');
    header("location:op2_login.php");

}


?>



<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../op.php">Over Permission</a>
                </li>
                <li class="active">op2 user</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="WhenbossIsRight?">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <div id="admin_main">
                <p class="admin_title">WelcomeComeToBackgroundIn,YouOnlyHaveCheckLookPermission! | <a style="color:bule;" href="op2_user.php?logout=1"></a></p>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>UseName</td>
                        <td></td>
                        <td>Mobile phone</td>
                        <td></td>
                        <td>Address</td>
                    </tr>
                    <?php
                    $query="select * from member";
                    $result=execute($link, $query);
                    while ($data=mysqli_fetch_assoc($result)){
                        $html=<<<A
    <tr>
        <td>{$data['username']}</td>
        <td>{$data['sex']}</td>
        <td>{$data['phonenum']}</td>
        <td>{$data['email']}</td>
        <td>{$data['address']}</td>
    </tr>
A;

                        echo $html;
                    }

                    ?>


                </table>

            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->




<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
