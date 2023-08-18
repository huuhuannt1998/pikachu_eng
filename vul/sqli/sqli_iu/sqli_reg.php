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

$html='';
if(isset($_POST['submit'])){
    if($_POST['username']!=null &&$_POST['password']!=null){
//      $getdata=escape($link, $_POST);//Escape

        //NoEscape,Lead toInjectionVulnerability,ClassTypeForinsert
        $getdata=$_POST;
        $query="insert into member(username,pw,sex,phonenum,email,address) values('{$getdata['username']}',md5('{$getdata['password']}'),'{$getdata['sex']}','{$getdata['phonenum']}','{$getdata['email']}','{$getdata['add']}')";
        $result=execute($link, $query);
        if(mysqli_affected_rows($link)==1){
            $html.="<p>Successful,PleaseReturn<a href='sqli_login.php'></a></p>";
        }else {
            $html.="<p>Failure,Please checkNextDatabaseIsNoAlso</p>";

        }
    }else{
        $html.="<p>NotCanForEmptyOh</p>";
    }
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
                <li class="active"></li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">

            <div id="reg_info">
                <form method="post">
                    <h1 class="reg_title">Welcome，PleaseWriteInformation!</h1>
                    <p class="reg_name">UseUser:<input class="r_username" type="text" name="username" placeholder="" /></p>
                    <p class="reg_name">Password:<input class="r_username" type="text" name="password" placeholder="" /></p>
                    <p class="reg_sex">:<input class="r_sex" type="text" name="sex"  /></p>
                    <p class="reg_phone">Mobile phone:<input class="r_phonenum" type="text" name="phonenum"  /></p>
                    <p class="reg_email">Address:<input class="r_email" type="text" name="email"  /></p>
                    <p class="reg_add">:<input class="r_add" type="text" name="add"  /></p>
                    <input class="sub" type="submit" name="submit" value="submit"/>
                </form>
            </div>

            <?php echo $html;?>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
