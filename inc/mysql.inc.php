<?php
//db connect
function connect($host=DBHOST,$username=DBUSER,$password=DBPW,$databasename=DBNAME,$port=DBPORT){
	$link=@mysqli_connect($host, $username, $password, $databasename, $port);
	if(mysqli_connect_errno()){
// 		exit(mysqli_connect_error());
	    exit('DatabaseConnectionFailure，Please checkconfig.inc.phpConfigurationFile');
	}
	mysqli_set_charset($link,'utf8');
	return $link;
}

//sqli_widebyte



//Determine whether the operation isSuccessful，Such asResultError returnboolValue，Such asResultSuccessful，ThenReturn resultResultSet
function execute($link,$query){
	$result=mysqli_query($link,$query);
	if(mysqli_errno($link)){//The most recent operationOfError code，No error returned0,NoOutput
		exit(mysqli_error($link));//Have an error，Return code，Fortrue，Then print an errorInformation
	}
	return $result;
}



//Escape，Avoidfuck
function escape($link,$data){
    if(is_string($data)){
        return mysqli_real_escape_string($link,$data);
    }
    if(is_array($data)){
        foreach ($data as $key=>$val){
            $data[$key]=escape($link,$val);
        }
    }
    return $data;
}
?>