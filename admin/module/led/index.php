<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Settings<small class="form-text text-muted"></small></h6>

<?php
$lz="18940";
$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$row = mysqli_fetch_assoc($lz_results);
?>

<?php
if($_POST[ssettings])
{
$uid=$_POST['uid'];
$lzs=$_POST['lz'];
$scriptname=$_POST['scriptname'];
$config_text=$_POST['config_text'];
mysqli_query($licencconn,"UPDATE script_licencen SET trans='Ja',name='$scriptname',config_text='$config_text' WHERE config_id='$lzs'");
?>
<script>
let socket = new WebSocket("wss://connect.websocket.in/v3/21?apiKey=ntWI5Dm8Tjpt6vCrcs3XSp039Rs4MhXQiDBI5JtmIVGhaQ09dhLCXz0qPz3E");

socket.onopen = function(e) {
  socket.send("reload|<?=$_POST['lz']?>");
  socket.close();
};
</script>
<form method="POST" id="myform">
  <input type="text" name="lz" value="<?=$_POST['lz']?>">
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
<td>Text:</td><td><input class="form-control" type="text" name="config_text" value="<?=$row['config_text']?>"></td>
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
LED Type 1:<br>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/led/led-alt.php?mid=[Memberid]&uname=[membername]
</textarea>

<br><br>
LED Type 2:<br>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/led/led.php?mid=[Memberid]&uname=[membername]
</textarea></p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">DEMO Type 1:<small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/led/led-alt.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 100px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">DEMO Type 2:<small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/led/led.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 100px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>


</div>

</div>