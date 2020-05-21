<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hansaplatz</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <h4>hansaplatz</h4>
  <div id='hansaphotos' class="container">
<?php
$picList = json_decode(file_get_contents("json/hansa.json"),TRUE);
$path="http://d1ua7ibh28zfpl.cloudfront.net/hansa/";

foreach($picList as $pic ){
  echo "<img id='" .$pic['name']."' class='photoBox' src='".$path.$pic['name']."'>y</a>" ;
  echo "<img id='" .$pic['name']."' class='photoBox' src='".$path.$pic['name']."'>y</a>" ;
}
?>
</div>
</body>
