<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require_once '../vendor/autoload.php';

$hello = new Hello();

echo $hello->talk().PHP_EOL;
echo '<br>';
echo SayHello::world();