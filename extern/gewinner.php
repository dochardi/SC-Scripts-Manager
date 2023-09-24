<?php
$lz="18935";
include('../mysql.php');
?>

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
<script language="javascript" type="text/javascript">
  var wsUri = "<?echo wsUri;?>";
  var output;

  function init()
  {
    output = document.getElementById("output");
    testWebSocket();
  }

  function testWebSocket()
  {
    websocket = new WebSocket(wsUri);
    websocket.onopen = function(evt) { onOpen(evt) };
    websocket.onclose = function(evt) { onClose(evt) };
    websocket.onmessage = function(evt) { onMessage(evt) };
    websocket.onerror = function(evt) { onError(evt) };
  }

  function onOpen(evt)
  {
      //websocket.send("open");
  }

  function onClose(evt)
  {
      location.reload();
      websocket.send("close");

  }

  function onMessage(evt)
  { 
      const splitString = evt.data.split("|");
      if (splitString[0]=="reload"){if (splitString[1]==<?=$lz?>){location.reload();}}

   }
function onError(evt)
  {
    writeToScreen('<span style="color: red;">ERROR:</span> ' + evt.data);
  }

  function doSend(message)
  {
    websocket.send(message);
  }

  function writeToScreen(message)
  {
    var pre = document.createElement("p");
    pre.style.wordWrap = "break-word";
    pre.innerHTML = message;
    output.appendChild(pre);
  }

  window.addEventListener("load", init, false);


</script>

<center><img src="<?=$lz_data['bg_bild']?>" style="height:150px;width: 320px;"></center>

<br><br>
<div class="output" id="output"></div>
<style>
.dataTables_length,#dataTables_length,.dataTables_info{display:none;}
.sorting,.sorting_asc,.sorting_desc,#table_id_filter,.table_id_filter,#table_id_previous,#table_id_next{color: #ffffff !important;}
</style>
<table id="table_id" class="display">
<thead>
<tr>
<td><b>Username</b></td>
<td><b>Gewonnen</b></td>
<td><b>Spiel</b></td>
</tr>
</thead>
<tbody>
<?php
$lizence="18935";
$mid=$_GET['mid'];

$query = "SELECT * FROM spile_gewinner_taffel WHERE Licence_id='$lizence'";
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
</tr>
<?php
}
?>
</tbody>
</table>