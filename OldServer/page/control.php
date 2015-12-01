<?php

// Configura los datos de tu cuenta
$dbhost='localhost';
$dbusername='root';
$dbuserpass='';
$dbname='servi_guias';



// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('Cannot select database');

if ($_POST['email']) {
		//Comprobacion del envio del nombre de usuario y password
		$username=$_POST['email'];
		$password=$_POST['password'];

			if ($password==NULL) {
				echo "La password no fue enviada";
			}else{
				$query = mysql_query("SELECT user,password FROM usuario WHERE user = '$username'") or die(mysql_error());
				$data = mysql_fetch_array($query);
					
					if($data['password'] != $password) {
						echo "Login incorrecto";
						header("location:login.html");
					}else{
						session_start();
						$query = mysql_query("SELECT user,password,name,lastname FROM usuario WHERE user = '$username'") or die(mysql_error());
						$row = mysql_fetch_array($query);
						$_SESSION["auto"] = "1";
						$_SESSION["user"] = $row['name'];
						$_SESSION["userlast"] = $row['lastname'];
						header("location:sesion.php");
					}
			}
}else{header("location:login.html");}

?> 
