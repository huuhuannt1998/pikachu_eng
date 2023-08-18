<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'inc/config.inc.php';
include_once $PIKA_ROOT_DIR.'inc/mysql.inc.php';

$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
if ($SELF_PAGE = "bf_client.php"){
    $ACTIVE = array('','active open','','','','active',"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

}

include_once $PIKA_ROOT_DIR.'header.php';

$link=connect();
$html="";

if(isset($_POST['submit'])){
    if($_POST['username'] && $_POST['password']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from users where username=? and password=md5(?)";
        $line_pre = $link->prepare($sql);


        $line_pre->bind_param('ss', $username, $password);

        if ($line_pre->execute()) {
            $line_pre->store_result();
            if ($line_pre->num_rows > 0) {
                $html .= '<p> login success</p>';

            } else {
                $html .= '<p> username or password is not exists～</p>';
            }

        } else {
            $html .= '<p>HoldLineError:' . $line_pre->errno . 'ErrorInformation:' . $line_pre->error . '</p>';
        }


    }else{
        $html .= '<p> please input username and password～</p>';
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
                <li class="active">Captcha bypass(on client)</li>

            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="CarefullyLookNext,ThisVerificationCodeIn the endIsWhat the heck?..LookLookBeforeEndJSSourceCode,Find somethingHasRight??">
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

        <form id="bf_client" method="post" action="bf_client.php" onsubmit="return validate();">
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
                            <input class="vcode" name="vcode" placeholder="VerificationCode" type="text" />
                            <i class="ace-icon fa fa-lock"></i>
                        </span>
                </label>

                </br>

                <label><input type="text" onclick="createCode()" readonly="readonly" id="checkCode" class="unchanged" style="width: 100px" /></label><br />

                <label><input class="submit"  name="submit" type="submit" value="Login" /></label>

        </form>
        <?php echo $html;?>


    </div><!-- /.widget-main -->

</div><!-- /.widget-body -->



</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->



<script language="javascript" type="text/javascript">
    var code; //InGlobal DefinitionVerificationCode
    function createCode() {
        code = "";
        var codeLength = 5;//VerificationCodeOfLength
        var checkCode = document.getElementById("checkCode");
        var selectChar = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');//SoHaveCandidate compositionVerificationCodeOfCharacter，WhenHoweverAlsoCanUseInTextOf

        for (var i = 0; i < codeLength; i++) {
            var charIndex = Math.floor(Math.random() * 36);
            code += selectChar[charIndex];
        }
        //alert(code);
        if (checkCode) {
            checkCode.className = "code";
            checkCode.value = code;
        }
    }

    function validate() {
        var inputCode = document.querySelector('#bf_client .vcode').value;
        if (inputCode.length <= 0) {
            alert("PleaseInputVerificationCode！");
            return false;
        } else if (inputCode != code) {
            alert("VerificationCodeInputError！");
            createCode();//BrushNewVerificationCode
            return false;
        }
        else {
            return true;
        }
    }


    createCode();
</script>

<?php
include_once $PIKA_ROOT_DIR.'footer.php';
?>
