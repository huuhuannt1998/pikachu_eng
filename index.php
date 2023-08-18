<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 * */

include_once 'inc/config.inc.php';

include "header.php";

$html="";
try
{
    mysqli_connect(DBHOST,DBUSER,DBPW,DBNAME);
}
catch(Exception $e)
{
    $html.=
        "<p >
        <a href='install.php' style='color:red;'>
        Tip:Welcome to use,pikachuNot yet initialized，Click to initialize and install!
        </a>
    </p>";
}

?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active">System Introduction</li>
            </ul>
        </div>
<div class="page-content">
    <?php echo $html;?>
    <div id="intro_main">
        <p class="p1">
            PikachuIs a vulnerableWebApplication system，Here contains commonwebSecurity vulnerabilities。
            If you are aWebPenetration testing learner and you are worried about not having a suitable shooting range for practice，ThenPikachuMay be what you want。
        </p>
        <p class="p2">
        <h2 class="v_title">PikachuThe list of vulnerability types on it is as follows：</h2>
        <ul class="vul_list_info">
            <li>Burt Force(Brute force vulnerability)</li>
            <li>XSS(Cross-site scripting vulnerability)</li>
            <li>CSRF(Cross-site request forgery)</li>
            <li>SQL-Inject(SQLInjection vulnerability)</li>
            <li>RCE(Remote command/Code execution)</li>
            <li>Files Inclusion(File inclusion vulnerability)</li>
            <li>Unsafe file downloads(Insecure file download)</li>
            <li>Unsafe file uploads(Insecure file upload)</li>
            <li>Over Permisson(Privilege escalation vulnerability)</li>
            <li>../../../(Directory traversal)</li>
            <li>I can see your ABC(Sensitive information leakage)</li>
            <li>PHPDeserialization vulnerability</li>
            <li>XXE(XML External Entity attack)</li>
            <li>InsecureURLRedirect</li>
            <li>SSRF(Server-Side Request Forgery)</li>
            <li>More...(Take a look?..There are easter eggs!)</li>
            <li>The management tool provides a simplexssManagement background,For you to test phishing and fishingcookie~</li>
            <li>Subsequent updates will continue to bring in some new vulnerabilities,You are also welcome to submit vulnerability cases to me,Please pay attention to the latest version<a href="https://github.com/zhuifengshaonianhanlu">pikachu</a></li>
        </ul>
        </p>
        <p class="p3">
            Each CategoryVulnerabilityAccording toNotSameOfDifferent situations have been designedNotSameOfSubcategory<br/>
            At the same time,To make theseVulnerabilityChangeOfMore interesting,InPikachuOn the platform, eachVulnerabilitySome have been designedSmallOfScenario,ClickVulnerabilityTop right corner of the pageOf"Tip"You can see the help information。
        </p>
        <h2>How to install and use</h2>
        <p>
            PikachuUse the best language in the worldPHPDevelop-_-，The database used ismysql，So runPikachuYou need to install in advance"PHP+MYSQL+Middleware（Such asapache,nginxand so on）"OfBasic environment，RecommendInYouOfTest environment directlyUse
        Some integrated software to build these basic environments,ComparedSuch asXAMPP,WAMPand so on,As aDo securityOfPerson,These things toYouShould beNotWhat is difficult。Next:<br/>
        -->PutDownloadedOfpikachuFolder towebServer root directory;<br/>
        -->Modify according to actual conditionsinc/config.inc.phpInsideOfDatabase connection configuration;<br/>
        -->Visithttp://x.x.x.x/pikachu,There will be oneRedOfPassionTip"Welcome to use,pikachuNot yet initialized，Click to initialize and install!",Click to complete the installation。
        </p>

        <p class="p4">
            I forPikachuCreated aQQGroup(ID:532078894)，WelcomeJoin in and discuss with everyone。<br/>

            Such asIf you havePikachuWhatRecommendOr if you want to chat with me, you can send me an email：1061321987@qq.com。Thank you。
        </p>

        <h2>Remember</h2>
        <p>


            "Less is more,Slow is fast"

        </p>


    </div>


</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->



<?php
include "footer.php";
?>