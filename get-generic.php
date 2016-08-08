<?php
require('config.php');
$i = $_GET['i'];
if($i != null) {
  $API->getGeneric($i);
}
else{$API->getGeneric();}
