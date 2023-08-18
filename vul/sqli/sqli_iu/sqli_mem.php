<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "sqli_insert.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR . "inc/config.inc.php";
include_once $PIKA_ROOT_DIR . "inc/function.php";
include_once $PIKA_ROOT_DIR . "inc/mysql.inc.php";


$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
if(!check_sqli_session($link)){
    echo "<script>alert('CanEnterMemberInOh')</script>";
    header("location:sqli_login.php");
}

if(isset($_GET['logout']) && $_GET['logout'] == 1){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',time()-3600,'/');
    header("location:sqli_login.php");
}

?>




<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../sqli.php">sqli</a>
                </li>
                <li class="active">MemberInformation</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">


            <?php
            //ThroughWhenBeforesession-nameToDatabaseCheck，AndDisplayItsCorrespondingInformation
            $username=$_SESSION['sqli']['username'];
            $query="select * from member where username='$username'";
            $result=execute($link, $query);
            $data=mysqli_fetch_array($result, MYSQL_ASSOC);
            $name=$data['username'];
            $sex=$data['sex'];
            $phonenum=$data['phonenum'];
            $add=$data['address'];
            $email=$data['email'];

            $html=<<<A
<div id="per_info">
   <h1 class="per_title">hello,{$name},WelcomeComeToPersonMemberIn | <a style="color:bule;" href="sqli_mem.php?logout=1"></a></h1>
   <p class="per_name">Name:{$name}</p>
   <p class="per_sex">:{$sex}</p>
   <p class="per_phone">Mobile phone:{$phonenum}</p>    
   <p class="per_add">:{$add}</p> 
   <p class="per_email">:{$email}</p> 
   <a class="edit" href="sqli_edit.php">ModifyPersonInformation</a>
</div>
A;
            echo $html;
            ?>



        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
