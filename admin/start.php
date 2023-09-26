<!DOCTYPE html>
<html lang="en" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?
include('config.php');
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../theme/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="../theme/login.css" rel="stylesheet">
<title> Secretcity Script Manager - <?=get_setings('version');?></title>
</head>

<body>
<section class="siteBanner d-flex align-items-center" id="home">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="siteBannerInner">
<h2><?=$lang['global']['loginasadmin']?></h2>


<?
if(demo=="1")
{
?>
<p><?=$lang['global']['demo']?>
</p>
<?
}
?>

<p>
<?=$error?>
<form action="?action=login" method="post" class="form-inline" style="width: 40%;">
  <label for="fname" class="sr-only" style="color: #ad91ff !important;"><h5><?=$lang['global']['username']?></h5></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="fname" name="fname">

  <label for="lname" class="sr-only" style="color: #ad91ff !important;"><h5><?=$lang['global']['pass']?>:</h5></label>
  <input type="password"  class="form-control mb-2 mr-sm-2"id="lname" name="lname">

<br><br>
<button type="submit" class="btn btn-outline-success" ><?=$lang['global']['login']?></button>
    </form>


</p>

</div>
</div>
</div>
</div>
<img class="bannerImage dNone" src="../theme/logo.png" style="width: 800px;height: 800px; margin-right:10%">
</section>


<script src="../theme/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" type="text/javascript"></script>



</body><div id="coupon-birds-div"></div></html>