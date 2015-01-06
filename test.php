<?php
# ref. http://symfony.com/doc/current/components/yaml/introduction.html
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Parser;

$yaml = new Parser();
$value = $yaml->parse(file_get_contents('test.yml'));
var_dump($value);


use Symfony\Component\Yaml\Yaml;
$value = Yaml::parse(file_get_contents('test.yml'));
var_dump($value);
