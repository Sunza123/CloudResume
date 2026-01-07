<?php
require __DIR__ . '/../vendor/autoload.php';
require 'vars.php';
// Start example code here


$result = $collection->updateOne(
    [],
    ['$inc' => ['views'=> 1]],
);
