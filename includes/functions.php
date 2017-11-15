<?php
function heading()
{    
    module_include("header");
}

function footing()
{
    module_include("footer");
}

function logged_in()
{
    if(isset($_SESSION['auth_user']))
    {
        return 1;
    }
    else return 0;
}

function db_connect()
{
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    return $mysqli;
}

function module_include($module)
{
	if(file_exists("modules/".$module."/".$module.".php")) include("modules/".$module."/".$module.".php");
}

function form_processor()
{
	if(isset($_REQUEST['process']))
	{
		$func="process_".$_REQUEST['process'];
		$func();
		die();
	}
}

function please_go($module){
	header("Location:".BASE."/".$module);
}
?>
