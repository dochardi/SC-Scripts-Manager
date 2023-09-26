<?

//print_r($_POST);

if ($_POST['submit'] == "step2") {



		$database_host		= isset($_POST['database_host'])?$_POST['database_host']:"";

		$database_name		= isset($_POST['database_name'])?$_POST['database_name']:"";

		$database_username	= isset($_POST['database_username'])?$_POST['database_username']:"";

		$database_password	= isset($_POST['database_password'])?$_POST['database_password']:"";

              $script_host	= isset($_POST['script_host'])?$_POST['script_host']:"";

              $wsUri	= isset($_POST['wsUri'])?$_POST['wsUri']:"";

              $admin	= isset($_POST['admin_username'])?$_POST['admin_username']:"";

              $pw	= isset($_POST['admin_password'])?$_POST['admin_password']:"";
              
              $lang= isset($_POST['lang'])?$_POST['lang']:"";


              $pass =md5($pw);





		

		if (empty($database_host)){

			$error_mg[] = "Database host can not be empty! Please re-enter.";	

		}

		

		if (empty($database_name)){

			$error_mg[] = "Database name can not be empty! Please re-enter.";	

		}

		

		if (empty($database_username)){

			$error_mg[] = "Database username can not be empty! Please re-enter.";	

		}

		

		if (empty($database_password)){

			$error_mg[] = "Database password can not be empty! Please re-enter.";	

		}

		if (empty($admin)){

			$error_mg[] = "Username can not be empty! Please re-enter.";	

		}

	       if (empty($pw)){

			$error_mg[] = "User password can not be empty! Please re-enter.";	

		}





		

		if(empty($error_mg)){

		

			$config_file = file_get_contents('config.default');

			$config_file = str_replace("_DB_HOST_", $database_host, $config_file);

			$config_file = str_replace("_DB_NAME_", $database_name, $config_file);

			$config_file = str_replace("_DB_USER_", $database_username, $config_file);

			$config_file = str_replace("_DB_PASSWORD_", $database_password, $config_file);

			$config_file = str_replace("_SCRIPT_URL_", $script_host, $config_file);

			$config_file = str_replace("_WSS_URL_", $wsUri, $config_file);
			$config_file = str_replace("_LANG_", $lang, $config_file);




			

			$f = @fopen('../config.php', "w+");

                       fwrite($f, $config_file);

                       $new_conn=mysqli_connect($database_host,$database_username,$database_password,$database_name);

                       $quries=file_get_contents("db_backup.sql");

                       $res=mysqli_multi_query($new_conn,$quries);

                       $adminuser=mysqli_query($new_conn,"INSERT INTO admin_user (username,password)VALUES ('$admin', '$pass')");

                       $oldinstall = '../install';

                       $newinstall = '../install_'.time().'';

                       rename($oldinstall, $newinstall);

                       $oldUpdate = '../update';

                       $newUpdate = '../update_'.time().'';

                       rename($oldUpdate, $newUpdate);



    		       }

}



if(empty($error_mg)){

?>

<h2>Installation Abgeschlossen</h2>

<p><a href="../admin" class="btn btn-outline-success">Login as Admin</a>.</p>



                        

<?

}

?>