<!DOCTYPE html>
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../theme/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="../theme/login.css" rel="stylesheet">
<title> Secretcity Script Manager </title>
</head>

<body>
<section class="siteBanner d-flex align-items-center" id="home">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="siteBannerInner">
<p>

<?
include('../config.php');
if($_GET['action']=="update")
{
include('lib/update.php');
}
else
{
include('lib/home.php');
}
?>

</p>

</div>
</div>
</div>
</div>
<img class="bannerImage dNone" src="../theme/logo.png" style="width: 800px;height: 800px; margin-right:10%">
</section>


<script src="../theme/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" type="text/javascript"></script>



</body></html>