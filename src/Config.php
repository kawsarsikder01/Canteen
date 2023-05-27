<?php 

namespace SOURCE;

class Config{
    static public function datasource()
    {
        return self::docroot()."admin".DIRECTORY_SEPARATOR."sources".DIRECTORY_SEPARATOR;
    }
    static public function docroot()
    {
        return $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
    }
}