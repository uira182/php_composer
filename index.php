<?php

require_once __DIR__ . '/vendor/autoload.php';

use Control\Battle;

$battle = new Battle('Street Fighter!');
echo($battle->startBatle());