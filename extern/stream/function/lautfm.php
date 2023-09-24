<?php
$lz="18956";
include('../../../mysql.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>laut.fm API PHP example</title>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
  </head>
  <body>

<?php

// Um welche Station handelt sich's:
$station = $lz_data['config_option_6'];

// Die Stations-Infos aus der API abfragen:
$json_station = file_get_contents("http://api.laut.fm/station/".$station);
// zu Debuggen einkommentieren:
// var_dump($http_response_header);
// var_dump($json_station);

// Die Anwort von JSON in einen assoziativen Object umwandeln:
$obj_station = json_decode($json_station);

// Aktuellen Song aus der API abfragen:
$json_song = file_get_contents("http://api.laut.fm/station/".$station."/current_song");
// zu Debuggen einkommentieren:
// var_dump($http_response_header);
// var_dump($json_song);

// Die Anwort von JSON in einen assoziativen Object umwandeln:
$obj_song = json_decode($json_song);




$json_listner = file_get_contents("http://api.laut.fm/station/".$station."/listeners");


//var_dump($json_song);
echo "<center>";
// Bild anzeigen, wenn's eins gibt:
if ( $obj_song->artist->image ) {
  echo '<a href="' . $obj_song->artist->laut_url . '"><img src="' . $obj_song->artist->image . '" style="width: 150px; height: 150px;"></a>';
  echo "<br>";
}

// Stationsinfos anzeigen:
echo "Listner: " . $json_listner . "<br>";
// Aktuellen Song anzeigen:
echo "Current Song: " . $obj_song->artist->name . " - " . $obj_song->title . "<br>";

// Aktuelle Playlist anzeigen:
if ($obj_station->current_playlist) {
    echo "Current Playlist: " . $obj_station->current_playlist->name ."<br>";
} else {
    echo "Current Playlist: Basisplayliste";
}

?>
</center>
  </body>
</html>