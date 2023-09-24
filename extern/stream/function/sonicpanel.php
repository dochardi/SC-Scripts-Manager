<?php
$lz="18956";
include('../../../mysql.php');

	$url = "https://apollo.rserve.de/cp/get_info.php?p=".$lz_data['config_text']."";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$return_json = curl_exec($ch);

	$obj = json_decode($return_json,true);
	$nowplaying = $obj['title'];
	$image = $obj['art'];
	$unique_listeners = $obj['ulistener'];
	$online_listeners = $obj['listeners'];
	$bitrate = $obj['bitrate'];
	$djusername = $obj['djusername'];
	$djprofile = $obj['djprofile'];
	$played_last20 = $obj['history'];
?>
<table>

<tbody><tr>
<td align="center">


<img src="<?=$djprofile?>" border="0" alt="Gothic, Rock, Darkwave, Metal, Dance, PoP" width="80" height="60" style="WIDTH:80px; 

height:60px;
background-image: url(<?=$djprofile?>);
BACKGROUND-REPEAT: no-repeat;">



</td>
</tr>

<tr>
<td align="center"></td>
</tr>

<tr>
<td align="left">Moderator: <?=$djusername?></td>
</tr>

<tr>
<td align="left">Hörer:  <?=$unique_listeners?> </td>
</tr>

<tr>
<td align="left">Bitrate: <?=$bitrate?></td>
</tr>

<tr>
<td align="left"><marquee behavior="scroll" align="center" direction="left" scrollamount="2" height="20" width="170"><?=$nowplaying?></marquee></td>
</tr>

</tbody></table>


