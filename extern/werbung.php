<?php
$lz='18956';
include('../mysql.php');
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">

<style>
  body {
  background-color: transparent;
}

  .container { margin: -50px auto; min-width: 512px; max-width: 512px; }

  #example {

  border: 10px solid #000;
  min-width: 512px; max-width: 512px;

}

  </style>

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

</head>
<body>

<div class="jquery-script-clear"></div>

</div>

</div>
<div class="container">
  <a id="ali" alt="Ali" href="https://dwe-gruppe.eu" target="_blank">
  <div id="example">
<?php
$query = "SELECT * FROM sc_intern_werbe_taffel WHERE Licence_id='$lz'";
$result = mysqli_query($adonconn,$query);
while ($row = mysqli_fetch_assoc($result)) {
?>

      <img src="../api/img.php?url=<?=$row['imgbild']?>" alt="" url="<?=$row['url']?>">
<?
}
?>

  </div>
</a>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>

<script src="./billboard/jQuery.OMGBillboard.js"></script>

<script>

  $(function() {

      $("#example").OMGBillboard({

			'imgWidth': 512,
			'imgHeight': 512,
			'numSlices': 20,
			'sliceClass': 'slice',
			'rotateSpeed': 500,
			'changeSpeed': 5000,
                     'addfackt': <?=$lz_data[config_option_3]?>,
			'bgColor': '#000'

      });

    });

  </script>

</body>
</html>

