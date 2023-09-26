<div class="col-md-12 col-lg-7 col-xl-8">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle"><?=$lang['home']['home']?></h6>
<?

$contents = file_get_contents('https://git.dochardi.de/script/sc/home.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>



</div>
</div>
<div class="col-md-12 col-lg-5 col-xl-4">
<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle"><?=$lang['home']['staff']?></h6>
<p>
<?
$homepages = file_get_contents('https://git.dochardi.de/script/sc/team.txt');
echo $homepages;
?>
</p>






</div>
</div>




</div>