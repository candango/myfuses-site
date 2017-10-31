<?php
/**
 * Create the application configuration.
 *
 * This file name should be <applcaitonName>_conf.php.
 *
 * Output:
 *
 * @global $applicationConf
 */
$applicationConf = require MyFuses::getApplication()->getPath() . "conf" .
    DIRECTORY_SEPARATOR . MyFuses::getApplication()->getName() . "_conf.php";
