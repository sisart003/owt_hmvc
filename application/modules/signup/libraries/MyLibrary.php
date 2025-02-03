<?php

class MyLibrary{
    // method convert first letter into capital
    function convert_words($string)
    {
        return ucwords($string);
    }

    function my_length($string)
    {
        return strlen($string);
    }
}