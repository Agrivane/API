<?php
require('config.php');
$i = $_GET['i'];
if($i != null) {
  $API->getAudio($i);
}
else{$API->getAudio();}
