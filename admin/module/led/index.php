<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle"><?=$lang['global']['settings']?><small class="form-text text-muted"></small></h6>

<?php
$lz="18940";
$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$row = mysqli_fetch_assoc($lz_results);
?>

<?php
if($_POST[ssettings])
{
$lzs=$_POST['lz'];
$config_text=$_POST['config_text'];
mysqli_query($adonconn,"UPDATE script_licencen SET config_text='$config_text' WHERE config_id='$lzs'");
?>
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
<td><?=$lang['led']['text']?></td>
<td><input class="form-control" type="text" name="config_text" value="<?=$row['config_text']?>"></td>
</tr>

</table>
<input class="btn btn-primary" type="submit" name="ssettings" value="<?=$lang['global']['updateconf']?>"> 
</form>





</div>











</div>

<div class="col-md-12 col-lg-6 col-xl-5">
<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle"><?=$lang['global']['codeembede']?><small class="form-text text-muted"></small></h6>
<p>
<?=$lang['led']['type1']?><br>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/led/led-alt.php?mid=[Memberid]&uname=[membername]
</textarea>

<br><br>
<?=$lang['led']['type2']?><br>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/led/led.php?mid=[Memberid]&uname=[membername]
</textarea></p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle"><?=$lang['led']['demo1']?><small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/led/led-alt.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 100px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle"><?=$lang['led']['demo2']?><small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/led/led.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 100px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>


</div>

</div>