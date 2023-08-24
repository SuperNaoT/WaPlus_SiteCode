<?php
  session_start();
  echo "閲覧中のディスプレイサイズは下記の通りです！！<BR>";
  echo "width: ".$_SESSION['screen_size']['width']."<BR>";
  echo "hight: ".$_SESSION['screen_size']['height'];
?>