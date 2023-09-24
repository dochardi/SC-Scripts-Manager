<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Settings<small class="form-text text-muted"></small></h6>

<?php
$lz="18956";
$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$lz_data = mysqli_fetch_assoc($lz_results);

if($_POST[ssettings])
{
$uid=$_POST['uid'];
$lzs=$_POST['lz'];
$scriptname=$_POST['scriptname'];
$imgs=$_POST['trans'];
mysqli_query($adonconn,"UPDATE script_licencen SET trans='$imgs' WHERE config_id='$lzs'");
?>
<script>
let socket = new WebSocket("<?echo wsUri;?>");

socket.onopen = function(e) {
  socket.send("reload|<?=$lz?>");
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
<td>Hintergrund Transparents:</td><td>
<?php if($lz_data['trans']=='Ja'){$trans7="selected";}else{$trans71="selected";}?>
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



<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Data<small class="form-text text-muted"></small></h6>
<?include("./module/webung/conf.php");?>
</div>
</div>

























<div class="col-md-12 col-lg-6 col-xl-5">
<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">Einbau Code:<small class="form-text text-muted"></small></h6>
<p>
URL: <?echo WEB_DOMAIN?>extern/werbung.php
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">DEMO:<small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/werbung.php" style="width: 100%; height: 512px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

</div>

</div>