<?php
require('config.php');
$i = $_GET['i'];
if($i != null) {
  $API->getVid($i);
}
else{$API->getVid();}
