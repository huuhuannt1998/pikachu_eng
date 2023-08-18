<?php
//Client front-end verificationOfBackgroundFunction
function upload_client($key,$save_path){
    $arr_errors=array(
        1=>'OnTransferOfFileExceeded php.iniIn upload_max_filesize Option limitOfValue',
        2=>'OnTransferFileOfBigSmallExceeded HTML TableSingleIn MAX_FILE_SIZE Option specifiedOfValue',
        3=>'FileOnly part isOnTransfer',
        4=>'NoFileByOnTransfer',
        6=>'FindNotTemporaryFileClip',
        7=>'FileWrite inFailure'
    );
    if(!isset($_FILES[$key]['error'])){
        $return_data['error']='PleaseChooseOnTransferFile！';
        $return_data['return']=false;
        return $return_data;
    }
    if ($_FILES[$key]['error']!=0) {
        $return_data['error']=$arr_errors[$_FILES[$key]['error']];
        $return_data['return']=false;
        return $return_data;
    }
    //Create a new saveFileOfDirectory
    if(!file_exists($save_path)){
        if(!mkdir($save_path,0777,true)){
            $return_data['error']='OnTransferFileSave directoryCreateFailure，Please checkPermission!';
            $return_data['return']=false;
            return $return_data;
        }
    }
    $save_path=rtrim($save_path,'/').'/';//Add a slash to the path
    if(!move_uploaded_file($_FILES[$key]['tmp_name'],$save_path.$_FILES[$key]['name'])){
        $return_data['error']='TemporaryFileMoveFailure，Please checkPermission!';
        $return_data['return']=false;
        return $return_data;
    }
    //Such asResultAsOnAllThroughHas，ThenReturn theseValue，StorageOfPath，NewOfFileName（NotTo expose）
    $return_data['new_path']=$save_path.$_FILES[$key]['name'];
    $return_data['return']=true;
    return $return_data;

}

//OnlyThroughMIMEClassTypeVerificationHasOncePictureClassType，OtherOfNoVerification,upsafe_upload_check.php
function upload_sick($key,$mime,$save_path){
    $arr_errors=array(
        1=>'OnTransferOfFileExceeded php.iniIn upload_max_filesize Option limitOfValue',
        2=>'OnTransferFileOfBigSmallExceeded HTML TableSingleIn MAX_FILE_SIZE Option specifiedOfValue',
        3=>'FileOnly part isOnTransfer',
        4=>'NoFileByOnTransfer',
        6=>'FindNotTemporaryFileClip',
        7=>'FileWrite inFailure'
    );
    if(!isset($_FILES[$key]['error'])){
        $return_data['error']='PleaseChooseOnTransferFile！';
        $return_data['return']=false;
        return $return_data;
    }
    if ($_FILES[$key]['error']!=0) {
        $return_data['error']=$arr_errors[$_FILES[$key]['error']];
        $return_data['return']=false;
        return $return_data;
    }
    //VerifyMIMEClassType
    if(!in_array($_FILES[$key]['type'], $mime)){
        $return_data['error']='OnTransferOfPictureOnlyCanIsjpg,jpeg,pngFormatOf！';
        $return_data['return']=false;
        return $return_data;
    }
    //Create a new saveFileOfDirectory
    if(!file_exists($save_path)){
        if(!mkdir($save_path,0777,true)){
            $return_data['error']='OnTransferFileSave directoryCreateFailure，Please checkPermission!';
            $return_data['return']=false;
            return $return_data;
        }
    }
    $save_path=rtrim($save_path,'/').'/';//Add a slash to the path
    if(!move_uploaded_file($_FILES[$key]['tmp_name'],$save_path.$_FILES[$key]['name'])){
        $return_data['error']='TemporaryFileMoveFailure，Please checkPermission!';
        $return_data['return']=false;
        return $return_data;
    }
    //Such asResultAsOnAllThroughHas，ThenReturn theseValue，StorageOfPath，NewOfFileName（NotTo expose）
    $return_data['new_path']=$save_path.$_FILES[$key]['name'];
    $return_data['return']=true;
    return $return_data;
    
}

