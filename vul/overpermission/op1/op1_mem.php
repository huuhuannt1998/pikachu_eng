<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "op1_login.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}
$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';
include_once $PIKA_ROOT_DIR.'inc/function.php';
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';

$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
if(!check_op_login($link)){
    header("location:op1_login.php");
}
$html='';
if(isset($_GET['submit']) && $_GET['username']!=null){
    //NoUsesessionCome,IsUseOfTransferGoComeOfValue，PermissionProblem,HereShouldGoLine
    $username=escape($link, $_GET['username']);
    $query="select * from member where username='$username'";
    $result=execute($link, $query);
    if(mysqli_num_rows($result)==1){
        $data=mysqli_fetch_assoc($result);
        $uname=$data['username'];
        $sex=$data['sex'];
        $phonenum=$data['phonenum'];
        $add=$data['address'];
        $email=$data['email'];

        $html.=<<<A
<div id="per_info">
   <h1 class="per_title">hello,{$uname},YouOfInformationSuch asNext：</h1>
   <p class="per_name">Name:{$uname}</p>
   <p class="per_sex">:{$sex}</p>
   <p class="per_phone">Mobile phone:{$phonenum}</p>    
   <p class="per_add">:{$add}</p> 
   <p class="per_email">:{$email}</p> 
</div>
A;
    }
}


if(isset($_GET['logout']) && $_GET['logout'] == 1){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-3600,'/');
    header("location:op1_login.php");

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
                <li class="active">op1 member</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="HereCanCheckPersonOfInformationRight??">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">
            <div id="mem_main">
                <p class="mem_title">WelcomeComeToPersonInformationIn  | <a style="color:bule;" href="op1_mem.php?logout=1"></a></p>
                <form class="msg1" method="get">
                    <input type="hidden" name="username" value="<?php echo $_SESSION['op']['username']; ?>" />
                    <input type="submit" name="submit" value="ClickCheckLookPersonInformation" />
                </form>
                <?php echo $html;?>

            </div>


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->






<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
