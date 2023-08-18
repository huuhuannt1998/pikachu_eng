<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "op2_admin_edit.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';
include_once $PIKA_ROOT_DIR.'inc/function.php';
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';

$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
//HereOnlyIsVerificationHas，AndNoVerification，SoAsStoreInProblem。
if(!check_op2_login($link)){
    header("location:op2_login.php");
    exit();
}
if(isset($_POST['submit'])){
    if($_POST['username']!=null && $_POST['password']!=null){//UsernamePassword
        $getdata=escape($link, $_POST);//Escape
        $query="insert into member(username,pw,sex,phonenum,email,address) values('{$getdata['username']}',md5('{$getdata['password']}'),'{$getdata['sex']}','{$getdata['phonenum']}','{$getdata['email']}','{$getdata['address']}')";
        $result=execute($link, $query);
        if(mysqli_affected_rows($link)==1){//JudgeIsNo
            header("location:op2_admin.php");
        }else {
            $html.="<p>ModifyFailure,Please checkNextDatabaseIsNotIsStillOf</p>";

        }
    }
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
                <li class="active">op2 admin edit</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="WhenbossIsRight?">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="edit_main">
                <p class="edit_title">hi,<?php if($_SESSION['op2']['username']){echo $_SESSION['op2']['username'];} ?>,WelcomeComeToBackgroundIn | <a style="color:bule;" href="op2_admin_edit.php?logout=1"></a>|<a href="op2_admin.php">Toadmin</a></p>

                <form class="from_main" method="post">
                    <label>UseUser:<br /><input type="text" name="username" placeholder=""/></label><br />
                    <label>Password:<br /><input type="password" name="password" placeholder=""/></label><br />
                    <label>:<br /><input type="text" name="sex" /></label><br />
                    <label>:<br /><input type="text" name="phonenum" /></label><br />
                    <label>:<br /><input type="text" name="email" /></label><br />
                    <label>Address:<br /><input type="text" name="address" /></label><br />
                    <input class="sub" type="submit" name="submit" value="Create" />
                </form>


            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->




<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
