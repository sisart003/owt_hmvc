<?php

class Strings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function strlength($str)
    {
        return strlen($str);
    }

    public function my_uppercase($str)
    {
        return strtoupper($str);
    }
}