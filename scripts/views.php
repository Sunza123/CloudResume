<?php
require __DIR__ . '/../vendor/autoload.php';
require 'vars.php';

$result = $collection->updateOne(
    [],
    ['$inc' => ['views'=> 1]],
);
