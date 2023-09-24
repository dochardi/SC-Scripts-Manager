<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Settings<small class="form-text text-muted"></small></h6>

<?php
$lz="18936";
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
<td>club Name:</td><td><input class="form-control" type="text" name="club_name" value="<?=$row['club_name']?>"></td>
</tr>
<tr>
<td>Willkommen Text:</td><td><input class="form-control" type="text" name="config_text" value="<?=$row['config_text']?>"></td>
</tr>
<tr>
<td>Homepage URL:</td><td><input class="form-control" type="text" name="config_option_3" value="<?=$row['config_option_3']?>"></td>
</tr>
<tr>
<td>Hompage Tab Name:</td><td><input class="form-control" type="text" name="config_option_8" value="<?=$row['config_option_8']?>"></td>
</tr>
<tr>
<td>Sendeplane Tab Name:</td><td><input class="form-control" type="text" name="config_option_10" value="<?=$row['config_option_10']?>"></td>
</tr>
<tr>
<td>Sendeplane url:</td><td><input class="form-control" type="text" name="config_option_9" value="<?=$row['config_option_9']?>"></td>
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
<p>
Script: Web browser<br>
scale: 1.00<br>
width: 800<br>
hight: 628 
<br>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/scpage.php?mid=[Memberid]&uname=[membername]</textarea>
<br>
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">DEMO:<small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/scpage.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 628px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

</div>

</div>