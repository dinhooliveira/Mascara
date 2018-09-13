<?php

namespace Mascara;
class Mascara {

    static function cnpj($string){
        $caracteres = array('-','.','/');
        $string = str_replace($caracteres,"",$string);
        if(strlen($string) < 14){
            $string = str_pad($string, 14, "0", STR_PAD_LEFT);
        }

        $cnpj  = substr($string, 0, 2).".";
        $cnpj  .= substr($string, 2, 3).".";
        $cnpj  .= substr($string, 5, 3)."/";
        $cnpj  .= substr($string, 8, 4)."-";
        $cnpj  .= substr($string, 12, 2);
        return $cnpj;
    }

    static function floatForReal($string){
       return number_format($string,2,",",".");
    }
}