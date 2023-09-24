<?php
function getdata($type,$repertory) 
{ 
if($type=="releases"){$url='https://api.github.com/repos/'.$repertory.'/releases';}
if($type=="user"){$url='https://api.github.com/users/'.$repertory.'';}
if($type=="dev"){$url='https://api.github.com/repos/'.$repertory.'/contributors';}

if($url==""){

return $url;

}else{
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL,$url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); // set browser/user agent    

    $result = curl_exec ($ch); 
    curl_close ($ch); 
    
    //return $url;

    return json_decode($result,true); 
  }
} 
?>