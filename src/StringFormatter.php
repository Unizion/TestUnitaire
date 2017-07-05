<?php

class StringFormatter
{

    public function concat($String1,$String2){
        return $String1 . $String2;
    }

    public function toCamelCase($Prefix , $String2){
        $Prefix[0].strtoupper($Prefix[0]);
        $String2[0].strtoupper($String2[0]);
        concat($String1,$String2);
    }

    public function suffix($Suffix , $Word , $toCamelCase){
        if ($toCamelCase == TRUE){
            toCamelCase($Word, $Suffix);
        } else {
            concat($Word,$Suffix);
        }
    }


}

?>