<?php
require __DIR__ . '/../vendor/autoload.php';
require 'vars.php';

$collection->updateOne(
    [],
    ['$inc' => ['views'=> 1]],
);
