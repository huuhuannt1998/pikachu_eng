<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "findabc.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';
include_once $PIKA_ROOT_DIR.'inc/function.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';


$link=connect();
$html='';
if(isset($_GET['submit'])){
    if($_GET['username']!=null && $_GET['password']!=null){
        $username=escape($link, $_GET['username']);
        $password=escape($link, $_GET['password']);



        $query="select * from member where username='$username' and pw=md5('$password')";
        $result=execute($link, $query);
        if(mysqli_num_rows($result)==1){
            $data=mysqli_fetch_assoc($result);
            setcookie('abc[uname]',$_GET['username'],time()+36000);
            setcookie('abc[pw]',md5($_GET['password']),time()+36000);
            //When，Generatecookie,10SmallWhenHaveEffect，OtherPageJudge
            header("location:abc.php");
        }else{
            $query_username = "select * from member where username='$username'";
            $res_user = execute($link,$query_username);
            if(mysqli_num_rows($res_user) == 1){
                $html.="<p class='notice'>YouInputOfPasswordError</p>";

            }else{
                $html.="<p class='notice'>YouInputOfAccountError</p>";
            }

        }
    }
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
                <li class="active">find abc</li>
            </ul>

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="Take a look,AllPointHas...">
                PointOnceTip~
            </a>
        </div>
        <div class="page-content">

            <div class="form">
                <div class="form_main">
                    <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-coffee green"></i>
                        Please Enter Your Information
                    </h4>

                    <form method="get">
                        <!--            <fieldset>-->
                        <label>
														<span>
															<input type="text" name="username" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                        </label>
                        </br>

                        <label>
														<span>
															<input type="password" name="password" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                        </label>


                        <div class="space"></div>

                        <div class="clearfix">
                            <label><input class="submit" name="submit" type="submit" value="Login" /></label>
                        </div>

                    </form>
                    <?php echo $html;?>


                </div><!-- Account:lili/123456-->

            </div><!-- /.widget-body -->


        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