//GoLineHasStrictOfVerification
function upload($key,$size,$type=array(),$mime=array(),$save_path){
    $arr_errors=array(
        1=>'OnTransferOfFileExceeded php.iniIn upload_max_filesize Option limitOfValue',
        2=>'OnTransferFileOfBigSmallExceeded HTML TableSingleIn MAX_FILE_SIZE Option specifiedOfValue',
        3=>'FileOnly part isOnTransfer',
        4=>'NoFileByOnTransfer',
        6=>'FindNotTemporaryFileClip',
        7=>'FileWrite inFailure'
    );
//     var_dump($_FILES);
    if(!isset($_FILES[$key]['error'])){
        $return_data['error']='PleaseChooseOnTransferFile！';
        $return_data['return']=false;
        return $return_data;
    }
    if ($_FILES[$key]['error']!=0) {
        $return_data['error']=$arr_errors[$_FILES[$key]['error']];
        $return_data['return']=false;
        return $return_data;
    }
    //VerificationOnTransferMethod
    if(!is_uploaded_file($_FILES[$key]['tmp_name'])){
        $return_data['error']='YouOnTransferOfFileNotIsThrough HTTP POSTMethodOnTransferOf！';
        $return_data['return']=false;
        return $return_data;
    }
    //Get suffixName，Such asResultNotStoreInSuffixName，ThenWillChangeVolumeSettingForEmpty
    $arr_filename=pathinfo($_FILES[$key]['name']);
    if(!isset($arr_filename['extension'])){
        $arr_filename['extension']='';
    }
    //FirstVerificationSuffixName
    if(!in_array(strtolower($arr_filename['extension']),$type)){//Converted toSmallWrite，InComparedCompared
        $return_data['error']='OnTransferFileOfSuffixNameNotCanForEmpty，And mustIs'.implode(',',$type).'In theOne';
        $return_data['return']=false;
        return $return_data;
    }
    
    //VerificationMIMEClassType，MIMEClassTypeCanByBypass
    if(!in_array($_FILES[$key]['type'], $mime)){
        $return_data['error']='YouOnTransferOfIs a fake picture，NotWant to deceive mexxx！';
        $return_data['return']=false;
        return $return_data;
    }
    //ThroughgetimagesizeTo read the pictureOfAttribute，Thus judge isNotIs realOfPicture，StillCanByBypassOf
    if(!getimagesize($_FILES[$key]['tmp_name'])){
        $return_data['error']='YouOnTransferOfIs a fake picture，NotWant to deceive me！';
        $return_data['return']=false;
        return $return_data;
    }
    //VerificationBigSmall
    if($_FILES[$key]['size']>$size){
        $return_data['error']='OnTransferFileOfBigSmallNotCan exceed'.$size.'byte(500kb)';
        $return_data['return']=false;
        return $return_data;
    }

    //PutOnTransferOfFileGive himEngageOneNewOfPath saved
    if(!file_exists($save_path)){
        if(!mkdir($save_path,0777,true)){
            $return_data['error']='OnTransferFileSave directoryCreateFailure，Please checkPermission!';
            $return_data['return']=false;
            return $return_data;
        }
    }
    //GenerateOneNewOfFileName，AndWillNewOfFileNameAndOnBeforeObtainOfExtendNameCloseCome，FormFileNameName
    $new_filename=str_replace('.','',uniqid(mt_rand(100000,999999),true));
    if($arr_filename['extension']!=''){
        $arr_filename['extension']=strtolower($arr_filename['extension']);//SmallWriteKeepStore
        $new_filename.=".{$arr_filename['extension']}";
    }
    //WilltmpDirectoryInsideOfFileCopy to specifiedDirectoryNextAndUseNewOfNameName
    $save_path=rtrim($save_path,'/').'/';
    if(!move_uploaded_file($_FILES[$key]['tmp_name'],$save_path.$new_filename)){
        $return_data['error']='TemporaryFileMoveFailure，Please checkPermission!';
        $return_data['return']=false;
        return $return_data;
    }
    //Such asResultAsOnAllThroughHas，ThenReturn theseValue，StorageOfPath，NewOfFileName（NotTo expose）
    $return_data['save_path']=$save_path.$new_filename;
    $return_data['filename']=$new_filename;
    $return_data['return']=true;
    return $return_data;
    }

    
?>
