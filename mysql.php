<?php
include('config.php');
$adonconn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_error($adonconn)) {
    die("Database connection failed: " . mysqli_connect_error($adonconn));
}







$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$lz_data = mysqli_fetch_assoc($lz_results);


$mid=$_GET['mid'];
$usernames=$_GET['uname'];
$gender=$_GET['gender'];

$username=str_replace('_', ' ', $usernames);
$sc_querys = "SELECT * FROM script_secretcity_user WHERE mid='$mid'";
$sc_results = mysqli_query($adonconn,$sc_querys);
$sc_user_data = mysqli_fetch_assoc($sc_results);

if($sc_user_data['id']=="")
{
$sql = "INSERT INTO script_secretcity_user (mid,username) VALUES ('$mid', '$usernames')";
mysqli_query($adonconn,$sql);
}
else 
{
$sqls = "UPDATE script_secretcity_user SET username='$usernames' WHERE mid='$mid'";
mysqli_query($adonconn,$sqls);
}

if($lz_data[trans]=="Ja"){
?>
<style>
body {
    background-color: transparent !important;
}
</style>

<?
}
else
{
?>
<style>
body {
    background-color: #000 !important;
    color: #fff !important;
}
</style>
<?
}
?>