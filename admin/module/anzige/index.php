<style>
iframe {
   background: transparent;
}
</style>

<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle"><?=$lang['global']['settings']?><small class="form-text text-muted"></small></h6>

<?php
$lz="18950";
$lz_querys = "SELECT * FROM script_licencen WHERE config_id='$lz'";
$lz_results = mysqli_query($adonconn,$lz_querys);
$row = mysqli_fetch_assoc($lz_results);
if($_POST[ssettings])
{
$uid=$_POST['uid'];
$lzs=$_POST['lz'];
$scriptname=$_POST['scriptname'];
$imgs=$_POST['imgs'];
$trans=$_POST['trans'];
$config_text=$_POST['config_text'];
$config_option_3=$_POST['config_option_3'];
$config_option_4=$_POST['config_option_4'];
$config_option_5=$_POST['config_option_5'];

mysqli_query($adonconn,"UPDATE script_licencen SET config_option_3='$config_option_3',config_option_4='$config_option_4',config_option_5='$config_option_5', config_text='$config_text', trans='$trans', name='$scriptname',bg_bild='$imgs' WHERE config_id='$lzs'");
?>
<script>
let socket = new WebSocket("<?echo wsUri;?>");

socket.onopen = function(e) {
  socket.send("reload|<?=$lz?>");
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
<td><?=$lang['show']['img']?></td><td><input class="form-control" type="text" name="imgs" value="<?=$row['bg_bild']?>"></td>
</tr>
<tr>
<td><?=$lang['show']['1']?></td><td><input class="form-control" type="text" name="config_text" value="<?=$row['config_text']?>"></td>
</tr>
<tr>
<td><?=$lang['show']['2']?></td><td><input class="form-control" type="text" name="config_option_3" value="<?=$row['config_option_3']?>"></td>
</tr>
<tr>
<td><?=$lang['show']['3']?></td><td><input class="form-control" type="text" name="config_option_4" value="<?=$row['config_option_4']?>"></td>
</tr>
<tr>
<td><?=$lang['show']['4']?></td><td><input class="form-control" type="text" name="config_option_5" value="<?=$row['config_option_5']?>"></td>
</tr>

<tr>
<td><?=$lang['global']['bgtype']?></td><td>
<?php if($row['trans']=='Ja'){$trans7="selected";}else{$trans71="selected";}?>
<select name="trans" class="form-control">
  <option value="Ja" <?=$trans7?>><?=$lang['global']['active']?></option>
  <option Value='Nein' <?=$trans71?>><?=$lang['global']['disable']?></option>
</select>
</td>
</tr>

</table>
<input class="btn btn-primary" type="submit" name="ssettings" value="<?=$lang['global']['updateconf']?>"> 
</form>

</div>







<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle"><?=$lang['show']['titel']?><small class="form-text text-muted"></small></h6>



<?php
if($_POST[del])
{
$uid=$_POST['uid'];
mysqli_query($adonconn,"DELETE FROM sc_center WHERE id='$uid'");
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
$tur=$_POST['tur'];
mysqli_query($adonconn,"INSERT INTO sc_center (licence,name,text,vww_url,Tur)VALUES ('$ulz', '$scuserid', '$gewinn', '$game','$tur')");
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
<td><?=$row['config_text']?>:</td>
<td><?=$row['config_option_3']?></td>
<td><?=$row['config_option_4']?></td>
<td><?=$row['config_option_5']?></td>

<td></td>

</tr>
<tr>
<td><input class="form-control" type="text" name="tur" value=""></td>
<td><input class="form-control" type="text" name="scuserid" value=""></td>
<td><input class="form-control" type="text" name="gewinn" value=""></td>
<td><input class="form-control" type="text" name="game" value=""></td>


<td><input class="btn btn-primary" type="submit" name="gewonnen" value="<?=$lang['show']['add']?>"> 
</td>
</tr>

</table>
</form>













<hr>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
  "pageLength": 10
});
} );
</script>

<style>
.dataTables_length,#dataTables_length,.dataTables_info{display:none;}
.sorting,.sorting_asc,.sorting_desc,#table_id_filter,.table_id_filter,#table_id_previous,#table_id_next{color: #ffffff !important;}
table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {
    color: #000000 !important;
}

table.dataTable tbody tr {
    color: #000000 !important;
}
</style>
<table id="table_id" class="display table_id" style="width:100%;">
<thead>
<tr>
<th><b><?=$row['config_text']?></b></th>
<th><b><?=$row['config_option_3']?></b></th>
<th><b><?=$row['config_option_4']?></b></th>
<th><b><?=$row['config_option_5']?></b></th>
<th><b></b></th>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM sc_center WHERE licence='$lz'";
$result = mysqli_query($adonconn,$query);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?=$row['Tur']?></td>
<td><?=$row['name']?></td>
<td><?=$row['text']?></td>
<td><?=$row['vww_url']?></td>
<td><form action="" method="post">
<input type="hidden" name="lz" value="<?=$_POST['lz']?>"/>
<input type="hidden" name="uid" value="<?=$row['id']?>"/>
<input class="btn btn-primary" type="submit" name="del" value="<?=$lang['global']['del']?>">
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
<h6 class="text-left ctitle"><?=$lang['global']['codeembede']?><small class="form-text text-muted"></small></h6>
<p>
<textarea style="width: 100%; height: 80px;">
<?echo WEB_DOMAIN?>extern/taffel.php?mid=[Memberid]&uname=[membername]
</textarea>
<br>
</p>
</div>

<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle"><?=$lang['global']['showscript']?><small class="form-text text-muted"></small></h6>
<p>
<iframe src="<?echo WEB_DOMAIN?>extern/taffel.php?mid=95687&uname=Doc_Hardi_DH" style="width: 100%; height: 628px;" scrolling="no" allowTransparency="true" border="0"></iframe>
</p>
</div>

</div>

</div>
