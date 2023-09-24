<?php
include('../config.php');
include('function/Parsedown.php');
include('function/github.php');
$adonconn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_error($adonconn)) {
    die("Database connection failed: " . mysqli_connect_error($adonconn));
}






function get_setings($data)
{
global $adonconn;
$lz_querys = "SELECT * FROM hp_settings WHERE data='$data'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$value = mysqli_fetch_assoc($lz_results);
return $value['value'];
}



session_start();

if(get('action') == 'login') {

$username=post('fname');
$pass=md5(post('lname'));
$user_login_sql = "SELECT * FROM admin_user WHERE username='$username' and password='$pass'";
$user_login_results = mysqli_query($adonconn,$user_login_sql);
$user_exist = mysqli_fetch_assoc($user_login_results);

if($user_exist['id'])
{
$_SESSION['access_token']='true';

}else{$error="Username or Password Wrong";}


}

if(session('access_token')) {
   if(is_dir("../update/.")){echo '<meta http-equiv="refresh" content="0;url=../update">';}
   else if(is_dir("../install/.")){die('Please Remove or rename the install diractory');}
   else {include('dashboard.php');}

} else {
 include('start.php');
}


if(get('action') == 'logout') {
  // This should logout you
  unset($_SESSION['access_token']);
  header('Location: index.php');
  die();
}

function get($key, $default=NULL) {
  return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function post($key, $default=NULL) {
  return array_key_exists($key, $_POST) ? $_POST[$key] : $default;
}


function session($key, $default=NULL) {
  return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}

?>