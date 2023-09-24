<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Settings<small class="form-text text-muted"></small></h6>
<?
$lz="18935";
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
$imgs=$_POST['imgs'];
$trans=$_POST['trans'];
mysqli_query($adonconn,"UPDATE script_licencen SET trans='$trans', name='$scriptname',bg_bild='$imgs' WHERE config_id='$lzs'");
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
<td>Bild URL:</td><td><input class="form-control" type="text" name="imgs" value="<?=$row['bg_bild']?>"></td>
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



<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Gewinner<small class="form-text text-muted"></small></h6>



<?php
if($_POST[del])
{
$uid=$_POST['uid'];
mysqli_query($adonconn,"DELETE FROM spile_gewinner_taffel WHERE id='$uid'");
?>
<script>
let socket = new WebSocket("<?echo wsUri;?>");

socket.onopen = function(e) {
  socket.send("reload|<?=$lz?>");
  socket.close();
};
</script>
<?
}
?>

<?php
if($_POST['gewonnen'])
{
$uid=$_POST['uid'];
$ulz=$_POST['lz'];
$scuserid=$_POST['scuserid'];
$gewinn=$_POST['gewinn'];
$game=$_POST['game'];
mysqli_query($adonconn,"INSERT INTO spile_gewinner_taffel (Licence_id,gewinner_id,gewonnern,spiel)VALUES ('$ulz', '$scuserid', '$gewinn', '$game')");
?>
<script>
let socket = new WebSocket("<?echo wsUri;?>");

socket.onopen = function(e) {
  socket.send("reload|<?=$lz?>");
  socket.close();
};
</script>
<?
}
?>

<form action="" method="post">
<input type="hidden" name="lz" value="<?=$lz?>"/>
<table style="width:100%;">
<tr>
<td>SC Userid:</td>
<td>Gewinn:</td>
<td>Spile:</td>
<td></td>

</tr>
<tr>
<td><input class="form-control" type="text" name="scuserid" value=""></td>
<td><input class="form-control" type="text" name="gewinn" value=""></td>
<td><input class="form-control" type="text" name="game" value=""></td>
<td><input class="btn btn-primary" type="submit" name="gewonnen" value="User Eintragen"> 
</td>
</tr>

</table>
</form>













<hr>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<table id="table_id"  style="width: 100%;" class="display">
<thead>
<tr>
<td><b>Username</b></td>
<td><b>Gewonnen</b></td>
<td><b>Spiel</b></td>
<td><b></b></td>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM spile_gewinner_taffel WHERE Licence_id='$lz'";
$result = mysqli_query($adonconn,$query);
while ($row = mysqli_fetch_assoc($result)) {
$userids=$row['gewinner_id'];
$querys = "SELECT * FROM script_secretcity_user WHERE mid='$userids'";
$results = mysqli_query($adonconn,$querys);
$rows = mysqli_fetch_assoc($results);

?>
<tr>
<td><a href="http://www.secretcity.de/Net/profile/view_profile.aspx?MemberId=<?=$row['gewinner_id']?>" target="_blank" rel="noopener"><?=$rows['username']?></a></td>
<td><?=$row['gewonnern']?></td>
<td><?=$row['spiel']?></td>
<td><form action="" method="post">
<input type="hidden" name="lz" value="<?=$lz?>"/>
<input type="hidden" name="uid" value="<?=$row['id']?>"/>
<input class="btn btn-primary" type="submit" name="del" value="Remove">
</form>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
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
<?echo WEB_DOMAIN?>extern/gewinner.php?mid=[Memberid]&uname=[membername]
</textarea>
<br>
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">DEMO:<small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/gewinner.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 628px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

</div>

</div>

<script>
$(document).ready( function () {
    $('#table_id').DataTable({
  "pageLength": 50
});
} );
</script>
