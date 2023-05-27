<?php 

namespace SOURCE\Utility;


class Validator{
    static public function url()
    {
        return true;
    }
    static public function email()
    {
        return true;
    }
    static public function empty($var)
    {
        return false;
    }
    static public function validate($var)
    {
        return true;
    }
}