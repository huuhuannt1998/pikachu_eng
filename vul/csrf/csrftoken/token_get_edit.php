<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "csrf_get_edit.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');

}


$PIKA_ROOT_DIR =  "../../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR."inc/config.inc.php";
include_once $PIKA_ROOT_DIR."inc/function.php";
include_once $PIKA_ROOT_DIR."inc/mysql.inc.php";
$link=connect();
// JudgeIsIs logged in?，NoNotCanVisit
if(!check_csrf_login($link)){
//    echo "<script>alert('CanEnterMemberInOh')</script>";
    header("location:token_get_login.php");
}

$html1='';


if(isset($_GET['submit'])){
    if($_GET['sex']!=null && $_GET['phonenum']!=null && $_GET['add']!=null && $_GET['email']!=null && $_GET['token']==$_SESSION['token']){
        //Escape
        $getdata=escape($link, $_GET);
        $query="update member set sex='{$getdata['sex']}',phonenum='{$getdata['phonenum']}',address='{$getdata['add']}',email='{$getdata['email']}' where username='{$_SESSION['csrf']['username']}'";
        $result=execute($link, $query);
        //NoModify，ClickSubmit，AlsoModifySuccessful
        if(mysqli_affected_rows($link)==1 || mysqli_affected_rows($link)==0){
            header("location:token_get.php");
        }else {
            $html1.="<p>ModifyFailure,PleaseAgainNew</p>";

        }
    }
}
//Generatetoken
set_token();

?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="../csrf.php">CSRF</a>
                </li>
                <li class="active">CSRF Token</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="SourceCodeLookOnce,HaveOftoken,UseOfOf?">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <?php
            //ThroughWhenBeforesession-nameToDatabaseCheck，AndDisplayItsCorrespondingInformation
            $username=$_SESSION['csrf']['username'];
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
   <form method="get">
   <h1 class="per_title">hello,{$name},WelcomeComeToPersonMemberIn | <a style="color:bule;" href="token_get.php?logout=1"></a></h1>
   <p class="per_name">Name:{$name}</p>
   <p class="per_sex">:<input type="text" name="sex" value="{$sex}"/></p>
   <p class="per_phone">Mobile phone:<input class="phonenum" type="text" name="phonenum" value="{$phonenum}"/></p>    
   <p class="per_add">:<input class="add" type="text" name="add" value="{$add}"/></p> 
   <p class="per_email">:<input class="email" type="text" name="email" value="{$email}"/></p>
   <input type="hidden" name="token" value="{$_SESSION['token']}" />
   <input class="sub" type="submit" name="submit" value="submit"/>
   </form>
</div>
A;
            echo $html;
            echo $html1;

            ?>




        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
