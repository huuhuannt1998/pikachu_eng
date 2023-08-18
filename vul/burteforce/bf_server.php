<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
if ($SELF_PAGE = "bf_server.php"){
    $ACTIVE = array('','active open','','','active',"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

}

include_once $PIKA_ROOT_DIR.'header.php';


$link=connect();


$html="";
if(isset($_POST['submit'])) {
    if (empty($_POST['username'])) {
        $html .= "<p class='notice'>UsernameNotCanForEmpty</p>";
    } else {
        if (empty($_POST['password'])) {
            $html .= "<p class='notice'>PasswordNotCanForEmpty</p>";
        } else {
            if (empty($_POST['vcode'])) {
                $html .= "<p class='notice'>VerificationCodeNotCanForEmptyOh！</p>";
            } else {
//              VerificationVerificationCodeIsNo
                if (strtolower($_POST['vcode']) != strtolower($_SESSION['vcode'])) {
                    $html .= "<p class='notice'>VerificationCodeInputErrorOh！</p>";
                    //ShouldInVerificationAfter completion,Destroy it$_SESSION['vcode']
                }else{

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $vcode = $_POST['vcode'];

                    $sql = "select * from users where username=? and password=md5(?)";
                    $line_pre = $link->prepare($sql);

                    $line_pre->bind_param('ss',$username,$password);

                    if($line_pre->execute()){
                        $line_pre->store_result();
                        //AlthoughBeforeSurfaceHasForEmptyJudge,But in the end,ButNoVerificationVerificationCode!!!
                        if($line_pre->num_rows()==1){
                            $html.='<p> login success</p>';
                        }else{
                            $html.= '<p> username or password is not exists～</p>';
                        }
                    }else{
                        $html.= '<p>HoldLineError:'.$line_pre->errno.'ErrorInformation:'.$line_pre->error.'</p>';
                    }
                }
            }
        }
    }
}



?>


<div class="main-content" xmlns="http://www.w3.org/1999/html">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="burteforce.php">Brute force cracking</a>
                </li>
                <li class="active">Captcha bypass(on server)</li>

            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="ThisVerificationCodeOneHaveEffectSigh!UseUserStillThatThreeDefaultUseUser.">
                PointOnceTip~
            </a>

        </div>
<div class="page-content">


<div class="bf_form">
    <div class="bf_form_main">
        <h4 class="header blue lighter bigger">
            <i class="ace-icon fa fa-coffee green"></i>
            Please Enter Your Information
        </h4>

        <form method="post" action="bf_server.php">
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
                </br>
                <label>
                        <span>
                            <input type="text" name="vcode" placeholder="VerificationCode" />
                            <i class="ace-icon fa fa-lock"></i>
                        </span>
                </label>
                </br>
                <label>
                    <img src="../../inc/showvcode.php" onclick="this.src='../../inc/showvcode.php?'+new Date().getTime();" />
                </label>


                <div class="space"></div>

                <div class="clearfix">
                    <label><input class="submit" name="submit" type="submit" value="Login" /></label>
                </div>

        </form>
        <?php echo $html;?>


    </div><!-- /.widget-main -->

</div><!-- /.widget-body -->



</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->



<?php
include_once $PIKA_ROOT_DIR.'footer.php';
?>
