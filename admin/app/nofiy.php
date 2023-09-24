<?
$local_version=get_setings('version');
$extern_version = file_get_contents('https://git.dochardi.de/script/sc/version.txt');
if($local_version==$extern_version)
{
}
else
{
?>
<div class="row"><div class="col-xl-12">
<div class="flag note warning">
<div class="flag__image icon"><i class="fa fa-info"></i></div>
<div class="body text"><h3>Update auf version: <?=$extern_version?> Vorhanden: <a href="./index.php?page=changelog" style="color: #fff;">Hier weiter lessen</a></h3>
</div>
</div>
</div> </div>
<?
}
?>

<style>
    .ctitle {
        font-weight: 600 !important;
        font-size: 1.25rem !important;
        border-bottom: 1px solid #2c3137;
        text-transform: none !important;
        padding-bottom: 12px;
        margin-bottom: 15px !important;

    }

    .ctitle .form-text {
        display: block;
        margin-top: .25rem;
        font-size: 60% !important;
    }
</style>
