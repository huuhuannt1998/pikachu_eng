<?php
/**
 * Created by PhpStorm.
 * User: hanlu220
 * Date: 2019/5/29
 * Time: 13:26
 */


/**
1.:CanSolutionAndCharacter
2.AttributeValue,CanSolutionCharacter
3.AttributeValuejavascript:ProtocolOf,src,hrefand so on,CanSolutionCharacter。
4.In theFunction,onmouseover=""AlsoIsAttributeValue,CanSolutionCharacter
5.scriptIn the:NotCanSolutionAndCharacter。

 *
 * According to HTML Of，script In theDataNotCan </。
 * CharacterNotCanBySolutionAlsoNotCan Use。SoAs，ThroughChangeGenerateOf JavaScript CodeComeAvoidProblem。
 */

$div = '';
$msg = '';
$in = '';


$url = '';
$name = '';
$print = '';

//001--------htmlPositionOutput
if (isset($_GET['div'])){
    //HereForOutputIsInOfdivInside,SoAsHerehtmlspecialCode
//    $div .= $_GET['div'];
    $div .= htmlspecialchars($_GET['div'],ENT_QUOTES);
}

//002-------OutputInOfAttribute
if (isset($_GET['msg'])){
    $msg .= $_GET['msg'];
//    :htmlCode
//    $msg .= htmlspecialchars($_GET['msg'],ENT_QUOTES);
}

//003------OutputInAttributeIn
if (isset($_GET['in'])){
    //HereCodeCanSolutionProblemRight?。AndNotCan：onmouseover="init('&#039;);alert(document.cookie)//')">
    //ProblemOfIn：onmouseoverIshtmlIn theAttribute，CanSolutionCharacter，AlthoughCodeHas，ButIsSolutionIsHoweverWillBySolution'
    //A good way is：FirstDojsEscape，InGoLinehtmlCode，InSolutionWhen：BySolutionCome，HoweverIsByEscapeOfjs
    $in .= htmlspecialchars($_GET['in'],ENT_QUOTES);
//    $in .= $_GET['in'];
}

//004-------OutputPointInOfAttributeIn，Such asaOfhref

//InputOfIsNoIshttp,https,Or/Ofurl .Then：\ACharacterInHeader。
function check_url($url){
    if (preg_match('/\Ahttp:/',$url) || preg_match('/\Ahttps:/',$url) || preg_match('#\A/#',$url)){
        return true;
    }else{
        return false;
    }
}

if (isset($_GET['url'])){
//    OutputInaOfhrefAttributeIn,DefaultStoreInxss,payload:aa"><script>alert(1)</script>
//    WhenUsehtmlspecialcharsGoLineEscape,HaveUseRight?? OnSurfaceOfpayloadNoHoldLineHas。
    $url .= htmlspecialchars($_GET['url'],ENT_QUOTES);
//    ButIsForhrefAttributeInUsejavascript:HoldLinejs,ProblemHoweverStoreIn,payload:javascript:alert(1)

//    $url .= $_GET['url'];

    //OfDo：FirstCheckIsNoIsurl，InGoLinehtmlCode
//    if (check_url($_GET['url'])){
//        $url .= htmlspecialchars($_GET['url']);
//    }

}

//005-------OutputPointInjsIn
//EscapeFunction:SoHaveOfCharacterString,Except,Number,.,-OutsideOfOtherGoLineEscape。
//EscapeForunicode(utf-8IsunicodeOfOne),unicodeCanInjsInCanBySolutionUse,
//SoHaveOfEscapeInBackgroundGoLineOutputToBefore

//CharacterOfCode
function unicode_escape($str){
    $u16 = mb_convert_encoding($str[0],'UTF-16');
    return preg_replace('/[0-9a-f]{4}/','\u$0',bin2hex($u16));
}
//WillAndNumberAlsoHave.-ExceptOfNextOfCharacter\uXXXXOfunicodeOfGoLineEscape
//SearchOneThen,AndUseOfFunctionGoLinecallback
function escape_js_string($input){
    return preg_replace_callback('/[^-\.0-9a-zA-Z]+/u','unicode_escape',$input);
}


if (isset($_GET['name'])){
//    $name .= $_GET['name'];

    //1：HerehtmlCodeCanRight??In factAlsoCan,JustIsOutputOfInjsInsideIsCharacter，
    //ButIsjsAndNotSolutionhtmlCharacter,AlthoughCodeHaspayloadOf，ButAlsoHasCode,ComparedSuch as"CharacterStringComparedCompared"JustNo。
//    $name .=htmlspecialchars($_GET['name'],ENT_QUOTES);

    //2：WillAndNumberAlsoHave.-ExceptOfNextOfCharacter\uXXXXOfunicodeOfGoLineEscape
    $name .= escape_js_string($_GET['name']);
}


?>

<html>
<body>
<div>xss fix demo</div>

<div>
    <!--    001-OutputPointInOfIn,NoSayOf,Code-->
    <!--    payload:<script>alert('xss')</script>-->
    <?php echo $div;?>
    <!--    ，OutputOfWhenDohtmlCode，Single-->
</div>


<form>
    <!--    002-OutputInAttributeIn，Attribute-->
    <!--    payload:a"><script>alert('xss')</script>    -->
    <input name="msg" value="<?php echo $msg;?>">


    <!--    003-OutputInFunctionOfAttributeIn-->
    <!--    payload:');alert(document.cookie)//       -->
    <input type="button" value="submit" onmouseover="init('<?php echo $in;?>')">
</form>


    <!--    004-OutputPointInAttributeIn,“javascript:Protocol” -->
    <!--    //OutputPointInIn,payload:javascript:alert(1) -->
<a href="<?php echo $url;?>">www.google.com</a>



<!--    005-OutputInjsIn-->
<script type="text/javascript">
    function init() {}

    // 005-OutputPointInjsIn,，，payload:xx';alert(1);//
    var echoxy = '<?php echo $name;?>';
//    alert(echoxy);
    if (echoxy === '>In'){
        alert("ComparedComparedSuccessful,YouOfCodeOf~");

    }


</script>

</body>
</html>
