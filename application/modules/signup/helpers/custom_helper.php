<?php

// find about string length
if(!function_exists('find_my_length'))
{
    function find_my_length($string)
    {
        return strlen($string);
    }
}

// find about the level of student
if(!function_exists('find_my_level'))
{
    function find_my_level($score)
    {
        if($score < 35){
            return 'Failed!';
        }elseif($score >= 35 && $score < 70){
            return 'Average';
        }elseif($score >= 70 && $score < 90){
            return 'Good';
        }elseif($score > 90){
            return 'Pogchamp';
        }
    }
}