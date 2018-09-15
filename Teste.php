<?php
require __DIR__ . '/vendor/autoload.php';

use Mascara\Mascara;

echo Mascara::cnpj("12555333000100")."<br>";
echo Mascara::floatForREal("15.25222")."<br>";
echo Mascara::cpf("13570394760");