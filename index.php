<?php
require 'vendor/autoload.php';

$appRoot = dirname( __FILE__ );

$vendor_include_path = $appRoot . DIRECTORY_SEPARATOR . "vendor";

set_include_path(
    $vendor_include_path . PATH_SEPARATOR .
    ".:/php/includes:"
);

// creating new myfuses instance
$myFuses = MyFuses::getInstance();
$appRef = array("path"=>$appRoot);
$app = $myFuses->createApplication("myfuses-site", $appRef);
$myFuses->doProcess();
