<?php
session_start();

use Core\Core;


require 'config.php';
require 'vendor/autoload.php';

$core = new Core();
$core->run();
