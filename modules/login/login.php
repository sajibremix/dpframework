<?php
if(logged_in()){
	please_go("default");
}else{
	echo "login page";
}
?>