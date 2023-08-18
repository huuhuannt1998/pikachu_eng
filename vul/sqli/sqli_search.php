<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "sqli_search.php"){
    $ACTIVE = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','active open','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR . 'header.php';

include_once $PIKA_ROOT_DIR."inc/config.inc.php";
include_once $PIKA_ROOT_DIR."inc/function.php";
include_once $PIKA_ROOT_DIR."inc/mysql.inc.php";

$link=connect();
$html1='';
$html2='';
if(isset($_GET['submit']) && $_GET['name']!=null){

    //HereNoDo，ToselectInsideHas
    $name=$_GET['name'];

    //HereOfChangeVolumeIs，To
    $query="select username,id,email from member where username like '%$name%'";
    $result=execute($link, $query);
    if(mysqli_num_rows($result)>=1){
        //:HereAlsoHavexss
        $html2.="<p class='notice'>UsernameInHave{$_GET['name']}OfEndResultSuch asNext：<br />";
        while($data=mysqli_fetch_assoc($result)){
            $uname=$data['username'];
            $id=$data['id'];
            $email=$data['email'];
            $html1.="<p class='notice'>username：{$uname}<br />uid:{$id} <br />email is: {$email}</p>";
        }
    }else{

        $html1.="<p class='notice'>0o。..NoSearchToYouInputOfInformation！</p>";
    }
}



?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="sqli.php">sqli</a>
                </li>
                <li class="active">SearchTypeInjection</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="%%">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">


            <div id="sqli_main">
                <p class="sqli_title">PleaseInputUsernameGoLineCheckFind<br />Such asResultNotUsername，InputUsernameOfOneSearchOfLook？</p>
                <form method="get">
                    <input class="sqli_in" type="text" name="name" />
                    <input class="sqli_submit" type="submit" name="submit" value="Search" />
                </form>
                <?php echo $html2;echo $html1;?>
            </div>



        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR . 'footer.php';

?>
