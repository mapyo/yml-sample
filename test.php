<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Parser;

$yaml = new Parser();

$value = $yaml->parse(file_get_contents('test.yml'));

var_dump($value);
