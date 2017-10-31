<?php
require 'vendor/autoload.php';

$appRoot = dirname( __FILE__ );

$vendor_include_path = $appRoot . DIRECTORY_SEPARATOR . "vendor";

$myfuses_include_path = $vendor_include_path . DIRECTORY_SEPARATOR .
    "candango";

set_include_path(
    $myfuses_include_path . PATH_SEPARATOR .
    $vendor_include_path . PATH_SEPARATOR .
    ".:/php/includes:"
);

// creating new myfuses instance
$myFuses = MyFuses::getInstance();
$appRef = array("path"=>$appRoot);
$app = $myFuses->createApplication("myfuses_site", $appRef);
$myFuses->doProcess();
