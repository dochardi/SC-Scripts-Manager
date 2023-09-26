<?php
$lz="18936";
include('../mysql.php');
$dataneu[]=array(id=>$_GET['mid'], username=>$_GET['uname']);
$json2=json_encode($dataneu);

if($lz_data['config_option_13']=="")
{
$json_merge=json_encode($dataneu);
}
else
{

$user1=json_decode($lz_data['config_option_13'],true);
$ergebnis = array_merge($dataneu,$user1);
$json_merge = json_encode($ergebnis);
//print_r($new_array);
}

mysqli_query($adonconn,"UPDATE script_licencen SET config_option_13='$json_merge' WHERE config_id='$lz'");
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
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'London')"><b>Home</b></button>
<?php
if($lz_data['config_option_6']=='Ja')
{
?>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><b>stream anzeige</b></button>
<?php
}
if($lz_data['config_option_10']!=""){
?>
 <a href="<?=$lz_data['config_option_9']?>" target="_blank" rel="noopener"><button class="tablinks"><b><?=$lz_data['config_option_10']?></b></button></a>
<?php
}
if($lz_data['config_option_7']=='Ja')
{
?>

  <button class="tablinks" onclick="openCity(event, 'Tokyo')"><b>Stats</b></button>
<?php
}
if($lz_data['config_option_8']!=""){
?>
  <a href="<?=$lz_data['config_option_3']?>" target="_blank" rel="noopener"><button class="tablinks"><b><?=$lz_data['config_option_8']?></b></button>
<?
}
?>
</div>




<div id="London" class="tabcontent" style="display:block;">
<center><h1><?=$lz_data['club_name']?> <?=$_GET['uname']?></h1><br>
<img src="<?=WEB_DOMAIN?>/api/scbild.php?id=<?=$_GET['mid']?>" width="300" height="400">
<br>
<h1><?=$lz_data['config_text']?></h1>
</div>

<?php
if($lz_data['config_option_6']=='Ja')
{
?>
<div id="Paris" class="tabcontent">
<center><h1><?=$lz_data['club_name']?></h1>
<br>
<img src="" width="300" height="400"><br>
<table style="width:350px">
<tr><td style="width:150px"><b>Radio:</b></td><td><?=$lz_data['club_name']?><br></td></tr>
<tr><td style="width:150px"><b>Moderator:</b></td><td> </td></tr>
<tr><td style="width:150px"><b>Hörer:</b></td><td> / </td></tr>
<tr><td style="width:150px"><b>Interpret:</b></td><td> </td></tr>
<tr><td style="width:150px"><b>Song:</b></td><td> </td></tr>
</center>
</table>
</div>
<?
}
?>
<div id="Tokyo" class="tabcontent">

</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }
  document.getElementById(cityName).style.display = "block";
  document.getElementById(cityName + "-tab").classList.add("active");
  // evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("London-tab").click();
</script>
