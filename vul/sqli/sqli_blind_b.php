<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "sqli_blind_b.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','','','','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR . "inc/config.inc.php";
include_once $PIKA_ROOT_DIR . "inc/function.php";
include_once $PIKA_ROOT_DIR . "inc/mysql.inc.php";


$link=connect();

$html='';
if(isset($_GET['submit']) && $_GET['name']!=null){
    $name=$_GET['name'];//HereNoDo，ToselectInsideHas
    $query="select id,email from member where username='$name'";//HereOfChangeVolumeIsCharacterType，To
    //mysqi_queryNotError,StoreInInjection,AlsoNotJudge
    $result=mysqli_query($link, $query);//
//     $result=execute($link, $query);
    if($result && mysqli_num_rows($result)==1){
        while($data=mysqli_fetch_assoc($result)){
            $id=$data['id'];
            $email=$data['email'];
            $html.="<p class='notice'>your uid:{$id} <br />your email is: {$email}</p>";
        }
    }else{

        $html.="<p class='notice'>YouInputOfusernameNotStoreIn，PleaseAgainNewInput！</p>";
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
                <li class="active">boolianOfBlind injection</li>
            </ul><!-- /.breadcrumb -->
            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="admin/123456">
                PointOnceTip~
            </a>


        </div>
        <div class="page-content">
            <div id="sqli_main">
                <p class="sqli_title">what's your username?</p>
                <form method="get">
                    <input class="sqli_in" type="text" name="name" />
                    <input class="sqli_submit" type="submit" name="submit" value="Check" />
                </form>
                <?php echo $html;?>
            </div>





        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
