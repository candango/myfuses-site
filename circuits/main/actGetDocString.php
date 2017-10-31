<?php

$circuit = MyFuses::getInstance()->getCurrentCircuit();

$app_path = $circuit->getApplication()->getPath();
$circuitName = $circuit->getName();
$actionName = MyFuses::getInstance()->getCurrentAction()->getName();

$docPath = implode("/",
    array(
        substr($app_path, 0, -1),
        "docs",
        $circuitName,
        implode(".", array($actionName, "md"))
    )
);

$parsedown = new Parsedown();

function convertXFAs($s) {
    return preg_replace_callback('/xfa\[(.*?)\]/', function ($matches) {
        return MyFuses::getMySelfXfa($matches[1]);
    }, $s);
}

$docString = $parsedown->text(MyFusesFileHandler::readFile($docPath));
$docString = convertXFAs($docString);
