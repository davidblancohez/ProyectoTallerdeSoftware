<?php

session_start();

if($_SESSION["auto"]!="1"){ header("location:login.html");
exit();
}else{
	header("location:inicio.html");
}


?>