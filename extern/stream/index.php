<?
$lz="18956";
include('../../mysql.php');


if($lz_data['config_option_11']=='sonicpanel'){$status="sonicpanel";$player=""; $source_url='https://'.$lz_data['club_name'].'/'.$lz_data['config_text'].'/;';}
elseif($lz_data['config_option_11']=='shoutcastv1'){$status="shoutcastv1"; $player=""; $source_url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/;stream.mp3';}
elseif($lz_data['config_option_11']=='shoutcastv2'){$status="shoutcastv2"; $player=""; $source_url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/'.$lz_data['config_option_6'].'';}
elseif($lz_data['config_option_11']=='icecast'){$status="icecast"; $player=""; $source_url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/'.$lz_data['config_option_6'].'';}
elseif($lz_data['config_option_11']=='lautfm'){$status="lautfm"; $player=""; $source_url='https://'.$lz_data['config_option_6'].'.stream.laut.fm/'.$lz_data['config_option_6'].'';}
elseif($lz_data['config_option_11']=='webphp'){$status="web-php"; $player=""; $source_url="DISABLE";}
elseif($lz_data['config_option_11']=='custom'){$status="custom"; $player="custom"; $source_url="DISABLE";}

?>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#dj_online_sh_box").load("<?echo WEB_DOMAIN?>extern/stream/function/<?=$status?>.php");
var dj_online_sh_boxId = setInterval(function() {
$("#dj_online_sh_box").load("<?echo WEB_DOMAIN?>extern/stream/function/<? echo $status;?>.php");}, 60000);});
</script>
<div id="dj_online_sh_box" align="center"></div>
<br>
<?
if($lz_data['config_option_12']=='Ja')
{
  if($source_url=="DISABLE"){}else{
?>
<center><audio controls preload="metadata" style=" width:300px;">
	<source src="<?=$source_url?>" type="audio/mpeg">
	Your browser does not support the audio element.
</audio></center>
<?
}
}
else
{

}
?>