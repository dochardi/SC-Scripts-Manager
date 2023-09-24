<?
$lz="18956";
include('../../../mysql.php');
?>
<base href="<?=$lz_data['club_name']?>" />
<center>
<?php
echo file_get_contents(''.$lz_data['club_name'].'ticker/dj_online_box.php?send_sc_box=dj_online_sh_box&b=170');
?>
</center>