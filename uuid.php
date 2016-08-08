<?php
require(__DIR__ . '/api.php');
$uuid = new XPro\API;
$nu = $uuid->GUID();
echo $nu;