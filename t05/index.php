<?php

    class StrFrequency {

        function __construct($str) {
            $this->str = $str;
        }

        function letterFrequencies() {
            $str = count_chars(strtolower($this->str), 1);
            $res = array();

            foreach($str as $k => $v) {
                if(ctype_alpha(chr($k))) {
                    $res[strtoupper(chr($k))] = $v;
                }
            }
            ksort($res);

            return $res;
        }

        function wordFrequencies() {
            $str = trim(preg_replace("/\s+/", " ", $this->str));
            $str = array_count_values(str_word_count(strtolower($str), 1));
            $res = array();

            foreach($str as $k => $v) {
                $k = preg_replace( '/[^a-zA-Z]/', '', $k);
                $res[strtoupper($k)] = $v;
            }

            return $res;
        }

        function reverseString() {
            $str = strrev($this->str);
            $str = preg_replace( '/[^a-zA-Z]/', ' ', $str);

            return $str;
        }
    };

    /*
    function test($string){
        $obj= new StrFrequency($string);
        $symbol = $obj->letterFrequencies();
        echo "Letters in ". $string. "\n";
        foreach($symbol as $k => $v) {
            echo "Letter ". $k . " is repeated ". $v . " times\n";
        }
        $symbol = $obj->wordFrequencies();
        echo "Words in ". $string. "\n";
        foreach($symbol as $k => $v) {
            echo"Word ". $k . " is repeated ". $v . " times\n";
        }

        echo "Reverse the string: ". $string. "\n";
        echo $obj->reverseString() . "\n";
    }
    
    test("Face it, Harley-- you and your Puddin' are kaput!");
    echo"*************\n";
    test("  Test test 123 45 !0 f   HeLlO wOrLd  ");
    echo"*************\n";test("")
    */
    
?>