<?php
$lz='18940';
include('../../mysql.php');
$phrase=$lz_data['config_text'];
$gesund = array("[username]", "[imclub]", "[song]","[modi]");
$lecker = array($username, "Bier", "Eiscreme","");
$newphrase = str_replace($gesund, $lecker, $phrase);

?>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=WEB_DOMAIN?>extern/led/jquery.leddisplay.js"></script>
<center><div class="crl" style="color:blue;"><?=$newphrase?></div></center>
<script type="text/javascript">

	var options = {

			pixelSize: 10, 

			stepDelay: 100, 

			horizontalPixelsCount:100,
pathToPixelImage: '<?=WEB_DOMAIN?>extern/led/pixel.png',

			verticalPixelsCount:6,
                     enabledPixelColor:'red',
                     backgroundColor: '#202021',
                     disabledPixelColor: '#404640',

			pixelRatio: 0.8

		};

$('.crl').leddisplay(options);


	</script>