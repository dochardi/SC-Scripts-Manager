<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">INFO<small class="form-text text-muted"></small></h6>
Wen sie "Web-php CMS" Nutzen bitte bei IP Eure Domaine zb: https://demo.de/ <br><br>
wen sie "Laut fm" Nutzen bitte nur den Mount point setzen ohne /  zb: aus "/eins" wurde "eins"<br><br>
wens sie "Stream by dwe gruppe" nutzen wurde der DJ name und das dj Bild von den Sonicpanel Dj Profil Abgerufen das heist sie müssen die DJ Login Profile sauber setzen, aber das durche haben sie viel einbindungs möglichkeiten
<br><br>
Wen sie "custom" Nutzen mussen sie in der ortner "extern/stream/function" die "custom.php" anpassen bzw den code Schreiben für die abfrage der stream infos und den html code zu anzigen



</div>
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Settings<small class="form-text text-muted"></small></h6>

<?php
$lz="18956";
$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$row = mysqli_fetch_assoc($lz_results);

if($_POST[ssettings])
{
$uid=$_POST['uid'];
$lzs=$_POST['lz'];
$scriptname=$_POST['scriptname'];
$club_name=$_POST['club_name'];
$config_text=$_POST['config_text'];
$config_option_3=$_POST['config_option_3'];
$config_option_4=$_POST['config_option_4'];
$config_option_5=$_POST['config_option_5'];
$config_option_6=$_POST['config_option_6'];
$config_option_7=$_POST['config_option_7'];
$config_option_8=$_POST['config_option_8'];
$config_option_9=$_POST['config_option_9'];
$config_option_10=$_POST['config_option_10'];
$config_option_11=$_POST['config_option_11'];
$config_option_12=$_POST['config_option_12'];
$trans=$_POST['trans'];

mysqli_query($adonconn,"UPDATE script_licencen SET trans='$trans', config_option_12='$config_option_12',config_option_11='$config_option_11',name='$scriptname',club_name='$club_name',config_text='$config_text',config_option_3='$config_option_3',config_option_4='$config_option_4',config_option_5='$config_option_5',config_option_6='$config_option_6',config_option_7='$config_option_7',config_option_8='$config_option_8',config_option_9='$config_option_9',config_option_10='$config_option_10' WHERE config_id='$lzs'");
?>
<script>
let socket = new WebSocket("wss://websocket.proxy.dwe-gruppe.eu/rjhewzrhi3w0ztr8g3uhu9/resiver");

socket.onopen = function(e) {
  socket.send("reload|<?=$_POST['lz']?>");
  socket.close();
};
</script>
<form method="POST" id="myform">
  <input type="text" name="lz" value="<?=$lz?>">
  <input type="submit">
</form>
<script type="text/javascript">
  document.getElementById("myform").submit();
</script>
<?
}
?>
<form action="" method="post">
<input type="hidden" name="lz" value="<?=$lz?>"/>
<table style="width:100%;">
<tr>
<td>Stream Server:</td><td>
<?php 
if($row['config_option_11']=='sonicpanel'){$status1="selected";}
if($row['config_option_11']=='shoutcastv1'){$status2="selected";}
if($row['config_option_11']=='shoutcastv2'){$status3="selected";}
if($row['config_option_11']=='icecast'){$status4="selected";}
if($row['config_option_11']=='lautfm'){$status5="selected";}
if($row['config_option_11']=='webphp'){$status6="selected";}
if($row['config_option_11']=='custom'){$status7="selected";}
?>
  <select name="config_option_11" class="form-control">
  <option value="sonicpanel" <?=$status1?>>Stream by dwe gruppe</option>
  <option Value='shoutcastv1' <?=$status2?>>Shoutcast V1</option>
  <option Value='shoutcastv2' <?=$status3?>>Shoutcast V2</option>
  <option Value='icecast' <?=$status4?>>Icecast</option>
  <option Value='lautfm' <?=$status5?>>lautfm</option>
  <option Value='webphp' <?=$status6?>>Web-php CMS</option>
  <option Value='custom' <?=$status7?>>custom</option>
</select>
</td>
</tr>
<tr>
<!--<td>DJ Erkennung:</td><td>
<?php 
if($row['config_option_4']=='1'){$status1="selected";}
if($row['config_option_4']=='2'){$status2="selected";}
if($row['config_option_4']=='3'){$status3="selected";}
if($row['config_option_4']=='4'){$status4="selected";}
if($row['config_option_4']=='5'){$status5="selected";}
if($row['config_option_4']=='6'){$status6="selected";}
?>
  <select name="config_option_4" class="form-control">
  <option value="1" <?=$status1?>>Song (formate: songname | djname)</option>
  <option Value='2' <?=$status2?>>AIM</option>
  <option Value='3' <?=$status3?>>Title</option>
  <option Value='4' <?=$status4?>>Song (formate: djname > songname)</option>
  <option Value='5' <?=$status5?>>Song (formate: djname | songname)</option>
  <option Value='6' <?=$status6?>>Song (formate: djname > songname)</option>
</select>
</td>
</tr>
-->

<td>Stream Player:</td><td>
<?php if($row['config_option_12']=='Ja'){$status12="selected";}else{$status121="selected";}?>
<select name="config_option_12" class="form-control">
  <option value="Ja" <?=$status12?>>Active</option>
  <option Value='Nein' <?=$status121?>>Deactive</option>
</select>
</td>
</tr>

<tr>
<td>Stream IP:</td><td><input class="form-control" type="text" name="club_name" value="<?=$row['club_name']?>"></td>
</tr>
<tr>
<td>Stream Port:</td><td><input class="form-control" type="text" name="config_text" value="<?=$row['config_text']?>"></td>
</tr>
<tr>
<td>Mount point:</td><td><input class="form-control" type="text" name="config_option_6" value="<?=$row['config_option_6']?>"></td>
</tr>

<tr>
<td>Hintergrund Transparents:</td><td>
<?php if($row['trans']=='Ja'){$trans7="selected";}else{$trans71="selected";}?>
<select name="trans" class="form-control">
  <option value="Ja" <?=$trans7?>>Active</option>
  <option Value='Nein' <?=$trans71?>>Deactive</option>
</select>
</td>
</tr>



</table>
<input class="btn btn-primary" type="submit" name="ssettings" value="Update Config"> 
</form>

</div>























</div>

<div class="col-md-12 col-lg-6 col-xl-5">
<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">Einbau Code:<small class="form-text text-muted"></small></h6>
<?
if($row['config_option_11']=='sonicpanel'){include('./module/stream/extra/sonicpanel.php');}
else{include('./module/stream/extra/other.php');}

?>
</div>

</div>
