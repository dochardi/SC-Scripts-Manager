<?
$lz="18956";
include('../../../mysql.php');
$url='http://'.$lz_data['club_name'].':'.$lz_data['config_text'].'/7.html';
$userAgent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Process the HTML response here
    // For example, you can echo it or parse it with a DOM parser
   $data = preg_split("/[,]+/", $response, 7);
}

// Close the cURL session
curl_close($ch);


//print_r($data);
$listner=$data[0];
$MAX=$data[3];
$uniq=$data[4];
$song=$data[6];

echo "<center>";
// Stationsinfos anzeigen:
echo "Listner :" . $listner . "(" . $uniq . ") / " . $MAX . "<br>";
// Aktuellen Song anzeigen:
echo "Current Song: " . $song . "<br>";
?>
</center>
  </body>
</html>