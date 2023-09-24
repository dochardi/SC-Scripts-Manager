<?
$releases=getdata("releases","dochardi/SC-Scripts-Manager");
//$user=getdata("user","dochardi");
//$dev=getdata("dev","dochardi/SC-Scripts-Manager");

$total=count($releases);

?>
<style>
iframe {
   background: transparent;
}
</style>


<?
$Parsedown = new Parsedown();
$zaehler=0;
while($zaehler < $total) {
   if($zaehler == 4) {
            break;
   }
?>
<div class="col-md-12 col-lg-6 col-xl-7">
<div class="bgDarkk pt-4 pb-5">
<h6 class="text-left ctitle">Changelog <?=$releases[$zaehler]['tag_name']?><small class="form-text text-muted">create <?=$releases[$zaehler]['published_at']?> 
by <?=$releases[$zaehler]['author']['login']?></small></h6>
<p>
<?
echo $Parsedown->text($releases[$zaehler]['body']);
?>
</p>
</div>
</div>

<div class="col-md-12 col-lg-6 col-xl-5">
<div class="bgDarkk" style="overflow:hidden;">
<h6 class="text-left ctitle">Download:<small class="form-text text-muted"></small></h6>
<p>

</p>
</div>
</div>
<?
   $zaehler += 1; //Erhöht den $zaehler um den Wert $increment
}
?>
</div>
</div>
