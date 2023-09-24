<?php
$lz="18956";
include('../../../mysql.php');
$source_url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/stats?json=1&sid='.$lz_data['config_option_6'].'';
$json_station = file_get_contents($source_url);
$data=json_decode($json_station,true);
//print_r($data);
echo "<center>";
// Stationsinfos anzeigen:
echo "Stream Titel: " . $data['servertitle'] . "<br>";
echo "Listner :" . $data['currentlisteners'] . "(" . $data['uniquelisteners'] . ") / " . $data['maxlisteners'] . "<br>";
// Aktuellen Song anzeigen:
echo "Current Song: " . $data['songtitle'] . "<br>";
?>
</center>
  </body>
</html>