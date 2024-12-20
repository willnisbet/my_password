<?php
require "vendor/autoload.php";
use Cocur\Slugify\Slugify;


use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use willnisbet\Mypassword\MyUrl;

$generator = new ComputerPasswordGenerator();

$generator
  ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, false)
;

$password = $generator->generatePassword();

echo $password;

$slugify = new Slugify();
echo $slugify->slugify("Hello World!"); // hello-world

$url = new MyUrl();

echo $url->slugify('', '');