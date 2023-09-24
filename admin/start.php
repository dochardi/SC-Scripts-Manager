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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand"><img src="../theme/logo.png" style="width: 45px;height: 45px;border-radius: 15% !important;"></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?=support_dc?>" target="">Support</a>
</li>
</ul>
</div>
</div>
</nav>
<section class="siteBanner d-flex align-items-center" id="home">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="siteBannerInner">
<h2>Login as Admin</h2>


<?
if(demo=="1")
{
?>
<p>This are a demo server login data are:<br>
Username: Admin<br>
Password: demo<br>
</p>
<?
}
?>

<p>
<?=$error?>
<form action="?action=login" method="post" class="form-inline" style="width: 40%;">
  <label for="fname" class="sr-only" style="color: #ad91ff !important;"><h5>Email or Username:</h5></label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="fname" name="fname">

  <label for="lname" class="sr-only" style="color: #ad91ff !important;"><h5>Password:</h5></label>
  <input type="password"  class="form-control mb-2 mr-sm-2"id="lname" name="lname">

<br><br>
<button type="submit" class="btn btn-outline-success" >Login</button>
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