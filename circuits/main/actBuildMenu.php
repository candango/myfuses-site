<?php
foreach (MyFuses::getApplication()->getCircuits() as $circuit) {
    $circuit->getName();
}
