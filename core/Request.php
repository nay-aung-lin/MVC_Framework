<?php

class Request
{
    public static function uri()
    {
        // dd($_SERVER);
        return parse_url(trim($_SERVER['REQUEST_URI'],'/'),PHP_URL_PATH);
    }
};