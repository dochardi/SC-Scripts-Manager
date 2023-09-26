<?php
if($_POST[del])
{
$uid=$_POST['uid'];
mysqli_query($adonconn,"DELETE FROM sc_intern_werbe_taffel WHERE id='$uid'");
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
$game='Active';
mysqli_query($adonconn,"INSERT INTO sc_intern_werbe_taffel (Licence_id,imgbild,url,status)VALUES ('$ulz', '$scuserid', '$gewinn', '$game')");
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
<td><?=$lang['werbung']['img']?></td>
<td><?=$lang['werbung']['url']?></td>
<td></td>

</tr>
<tr>
<td><input class="form-control" type="text" name="scuserid" value=""></td>
<td><input class="form-control" type="text" name="gewinn" value=""></td>
<td><input class="btn btn-primary" type="submit" name="gewonnen" value="<?=$lang['werbung']['send']?>"> 
</td>
</tr>

</table>
</form>













<hr><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
  "pageLength": 50
});
} );
</script>

<table id="table_id" class="display" style="width:100%;">
<thead>
<tr>
<td><b><?=$lang['werbung']['img']?></b></td>
<td><b><?=$lang['werbung']['url']?></b></td>
<td><b></b></td>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM sc_intern_werbe_taffel WHERE Licence_id='$lz'";
$result = mysqli_query($adonconn,$query);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><a href="<?=$row['imgbild']?>" target="_blank" rel="noopener"><?=$row['imgbild']?></a></td>
<td><a href="<?=$row['url']?>" target="_blank" rel="noopener"><?=$row['url']?></a></td>
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