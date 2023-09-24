<?php
$lz="18956";
include('../../../mysql.php');
$source_url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/status-json.xsl?mount=/'.$lz_data['config_option_6'].'';
$json_station = file_get_contents($source_url);
$datas=json_decode($json_station,true);
$data=$datas['icestats']['source'];
//print_r($data);
echo "<center>";
// Stationsinfos anzeigen:
echo "Stream Titel: " . $data['server_name'] . "<br>";
echo "Listner : " . $data['listeners'] . "<br>";
// Aktuellen Song anzeigen:
echo "Current Song: " . $data['yp_currently_playing'] . "<br>";
?>
</center>
  </body>
</html>