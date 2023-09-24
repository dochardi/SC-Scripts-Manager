<?php
$lz='18940';
include('../../mysql.php');
$phrase=$lz_data['config_text'];
$gesund = array("[username]", "[imclub]", "[song]","[modi]");
$lecker = array($username, "Bier", "Eiscreme","");
$newphrase = str_replace($gesund, $lecker, $phrase);
if($_GET["color"]==""){$col="#FFFFFF";}else{$col=$_GET["color"];}
?>
<style type="text/css">
	body,td,th {
		color: <?=$col?>;
		font-size:50px;
		font-family:sans-serif;
		font-weight: bold;
	}
	html {
		overflow: scroll;
		overflow-x: hidden;
	}
	::-webkit-scrollbar {
		width: 0px;  /* Remove scrollbar space */
		background: transparent;  /* Optional: just make scrollbar invisible */
	}
	/* Optional: show position indicator in red */
	::-webkit-scrollbar-thumb {
		background: #FF0000;
	}
    aside {
        position: absolute;
		width:1124px;
		height:60px;
    }
	.element1 {
        z-index: 1;
		left: 0em;
              top: 0em;
		width:100%;
		height:100%;
       background: black;
    }
	.element2 {
        z-index: 2;
		left: 0em;
              top: 0em;
		width:100%;
		height:100%;
    }
    </style>
</head>

<body>
<aside><div class="element1"><marquee direction="left" behavior="scroll" scrollamount="10" scrolldelay="1" >
<?=$newphrase?></marquee></div>
</aside>
<aside></aside>
</data>
</body>
</html>


