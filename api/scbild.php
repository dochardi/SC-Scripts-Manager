<?
$text="";
$id=$_GET['id'];
if($id=='')
{
header( 'Location: noavatar.png' ) ;
}
else if($id=='undefined')
{
header( 'Location: noavatar.png' ) ;
}
else
{
$url='http://www.secretcity.de/net/profile/view_profile.aspx?MemberID='.$id.'';
$inhalt = file_get_contents($url);
$befores='src="/net/usermedia/mediafile.ashx?iid=';
$afters='&amp;sz=';

$strs=substr($inhalt,strpos($inhalt,$befores)+strlen($befores));
$strs=substr($strs,0,strpos($strs,$afters));
$names = htmlentities($strs);
$pic="http://www.secretcity.de/net/usermedia/mediafile.ashx?iid=$names&sz=150";
$test = file_get_contents($pic);
$pics="http://www.secretcity.de/net/usermedia/mediafile.ashx?iid=$names&sz=0";
$tests = file_get_contents($pics);
header('Content-type: image/jpg');
header('Content-type: image/png');
header('Content-type: image/gif');
?>
<?=$test?>
<?=$tests?>
<?
}
?>