<?php

use PHPUnit\Framework\TestCase;

class StringFormatterTest{

    function testConcat(){
        $String1 = "test1";
        $String2 = "test2";
        concat($String1,String2);
     }

     function testToCamelCase(){
        $String1 = "test1";
        $String2 = "test2";
        toCamelCase($String1,String2);
     }

     function testPrefix(){
        $String1 = "test1";
        $String2 = "test2";
        prefix($String1,String2,false);
        prefix($String1,String2,true);
     }


     function testSuffix(){
        $String1 = "test1";
        $String2 = "test2";
        suffix($String1,String2,false);
        suffix($String1,String2,true);
     }
}


?>