<?php
$lz="18950";
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

<center>
<?php
if($lz_data['bg_bild']==""){}else{
?>


<img src="<?=$lz_data['bg_bild']?>" style="height:150px;width: 320px;">
<?php
}
?>
</center>

<br><br>
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
<table id="table_id" class="display">
<thead>
<tr>
<td><?=$lz_data['config_text']?></td>
<td><?=$lz_data['config_option_3']?></td>
<td><?=$lz_data['config_option_4']?></td>
<td><?=$lz_data['config_option_5']?></td>
</tr>
</thead>
<tbody>

<?php
$lizence="18950";

$querys="SELECT * FROM sc_center WHERE licence='$lizence'";
$results=mysqli_query($adonconn,$querys);
while ($row = mysqli_fetch_assoc($results)) {
?>
<tr>
<td><?=$row['Tur']?></td>
<td><?=$row['name']?></td>
<td><?=$row['text']?></td>
<td><a href="<?=$row['vww_url']?>"><?=$row['vww_url']?></a></td>
</tr>

<?php
}
?>
</tbody>
</table>