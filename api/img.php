<?
  $url=$_GET['url'];
  $string = file_get_contents($url);
// Resize to 145 X 133


    $src = imagecreatefromstring($string);
    $width = imagesx($src);
    $height = imagesy($src);
    $new_w = 512;
    $new_h = 512;
    


    $img = imagecreatetruecolor($new_w,$new_h);
    imagealphablending($img, true);
    imagealphablending($src, true);
    imagecopyresized($img,$src,0,0,0,0,$new_w,$new_h,$width,$height);
 

    header('Content-Type: image/png');
    imagepng($img);
    imagedestroy($img);
?>