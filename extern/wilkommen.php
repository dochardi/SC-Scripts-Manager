<?php
$lz="18958";
include('../mysql.php');
?>
<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: none;
  border-top: none;
}
table, th, td {
  border: 0px solid black;
  border-collapse: collapse;
}
</style>
<center><h1>Willkommen <?=$_GET['uname']?></h1><br>
<img src="<?=WEB_DOMAIN?>/api/scbild.php?id=<?=$_GET['mid']?>" width="300" height="400">
<br><br>
<h1><?=$lz_data['config_text']?></h1>
