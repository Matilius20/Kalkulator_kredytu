<?php
require_once dirname(__FILE__).'/../../config.php';


function getParamsLogin(&$Login,&$Password){
    $Login = isset($_REQUEST['Login']) ? $_REQUEST['Login'] : null;
    $Password = isset ($_REQUEST['Password']) ? $_REQUEST ['Password'] : null;
   
}

function validateLogin(&$Login,&$Password,&$messages){
    
    
	if ( ! (isset($Login) && isset($Password))) {
		return false;
        }
        
	if ( $Login == "") {
		$messages [] = 'Nie podano loginu';
	}
        
	if ( $Password == "") {
		$messages [] = 'Nie podano hasła';
	}
        
	if (count ( $messages ) > 0) return false;

        
        if ($Login == "admin" && $Password == "123") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
        
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}


$Login = null;
$Password = null;
$messages = array();

getParamsLogin($Login,$Password);

if (!validateLogin($Login,$Password,$messages)) {
	
	include _ROOT_PATH.'/app/security/login_view.php';
        
} else { 
	
	header("Location: "._APP_URL);
	
	
}




