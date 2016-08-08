<?php
require('config.php');
$i = $_GET['i'];
if($i != null) {
  $API->getImg($i);
}
else{$API->getImg();}
