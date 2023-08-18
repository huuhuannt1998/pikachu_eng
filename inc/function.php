<?php 
//VerificationCode
function vcode($width=120,$height=40,$fontSize=30,$countElement=5,$countPixel=100,$countLine=4){
	header('Content-type:image/jpeg');
	$element=array('a','b','c','d','e','f','g','h','i','j','k','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
	$string='';
	for ($i=0;$i<$countElement;$i++){
		$string.=$element[rand(0,count($element)-1)];
	}
	$img=imagecreatetruecolor($width, $height);
	$colorBg=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	$colorBorder=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
	$colorString=imagecolorallocate($img,rand(10,100),rand(10,100),rand(10,100));
	imagefill($img,0,0,$colorBg);
	for($i=0;$i<$countPixel;$i++){
		imagesetpixel($img,rand(0,$width-1),rand(0,$height-1),imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200)));
	}
	for($i=0;$i<$countLine;$i++){
		imageline($img,rand(0,$width/2),rand(0,$height),rand($width/2,$width),rand(0,$height),imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200)));
	}
	//imagestring($img,5,0,0,'abcd',$colorString);
	imagettftext($img,$fontSize,rand(-5,5),rand(5,15),rand(30,35),$colorString,'../assets/fonts/ManyGifts.ttf',$string);
	imagejpeg($img);
	imagedestroy($img);
	return $string;
}

//OnBeforeOfVerificationCodeThere's a problem，AgainNewFrom the webOnSearchHasOneSimpleSingleOfVerificationCodeFunction，IsOf，From the webOnSearchOf。
function vcodex(){
	
	$string = "abcdefghijklmnopqrstuvwxyz0123456789";
    	$str = "";
    	for($i=0;$i<6;$i++){
        	$pos = rand(0,35);
        	$str .= $string[$pos];
    	}
    //session_start();
    //$_SESSION['img_number'] = $str;
	
	$img_handle = Imagecreate(80, 20);  //PictureBigSmall80X20
    	$back_color = ImageColorAllocate($img_handle, 255, 255, 255); //Background color（White）
    	$txt_color = ImageColorAllocate($img_handle, 0,0, 0);  //Text color（Black）
    
    //Add interference lines
    	for($i=0;$i<3;$i++)
    	{
        	$line = ImageColorAllocate($img_handle,rand(0,255),rand(0,255),rand(0,255));
        	Imageline($img_handle, rand(0,15), rand(0,15), rand(100,150),rand(10,50), $line);
    	}
    //Add interference pixels
    	for($i=0;$i<200;$i++) 
    	{
        	$randcolor = ImageColorallocate($img_handle,rand(0,255),rand(0,255),rand(0,255));
        	Imagesetpixel($img_handle, rand()%100 , rand()%50 , $randcolor);
    	}
	
	Imagefill($img_handle, 0, 0, $back_color);             //FillPictureBackground color
    	ImageString($img_handle, 28, 10, 0, $str, $txt_color);//HorizontalFillOneLineCharacterString
	
	ob_clean();   // ob_clean()ClearEmptyOutputSlowStoreArea    
    	header("Content-type: image/png"); //GenerateVerificationCodePicture    
    	Imagepng($img_handle);//DisplayPicture
	return $str;
	
}


//GenerateOnetoken,AsWhenBeforeMicrosecond time+One5PositionOfBeforeSuffix
function set_token(){
    if(isset($_SESSION['token'])){
       unset($_SESSION['token']);
    }
    $_SESSION['token']=str_replace('.','',uniqid(mt_rand(10000,99999),true));
}




//RedirectPage
function skip($notice,$url){
$html=<<<A
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="2;URL={$url}" />
<title>notice</title>
<link rel="stylesheet" type="text/css" href="../../../style/header.css"/>
</head>
<body>
<p id='op_notice'>{$notice} | <a href='{$url}'>ClickQuick return</a></p>
</body>
</html>
A;
echo $html;
exit();
}

//InVisitOnePageWhen，FirstVerificationIsIs logged in?,csrfInside，UseOfIssessionVerification
function check_csrf_login($link){
    if(isset($_SESSION['csrf']['username']) && isset($_SESSION['csrf']['password'])){
        $query="select * from member where username='{$_SESSION['csrf']['username']}' and sha1(pw)='{$_SESSION['csrf']['password']}'";
        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}


//InVisitOnePageWhen，FirstVerificationIsIs logged in?,sqliOfinsert,updateProblemInside，UseOfIssessionVerification
function check_sqli_session($link){
    if(isset($_SESSION['sqli']['username']) && isset($_SESSION['sqli']['password'])){
        $query="select * from member where username='{$_SESSION['sqli']['username']}' and sha1(pw)='{$_SESSION['sqli']['password']}'";
        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}


//InVisitOnePageWhen，FirstVerificationIsIs logged in?,sqliInside，UseOfIscookieVerification
function check_sqli_login($link){
    if(isset($_COOKIE['ant']['uname']) && isset($_COOKIE['ant']['pw'])){
        //HereSuch asResultNotToObtainOfcookieGoLineEscape，ThenWillStoreInSQLInjection vulnerability，AlsoWillLead toVerificationByBypass
        //$username=escape($link, $_COOKIE['ant']['username']);
        //$password=escape($link, $_COOKIE['ant']['password']);
        $username=$_COOKIE['ant']['uname'];
        $password=$_COOKIE['ant']['pw'];


        $query="select * from users where username='$username' and sha1(password)='$password'";

        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            $data=mysqli_fetch_assoc($result);
            return $data['id'];
        }else{
            return false;
        }
    }else{
        return false;
    }
}

/*xssInsideOflogincheck*/
function check_xss_login($link){
    if(isset($_COOKIE['ant']['uname']) && isset($_COOKIE['ant']['pw'])){
        //HereSuch asResultNotToObtainOfcookieGoLineEscape，ThenWillStoreInSQLInjection vulnerability，AlsoWillLead toVerificationByBypass
        $username=escape($link, $_COOKIE['ant']['uname']);
        $password=escape($link, $_COOKIE['ant']['pw']);
//         $username=$_COOKIE['ant']['uname'];
//         $password=$_COOKIE['ant']['pw'];
        $query="select * from users where username='$username' and sha1(password)='$password'";
        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            $data=mysqli_fetch_assoc($result);
            return $data['id'];
        }else{
            return false;
        }
    }else{
        return false;
    }
}
/*op1Ofcheck login*/
function check_op_login($link){
    if(isset($_SESSION['op']['username']) && isset($_SESSION['op']['password'])){
        $query="select * from member where username='{$_SESSION['op']['username']}' and sha1(pw)='{$_SESSION['op']['password']}'";
        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

/*op2Ofcheck login*/
function check_op2_login($link){
    if(isset($_SESSION['op2']['username']) && isset($_SESSION['op2']['password'])){
        $query="select * from users where username='{$_SESSION['op2']['username']}' and sha1(password)='{$_SESSION['op2']['password']}'";
        $result=execute($link,$query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
?>
