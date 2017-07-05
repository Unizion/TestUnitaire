<?php

class StringFormatter
{

    public function concat($String1,$String2){
        return $String1 . $String2;
    }

    public function toCamelCase($String1 , $String2){
        $String1[0].strtoupper($String1[0]);
        $String2[0].strtoupper($String2[0]);
        concat($String1,$String2);
    }

    public function prefix($Prefix , $Word , $toCamelCase){
        if ($toCamelCase == TRUE){
            toCamelCase($Prefix, $Word);
        } else {
            concat($Prefix, $Word);
        }
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