<?php
  $json_str = file_get_contents('php://input'); //接收 REQUEST的BODY
  $json_obj = json_decode($json_str); //轉JSON格式

  $myfile = open("log.txt", "w+") or die("Unable to open file;"); //設定一個log.txt用來印訊息
  fwrite($myfile, "\xEF\xBB\xBf".$json_str); //在字串前加入\xEF\xBB\xBf轉成utf8格式
  fclose($myfile);
?>
