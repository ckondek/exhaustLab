<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hansaplatz</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

  <div id='hansaphotos' class="container">
    <h4>hansaplatz</h4>
<?php
      function picSort($a,$b){
                              if ($a["oder"]==$b["order"]) return 0;
                              return ($a["order"]<$b["order"])?-1:1;
                              }
      $picList = json_decode(file_get_contents("json/hansa.json"),TRUE);
      usort($picList,"picSort");
      $path="http://d1ua7ibh28zfpl.cloudfront.net/hansa/";
      foreach($picList as $pic ){
        echo "<img id='" .$pic['name']."' class='photoBox' src='".$path.$pic['name']."'></a>" ;
      }
  ?>
</div>
</body>
