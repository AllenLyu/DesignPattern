<?php

/**
 * Created by PhpStorm.
 * User: allenlyu
 * Date: 11/20/16
 * Time: 10:40 PM
 */

//require 'Advertisement.php';
namespace DesignPattern\Factory\Impl;

class AdvertisementFactory
{
    public static function Create($id)
    {
        return new Advertisement($id);
    }
}