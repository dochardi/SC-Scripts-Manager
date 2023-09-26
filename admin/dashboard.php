<?
include('config.php');
?>
<!DOCTYPE html>
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="../theme/bootstrap.min.css">
<link rel="stylesheet" href="../theme/style.css">
<link rel="stylesheet" href="../theme/responsive.css">
<link rel="stylesheet" href="../theme/notify.css">

 <link rel="stylesheet" href="../theme/Chart.min.css">
 <link rel="stylesheet" href="../theme/bootstrap-select.min.css">
 <link rel="stylesheet" href="../theme/bootstrap-table.min.css">
<link rel="stylesheet" href="../theme/alertify.min.css">
<title>Dashboard - <?=get_setings('version');?></title>
</head>
<body>
<style>
.custom-modal {
        position: relative;
        display: flex;
        flex-direction: column;
        margin-top: 15%;
}
.custom-modal-header {
        background: #262b32;
        padding: 10px 15px; !important;
        border-bottom: none !important;
}
.custom-modal-title {
        font-size: 16px !important;
}
.custom-modal-body {
        background: #181d23;
        padding: 20px 25px;
}
.custom-modal-close {
        color: white;
}
.custom-modal-footer {
        background: #181d23;
        border-top: none !important;
}
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="custom-modal modal-dialog">
<div class="modal-content">
<div class="custom-modal-header modal-header">
<h5 class="custom-modal-title modal-title" id="custommodaltitle"></h5>
<button type="button" class="custom-modal-close close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="custom-modal-body modal-body" id="custommodalbody">
</div>
</div>
</div>
</div>
<div id="wrapper">
<div id="sidebar-wrapper">
<div class="sidebar-inner">
<div class="brand-box d-flex justify-content-start align-items-center">
<div class="logo">
<img src="../theme/logo.png" style="width: 45px;height: 45px;border-radius: 15% !important;">
</div>
</div>
<?php
include("./app/nav.php");
?>
</div>

</div>

<div id="page-content-wrapper">
<div class="container-fluid">
<div id="root">

<?php
//print_r($user);
if(demo=="1")
{
include("./app/demo.php");
}
include("./app/nofiy.php");
?>


<div class="top-bar">
<div class="row flex-column-reverse flex-md-row">
<div class="col-md-6 d-flex align-items-center">
</div>
<div class="col-md-6 d-flex align-items-center justify-content-end">
<div class="logout-btn"> <span></span> <a href="/index.php?action=logout"><?=$lang['global']['logout']?></a></div>
</div>
</div>
</div>

<div class="row">

<?php
if(get('page'))
if(file_exists('./module/'.get('page').'/index.php')){
  include('./module/'.get('page').'/index.php');
}
else
{
include("./app/404.php");
}
else
{
include("./app/home.php");
}
?>


</div>

</div>


<script src="../theme/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../theme/popper.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap.min.js" type="text/javascript"></script>
<script src="../theme/custom.js" type="text/javascript"></script>

<script src="../theme/Chart.bundle.js" type="text/javascript"></script>
<script src="../theme/Chart.bundle.min.js" type="text/javascript"></script>
<script src="../theme/notify.js" type="text/javascript"></script>
<script src="../theme/tableExport.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap-select.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap-table.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap-table-toolbar.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap-table-export.min.js" type="text/javascript"></script>
<script src="../theme/bootstrap-table-cookie.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../theme/alertify.rtl.min.css">

<script src="../theme/alertify.min.js" type="text/javascript"></script>
<script type="text/javascript">$(function () {
    $('select').selectpicker({
        width:'100%',
        styleBase:'bootselect-custom'});
    });
</script>

</body><div id="coupon-birds-div"></div></html>