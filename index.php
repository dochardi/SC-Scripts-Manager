<?php
if(filesize('config.php')) {
$redirect_url = "./admin";
header("Location: " . $redirect_url);
exit;
}
else
{
$redirect_url = "./install";
header("Location: " . $redirect_url);
exit;

}
?>