<?php
foreach (MyFuses::getApplication()->getCircuits() as $circuit) {
    var_dump($circuit->getName());
}
die();