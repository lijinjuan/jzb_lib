<?php
namespace JzbSerivce;

class CustomerInfo
{
    public static function info()
    {
        return date('Y-m-d H:i:s', time());
    }
}
