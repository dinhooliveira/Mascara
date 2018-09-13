<?php
require __DIR__ . '/vendor/autoload.php';

use Mascara\Mascara;

echo Mascara::cnpj("12.555.333/0001-00")."<br>";
echo Mascara::floatForREal("15.25222");