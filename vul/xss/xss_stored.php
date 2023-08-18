<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */


$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);

if ($SELF_PAGE = "xss_stored.php"){
    $ACTIVE = array('','','','','','','','active open','','','','active','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
}

$PIKA_ROOT_DIR =  "../../";
include_once $PIKA_ROOT_DIR.'header.php';

include_once $PIKA_ROOT_DIR."inc/config.inc.php";
include_once $PIKA_ROOT_DIR."inc/mysql.inc.php";


$link=connect();
$html='';
if(array_key_exists("message",$_POST) && $_POST['message']!=null){
    $message=escape($link, $_POST['message']);
    $query="insert into message(content,time) values('$message',now())";
    $result=execute($link, $query);
    if(mysqli_affected_rows($link)!=1){
        $html.="<p>Database，SubmitFailure！</p>";
    }
}


if(array_key_exists('id', $_GET) && is_numeric($_GET['id'])){

    //:AlthoughIsStoredxssOfPage,ButHereHavedeleteOfsqlInjection
    $query="delete from message where id={$_GET['id']}";
    $result=execute($link, $query);
    if(mysqli_affected_rows($link)==1){
        echo "<script type='text/javascript'>document.location.href='xss_stored.php'</script>";
    }else{
        $html.="<p id='op_notice'>ExceptFailure,PleaseAgainAndCheckDatabaseIsNoAlso!</p>";

    }

}


?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="xss.php">xss</a>
                </li>
                <li class="active">Storedxss</li>
            </ul><!-- /.breadcrumb -->

            <a href="#" style="float:right" data-container="body" data-toggle="popover" data-placement="bottom" title="tips(Click againOnceClose)"
               data-content="NoUseTip:ThisMessage boardOfIsCanAndOf,AlsoLineNot,Big!">
                PointOnceTip~
            </a>

        </div>
        <div class="page-content">

            <div id="xsss_main">
                <p class="xsss_title">IsOneMessage board：</p>
                <form method="post">
                    <textarea class="xsss_in" name="message"></textarea><br />
                    <input class="xsss_submit" type="submit" name="submit" value="submit" />
                </form>
                <div id="show_message">
                    <br />
                    <br />
                    <p class="line">Table：</p>
                    <?php echo $html;
                    $query="select * from message";
                    $result=execute($link, $query);
                    while($data=mysqli_fetch_assoc($result)){
                        echo "<p class='con'>{$data['content']}</p><a href='xss_stored.php?id={$data['id']}'>Except</a>";
                    }

                    echo $html;
                    ?>



                </div>
            </div>



        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->





<?php
include_once $PIKA_ROOT_DIR.'footer.php';
?>
