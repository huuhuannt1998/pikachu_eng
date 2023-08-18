<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$PIKA_ROOT_DIR =  "../../";

include_once $PIKA_ROOT_DIR.'inc/config.inc.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';

$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
if ($SELF_PAGE = "bf_form.php"){
    $ACTIVE = array('','active open','','active',"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

}

include_once $PIKA_ROOT_DIR.'header.php';

$link=connect();
$html="";

//DictionaryTypeOfProblem,NoVerificationCode,NoOtherControl measures,CanBrute force cracking
if(isset($_POST['submit']) && $_POST['username'] && $_POST['password']){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from users where username=? and password=md5(?)";
    $line_pre = $link->prepare($sql);


    $line_pre->bind_param('ss',$username,$password);

    if($line_pre->execute()){
        $line_pre->store_result();
        if($line_pre->num_rows>0){
            $html.= '<p> login success</p>';

        } else{
            $html.= '<p> username or password is not exists～</p>';
        }

    } else{
        $html.= '<p>HoldLineError:'.$line_pre->errno.'ErrorInformation:'.$line_pre->error.'</p>';
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
                <li class="active">Based on the formOfBrute force cracking</li>

            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="HereOnetotalHaveThreeUseUser：
                admin/123456
                pikachu/000000
                test/abc123">
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

        <form method="post" action="bf_form.php">
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
<!--                    <button type="button" name="submit">-->
<!--                        <i class="ace-icon fa fa-key"></i>-->
<!--                        <span class="bigger-110">Login</span>-->
<!--                    </button>-->
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
